<?php
    include_once 'header.php'

?>

<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dBName = "portfolio";

    $con = mysqli_connect($host, $user, $password);
    mysqli_select_db($con, $dBName) or die(mysqli_error($con));

    if(isset($_POST['username'])){

        $uname=$_POST['username'];
        $password=$_POST['pwd'];

        $sql="select * from admin where User='".$uname."'AND Password='".$password."'
        limit 1";

        $result=mysqli_query($sql);
        
        if(mysqli_num_rows($result)==1){
            echo " Succesful Log in";
            exit();
        }
        else{
            echo " Invalid Password";
            exit();
        }
    }

?>

<link rel="stylesheet" type="text/css" href="style/login.css?v=<?php echo time(); ?>">

<section class="admin-login">
    <form action="admin.php" method="post">
        <h2>Login</h2>
            <input type="text" class="form-control input" name="username" placeholder="Name..">
            <input type="password" class="form-control input" name="pwd" placeholder="Password..">
            <button type="submit" class="form-control submit" name="submit">Login</button>
    </form>
</section>
