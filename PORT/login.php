<?php
    include_once "header.php"

?>

<link rel="stylesheet" type="text/css" href="style/header.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/login.css?v=<?php echo time(); ?>">

<?php
// Save errors here
$errors = [];

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    $username = $_POST['username'];
    $password = $_POST['password'];


$host = "localhost";
$root = "root";
$password = "";
$dBName = "portfolio";

$conn = mysqli_connect($host, $root, $password);

$sql = 'SELECT * FROM `admin` WHERE `User` = :username';
$statement = $conn->prepare( $sql );

$params = [
    'username' => $username
];

$result = $statement->execute( $params );

if ( $statement->rowCount() === 1 ) {
    $user = $statement->fetch();
} else {
    $errors['email'] = 'Onbekend account';
}

if ( password_verify($password, $user['wachtwoord'])) {
    session_start();
    $_SESSION['user_id']  = $user['id'];
    $_SESSION['voornaam'] = $user['voornaam'];

    header( 'Location: admin.php');
    exit();
}

} else {
    $errors['password'] = 'Invalid Password';
}
?>

<section class="admin-login">
    <form method="POST" action="login.php">
        <h2>Login</h2>
            <input type="text" class="form-control input" name="username" placeholder="Name..">
            <?php if (isset( $errors['username'] ) ): ?>
                <span class="error"><?php echo $errors['username'] ?></span>
            <?php endif; ?>

            <input type="password" class="form-control input" name="password" placeholder="Password..">
            <?php if (isset( $errors['password'] ) ): ?>
                <span class="error"><?php echo $errors['password'] ?></span>
            <?php endif; ?>
            <button type="submit" class="form-control submit" name="submit">Login</button>
    </form>
</section>
