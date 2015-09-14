<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Downloads | Santa Susana Game Development Club</title>
    <link href="css/main.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        #img-heading {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    
    <?php 
    
        include('header.php');

    ?>

    <section>
        <div class="container">
            <div class="row">
               <div class="container">
                   <div class="row">
                   	<div class="container">
                           <div class="col-xs-12">
                               <h1>Downloads</h1>
                               <p>This page contains everything you need to download for club.</p>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="container">
                           <div class="col-sm-5 col-xs-12">
                               <img src="images/content/eclipse.png" id="img-heading" class="img-responsive" />
                               <p>Eclipse Luna is an Open-Source Java IDE. Eclipse will compile and run your code in one click. Programmers like Eclipse because it is very good at completing code for you. Eclipse is also very popular among programmers because there are plug-ins to make it work with any programming language. To download, click the link bellow and download the latest "Eclipse IDE for Java Developers" for your operating system.</p>
                               <p><a href="https://www.eclipse.org/downloads/" target="_blank">Download Here</a></p>
                           </div>
                           <div class="col-sm-7 col-xs-12">
                               <div id="eclipse-carousel" class="carousel slide">
                                   <div class="carousel-inner">
                                       <div class="item active">
                                           <img src="images/content/downlaodsCarousel/eclipse-web.png" class="img-responsive" />
                                       </div>

                                       <div class="item">
                                           <img src="images/content/downlaodsCarousel/eclipse.png" class="img-responsive" />
                                       </div>

                                       <a href="#eclipse-carousel" class="carousel-control left" data-slide="prev">
                                           <span class="icon-prev"></span>
                                       </a>

                                       <a href="#eclipse-carousel" class="carousel-control right" data-slide="next">
                                           <span class="icon-next"></span>
                                       </a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="container">
                           <div class="col-sm-5 col-xs-12">
                               <img src="images/content/libgdx.png" id="img-heading" class="img-responsive" />
                               <p>LibGDX is an open source game engine for Java. LibGDX is meant to be able to deploy on any platform with Java, so you only have to write one version of the code for your game and it will be available on Desktop/Android/iOS/HTML5. We will be using LibGDX to code our games. To download, click the link below and click "Download Setup App"</p>
                               <p><a href="http://libgdx.badlogicgames.com/download.html" target="_blank">Download Here</a></p>
                           </div>
                           <div class="col-sm-7 col-xs-12">
                               <div id="libgdx-carousel" class="carousel slide">
                                   <div class="carousel-inner">
                                       <div class="item active">
                                           <img src="images/content/downlaodsCarousel/libgdx-web.png" class="img-responsive" />
                                       </div>

                                       <div class="item">
                                           <img src="images/content/downlaodsCarousel/libgdx.png" class="img-responsive" />
                                       </div>

                                       <a href="#libgdx-carousel" class="carousel-control left" data-slide="prev">
                                           <span class="icon-prev"></span>
                                       </a>

                                       <a href="#libgdx-carousel" class="carousel-control right" data-slide="next">
                                           <span class="icon-next"></span>
                                       </a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="container">
                           <div class="col-sm-5 col-xs-12">
                               <img src="images/content/tiled.png" id="img-heading" class="img-responsive" />
                               <p>Tiled Map Editor is an open source map editor. The designers will be using this program to put the levels for the 2D side-scroller together. We won't be using this for a while, but it is best that the designers have it already so we don't have to spend too much time downloading it when the time comes. To download, click the link bellow and click the link for your operating system under "latest release"</p>
                               <p><a href="http://www.mapeditor.org/download.html" target="_blank">Download Here</a></p>
                           </div>
                           <div class="col-sm-7 col-xs-12">
                               <div id="tiled-carousel" class="carousel slide">
                                   <div class="carousel-inner">
                                       <div class="item active">
                                           <img src="images/content/downlaodsCarousel/tiled-web.png" class="img-responsive" />
                                       </div>

                                       <div class="item">
                                           <img src="images/content/downlaodsCarousel/tiled.png" class="img-responsive" />
                                       </div>

                                       <a href="#tiled-carousel" class="carousel-control left" data-slide="prev">
                                           <span class="icon-prev"></span>
                                       </a>

                                       <a href="#tiled-carousel" class="carousel-control right" data-slide="next">
                                           <span class="icon-next"></span>
                                       </a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>

    
    
    <?php 
    
        include('footer.php');
        include('javascript.php');

    ?>
</body>
</html>
