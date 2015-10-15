<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include_once($path);
    ?>
    <title>Santa Susana Game Development Club</title>
    <style>
        #calendar {
            margin-top: 0;
        }
        #formName {
            padding-left: 0;
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
        <!--<div class="col-xs-12 topAlert">
            <img src="images/content/gamedevguy.png" class="img-responsive"/> 
            <div class="topAlert-text">
                No School Wednesday! Meeting on Thursday!
            </div>
        </div>-->
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="col-sm-9 col-xs-12">
                    <h1>Santa Susana Game Development Club</h1>
                    <p>Welcome to the web page for Santa Susana High School's Game Development Club! Game Dev Club is a club where students are taught how to develop video games using computer programming. The goal of the club is to not only create games, but to also simulate the actual working environment in Game Development, teaching the members about collaboration and the Game Developing Process.</p>
                    <div class="col-sm-6 col-xs-12">
                        <div class="embed-responsive embed-responsive-4by3">
                        	<div class="embed-responsive-item">
                                <div id="home-carousel" class="carousel slide">
                                    <div class="carousel-inner">

                                        <div class="item active">
                                            <img src="images/carousel/IMG_0271.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/carousel/IMG_0272.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/carousel/IMG_0273.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/carousel/IMG_0274.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/carousel/IMG_0278.JPG" class="img-responsive" />
                                        </div>

                                        <a href="#home-carousel" class="carousel-control left" data-slide="prev">
                                            <span class="icon-prev"></span>
                                        </a>

                                        <a href="#home-carousel" class="carousel-control right" data-slide="next">
                                            <span class="icon-next"></span>
                                        </a>

                                    </div>
                                </div>
                        	</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;wkst=1&amp;bgcolor=%23c0c0c0&amp;src=uioi5lkseqrvd0f7ecrvnh91gc%40group.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <br /><p><a href="https://github.com/Santa-Susana-Game-Development-Club/Game-Dev-Site/issues" target="_blank">Have a problem with the site? Let us know!</a></p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <h1>Board</h1>
                    <p>Advisor - Mr. Clarke - <a href="mailto:darius.clarke@simivalleyusd.org" target="_blank">darius.clarke@simivalleyusd.org</a></p>
                    <p>President - Jos&eacute; Rodriguez-Rivas -  <a href="mailto:JoseRivas823@gmail.com" target="_blank">JoseRivas823@gmail.com</a></p>
                    <p>Vice President - Thomas Mancinelli - <a href="mailto:thomas.mancinelli42@gmail.com" target="_blank">thomas.mancinelli42@gmail.com</a></p>
                    <p>Secretary - Hunter Buch - <a href="mailto:talozion@gmail.com" target="_blank">talozion@gmail.com</a></p>
                    <p>Treasurer - Anthony Moore - <a href="mailto:a.moore@simivalleyusd.org" target="_blank">a.moore@simivalleyusd.org</a></p>

                    <h1>Times</h1>
                    <p>Meeting times for the 2015-2016 school year are every Wednesday in Room 903 from 3pm to 5pm.</p>

                    <a href="http://www.santasusana.org/" target="_blank"><img src="/images/content/SSHS-logo.png" alt="Santa Susana High School" class="img-responsive" /></a>

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

    
</body>
</html>
