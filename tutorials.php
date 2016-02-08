<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include_once($path);
    ?>
    <title>Tutorials | Santa Susana Game Development Club</title>
    <style>
        #pl2, #pl3, #pl4, #pl5, #pl6 {
            display: none;
        }
        .tab-link:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>


    <?php

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/header.php";
    include_once($path);

    ?>

    <section>
        <div class="container">
            <div class="row div col-xs-12">
                <div class="container">
                	<h1>Tutorials</h1>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-xs-12">
                        <ul class="nav nav-tabs nav-justified" id="navTabs">
                          <li role="presentation" class="active" id="t1"><a class="tab-link">Full Programming Tutorial</a></li>
                          <li role="presentation" id="t2"><a class="tab-link">Intro To Programming</a></li>
                          <li role="presentation" id="t3"><a class="tab-link">Pong</a></li>
                          <li role="presentation" id="t4"><a class="tab-link">Space Invaders</a></li>
                          <li role="presentation" id="t5"><a class="tab-link">Intermediate Java</a></li>
                          <li role="presentation" id="t6"><a class="tab-link">Code Lapse</a></li>
                        </ul>
                        <section>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe  id="playList" class="embed-responsive-item" src="//www.youtube.com/embed/videoseries?list=PLXGqUKNYJYkiqqE0fTuOGg0BLX920aMs7" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </section>
                    </div>
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
    <script src="tutorials.js"></script>
</body>
</html>
