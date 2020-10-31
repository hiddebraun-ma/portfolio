<?php
    include_once 'header.php'
?>

<link rel="stylesheet" type="text/css" href="style/login.css?v=<?php echo time(); ?>">

<section class="admin-login">
    <form action="welcome.php" method="post">
        <h2>Login</h2>
            <input type="text" class="form-control input" name="uname" placeholder="Name..">
            <input type="password" class="form-control input" name="pwd" placeholder="Password..">
            <button type="submit" class="form-control submit" name="submit">Login</button>
    </form>
</section>
