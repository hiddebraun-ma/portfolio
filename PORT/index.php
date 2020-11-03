<?php
    include_once 'header.php'
?>

<link rel="stylesheet" type="text/css" href="style/index.css?v=<?php echo time(); ?>">
<body>
<video id=video-comp1 poster=poster.JPG autoplay loop muted>
    <source src="background/2123.mp4" type="video/mp4">
</video><!-- Notebook.html background video.-->  
    <div class="content">
        <h2>Hi I'm Vincent.</h2>
        <h1>I make your <span class="slanted">ideas</span> a reality.</h1>
        <p>I'm a Dutch software developer who loves building digital products.</p>
        <a href="about.php" class="learn-more"><p>Learn more ></p></a>
    </div>
    <div class="index-wrapper">
        <div class="button-container">
            <a href="project.php"><button class="btn btn1">Projects</button></a>
        </div><!-- Main button leading to Projects page.-->
        <div id="MyClockDisplay"><script type="text/javascript" src="js/clock.js"></script></div><!-- Java Script for clock. -->
    </div>
</body>
</html>
