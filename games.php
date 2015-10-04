<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Games | Santa Susana Game Development Club</title>
    <link href="css/main.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    
    <?php 
    
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/header.php";
    include_once($path);

    ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h1>Games</h1>
                    <p>This page contains all the information to download Game Dev Club Games. This page is also for resources for the developers.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h2>Pong <small>Fall 2014</small></h2>
                    <img src="images/content/games/pong.png" alt="Pong" class="img-responsive"/>
                    <h3>Description</h3>
                    <p>This is a remake of the classic game made by Atari in 1972. In Pong, you play tennis against the computer. As the ball bounces off of the paddles and the screen, the ball speeds up.</p>
                    <h3>For Developers</h3>
                    <p><a href="/gamefiles/pong_assets.zip">Download the assets here</a></p>
                    <p><a href="https://github.com/JoseRivas1998/pongfall2014" target="_blank">GitHub Repository (Source Code)</a></p>
                    <p><a href="/tutorials.php">Programming Tutorial</a></p>
                    <h3>For Everyone</h3>
                    <p><a href="/gamefiles/Pong.jar">Download the Game Here!</a></p>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h2>Space Invaders <small>Fall 2015</small></h2>
                    <img src="images/content/games/spaceinvaders.png" alt="Space Invaders" class="img-responsive" />
                    <h3>Description</h3>
                    <p>This is a remake of the classic game made by Taito in 1978. In Space Invaders, an armada of aliens is attacking and a space ship must defeat them.</p>
                    <h3>For Developers</h3>
                    <p><a href="/gamefiles/space_invaders_assets.zip">Download the assets here</a></p>
                    <p><a href="https://github.com/Santa-Susana-Game-Development-Club/Space-Invaders" target="_blank">GitHub Repository (Source Code)</a></p>
                    <p><a href="/tutorials.php">Programming Tutorial</a></p>
                </div>
            </div>
        </div>
    </section>
    
    <?php 
    
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/footer.php";
    include_once($path);
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/javascript.php";
    include_once($path);

    ?>
</body>
</html>
