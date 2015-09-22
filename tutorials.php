<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorials | Santa Susana Game Development Club</title>
    <link href="css/main.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #pl2, #pl3, #pl4, #pl5 {
            display: none;
        }
        .tab-link:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
    
    
    <?php 
    
        include('header.php');

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
                        <ul class="nav nav-tabs">
                          <li role="presentation" class="active" id="t1" onclick="showPlaylist('#t1', '#pl1');"><a class="tab-link">Full Programming Tutorial</a></li>
                          <li role="presentation" id="t2" onclick="showPlaylist('#t2', '#pl2');"><a class="tab-link">Intro To Programming</a></li>
                          <li role="presentation" id="t3" onclick="showPlaylist('#t3', '#pl3');"><a class="tab-link">Pong</a></li>
                          <li role="presentation" id="t4" onclick="showPlaylist('#t4', '#pl4');"><a class="tab-link">Space Invaders</a></li>
                          <li role="presentation" id="t5" onclick="showPlaylist('#t5', '#pl5');"><a class="tab-link">Code Lapse</a></li>
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
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/videoseries?list=PLXGqUKNYJYkhaknyJbGT7EzZLelxHlOfw" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php 
    
        include('footer.php');
        include('javascript.php');

    ?>
    <script type="text/javascript">
        function showPlaylist(navid, pid) {
            $("#t1, #t2, #t3, #t4, #t5").removeClass("active");
            $(navid).addClass("active");
            $("#pl1, #pl2, #pl3, #pl4, #pl5").hide();
            $(pid).show();
        }
    </script>
</body>
</html>
