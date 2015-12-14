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
                        <ul class="nav nav-tabs nav-justified">
                          <li role="presentation" class="active" id="t1" onclick="showPlaylist('#t1', '#pl1');"><a class="tab-link">Full Programming Tutorial</a></li>
                          <li role="presentation" id="t2" onclick="showPlaylist('#t2', '#pl2');"><a class="tab-link">Intro To Programming</a></li>
                          <li role="presentation" id="t3" onclick="showPlaylist('#t3', '#pl3');"><a class="tab-link">Pong</a></li>
                          <li role="presentation" id="t4" onclick="showPlaylist('#t4', '#pl4');"><a class="tab-link">Space Invaders</a></li>
                          <li role="presentation" id="t5" onclick="showPlaylist('#t5', '#pl5');"><a class="tab-link">Intermediate Java</a></li>
                          <li role="presentation" id="t6" onclick="showPlaylist('#t6', '#pl6');"><a class="tab-link">Code Lapse</a></li>
                        </ul>
                        <section id="pl1">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/videoseries?list=PLXGqUKNYJYkiqqE0fTuOGg0BLX920aMs7" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </section>
                        <section id="pl2">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/videoseries?list=PLXGqUKNYJYkjq3wsxyHQ-UJvrLAi1XjYV" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </section>
                        <section id="pl3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/videoseries?list=PLXGqUKNYJYkhkXBTuTyBkfK10P3fpsRkJ" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </section>
                        <section id="pl4">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/videoseries?list=PLXGqUKNYJYki0ybyvz-DpxL-85q5yaQWz" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </section>
                        <section id="pl5">
                          <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="//www.youtube.com/embed/videoseries?list=PLXGqUKNYJYkihuquwykpJQcMfdp8kjy3l" frameborder="0" class="embed-responsive-item" allowfullscreen></iframe>
                          </div>
                        </section>
                        <section id="pl6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/videoseries?list=PLXGqUKNYJYkhaknyJbGT7EzZLelxHlOfw" frameborder="0" allowfullscreen></iframe>
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
    <script type="text/javascript">
        if($(location).attr('search') != "") {
            var hash = $(location).attr('search');
            if(hash == "?pl=1") {
                showPlaylist('#t1', '#pl1');
            }
            if(hash == "?pl=2") {
                showPlaylist('#t2', '#pl2');
            }
            if(hash == "?pl=3") {
                showPlaylist('#t3', '#pl3');
            }
            if(hash == "?pl=4") {
                showPlaylist('#t4', '#pl4');
            }
            if(hash == "?pl=5") {
                showPlaylist('#t5', '#pl5');
            }
            if(hash == "?pl=6") {
                showPlaylist('#t6', '#pl6');
            }
        }
        function showPlaylist(navid, pid) {
            $("#t1, #t2, #t3, #t4, #t5, #t6").removeClass("active");
            $(navid).addClass("active");
            $("#pl1, #pl2, #pl3, #pl4, #pl5, #pl6").hide();
            $(pid).show();
        }
    </script>
</body>
</html>
