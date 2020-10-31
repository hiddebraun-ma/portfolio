<!DOCTYPE html>
<html lang="en">
<head>
    <!--Standard-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notebook</title>
    <meta name="author" content="Vincent Pinas">
    <meta name="description" content="Web Portfolio">

    <!--Compatibility-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Icons-->
    <link rel="shortcut icon" type="image/x-icon" href="background/favicon.ico">

    <!--Notebook CSS-->
    <link rel="stylesheet" type="text/css" href="style/index.css?v=<?php echo time(); ?>">
    <!--Scripts-->
</head>
<body>
<video id=video-comp1 poster=poster.JPG autoplay loop muted>
    <source src="background/comp1.mp4" type="video/mp4">
</video><!-- Notebook.html background video.-->  
<div id="mobile__menu" class="overlay">
    <a class="close">&times;</a>
    <div class="overlay__content">
        <a href="services.php">Services</a>
        <a href="project.php">Projects</a>
        <a href="about.php">About</a>
    </div>
</div>
<header>
    <a class="logo" href=""><img src="background/" alt="logo"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="services.php">Services</a></li>
                <li><a href="project.php">Projects</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    <a class="cta" href="contact.php">Contact</a>
    <p class="menu cta">Menu</p>
</header>
    <script type="text/javascript" src="js/mobilenav.js"></script><!-- Java Script for mobile nav. -->
</body>
</html>