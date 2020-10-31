<?php
    include_once 'header.php'

?>

<?php
    $serverName = "localhost";
    $dBusername = "root";
    $dBPassword = "";
    $dBName = "portfolio";

    $conn = mysqli_connect($serverName, $dBusername, $dBPassword, $dBName);

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>

<link rel="stylesheet" type="text/css" href="style/login.css?v=<?php echo time(); ?>">

<section class="admin-login">
    <form action="welcome.php" method="post">
        <h2>Login</h2>
            <input type="text" class="form-control input" name="username" placeholder="Name..">
            <input type="password" class="form-control input" name="pwd" placeholder="Password..">
            <button type="submit" class="form-control submit" name="submit">Login</button>
    </form>
</section>
