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
    <style type="text/css">
        body {
            position: relative;
        }

        .affix-top {
            position: relative;
        }

        .affix-bottom {
            position: absolute;
        }

        .affix {
            top: 20px;
            max-width: 20%;
        }

        #Enav > li > a {
            color: rgb(0, 215, 215));
        }

        #Enav > li.active {
            background: rgb(238, 238, 238);
        }

        #Enav > li.active > a, #Enav > li > a:hover {
            color: rgb(0, 128, 128);
        }
        .videoFrame {
            width: 100%;
            height: 450px;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".scrollspy">
    
    
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
                    <div class="col-sm-3 scrollspy">
                        <ul id="Enav" class="nav hidden-xs" data-spy="affix">
                            <li>
                                <a href="#tut1">"Hello World" and Numerical Variables</a>
                            </li>
                            <li>
                                <a href="#tut2">Booleans and Boolean Operators</a>
                            </li>
                            <li>
                                <a href="#tut3">Conditional Statements and the Scanner Class</a>
                            </li>
                            <li>
                                <a href="#tut4">Loops</a>
                            </li>
                            <li>
                                <a href="#tut5">Arrays and ArrayLists</a>
                            </li>
                            <li>
                                <a href="#tut6">Objects and Classes</a>
                            </li>
                            <li>
                                <a href="#tut7">Pong - 1 - Setting up LibGDX</a>
                            </li>
                            <li>
                                <a href="#tut8">Pong - 2 - Setting up the Game Class</a>
                            </li>
                            <li>
                                <a href="#tut9">Pong - 3 - Managers</a>
                            </li>
                            <li>
                                <a href="#tut10">Pong - 4 - Game States</a>
                            </li>
                            <li>
                                <a href="#tut11">Pong - 5 - Entity and Ball Class</a>
                            </li>
                            <li>
                                <a href="#tut12">Pong - 6 - Paddle Classes</a>
                            </li>
                            <li>
                                <a href="#tut13">Pong - 7 - Finishing Play State</a>
                            </li>
                            <li>
                                <a href="#tut14">Pong - 8 - Title State and Deploying</a>
                            </li>
                            <li>
                                <a href="#tut15">Loading a Tiled Map</a>
                            </li>
                            <li>
                                <a href="#tut16">Space Invaders - 1 - Setting Up and MyConstants</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-9 col-xs-12">
                        <a href="#tut16">Space Invaders</a>
                        <section id="tut1">
                            <h2>"Hello World" and Numerical Variables</h2>
                            <iframe src="//www.youtube.com/embed/hGjGwLyM9Dw?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>This is the first Tutorial for Java! You will learn "Hello World" and numerical variables.</p>
                        </section>
                        <section id="tut2">
                            <h2>Booleans and Boolean Operators</h2>
                            <iframe src="//www.youtube.com/embed/1HhgCw6ziM0?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>Today you will learn about how booleans work.</p>
                        </section>
                        <section id="tut3">
                            <h2>Conditional Statements and the Scanner Class</h2>
                            <iframe src="//www.youtube.com/embed/ODHW5WTBXu4?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will be learning about the appliances of booleans and user input</p>
                        </section>
                        <section id="tut4">
                            <h2>Loops</h2>
                            <iframe src="//www.youtube.com/embed/DQ0x_0ZHYvk?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will learn about loops</p>
                        </section>
                        <section id="tut5">
                            <h2>Arrays and ArrayLists</h2>
                            <iframe src="//www.youtube.com/embed/kNUFN9Y4mdI?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will be learning about arrays, and using loops with arrays</p>
                        </section>
                        <section id="tut6">
                            <h2>Objects and Classes</h2>
                            <iframe src="//www.youtube.com/embed/JrwbOxyuP1E?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will be learning the three basic concepts of Object-oriented programming: Encapsulation, Inheritance, and Polymorphism</p>
                        </section>
                        <section id="tut7">
                            <h2>Pong - 1 - Setting up LibGDX</h2>
                            <iframe src="//www.youtube.com/embed/WEjFP2RElnY?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will learn how to set up libGDX so we can make our games in the future</p>
                        </section>
                        <section id="tut8">
                            <h2>Pong - 2 - Setting up the Game Class</h2>
                            <iframe src="//www.youtube.com/embed/BZAX1aiBTzw?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will be preparing the class that handles the entire game</p>
                        </section>
                        <section id="tut9">
                            <h2>Pong - 3 - Managers</h2>
                            <iframe src="//www.youtube.com/embed/lwzv0UapGas?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will set up the classes that manage your game. You will use managers similar to these in all your games</p>
                        </section>
                        <section id="tut10">
                            <h2>Pong - 4 - Game States</h2>
                            <iframe src="//www.youtube.com/embed/MuTDz2Ru_jQ?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will make the gamestate and the gamestatemanager</p>
                        </section>
                        <section id="tut11">
                            <h2>Pong - 5 - Entity and Ball Class</h2>
                            <iframe src="//www.youtube.com/embed/hFhi_g6o1sc?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will be making the base class for all our in game entities and the class that runs the ball</p>
                        </section>
                        <section id="tut12">
                            <h2>Pong - 6 - Paddle Classes</h2>
                            <iframe src="//www.youtube.com/embed/KzbKgy0SBBw?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will be making the abstract Paddle class, the Player class, and the AI class</p>
                        </section>
                        <section id="tut13">
                            <h2>Pong - 7 - Finishing Play State</h2>
                            <iframe src="//www.youtube.com/embed/02k5d_WVthk?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will be adding final touches to the Play State</p>
                        </section>
                        <section id="tut14">
                            <h2>Pong - 8 - Title State and Deploying</h2>
                            <iframe src="//www.youtube.com/embed/1DoAtnY68aQ?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will be making the Title State and exporting the game to a .jar file</p>
                        </section>
                        <section id="tut15">
                            <h2>Loading a Tiled Map</h2>
                            <iframe src="//www.youtube.com/embed/HxUxlC4F_8U?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You be learning how to load a Tiled Map into libGDX</p>
                        </section>
                        <section id="tut16">
                            <h2>Space Invaders - 1 - Setting Up and MyConstants</h2>
                            <iframe src="//www.youtube.com/embed/Fv2ktQwjaGY?rel=0" frameborder="0" class="videoFrame"></iframe>
                            <h2>Description</h2>
                            <p>You will set up the Space Invaders project and write the MyConstants class.</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php 
    
        include('footer.php');

    ?>

    <script src="/js/jquery.1.11.2.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
        $('#Enav').affix({
            offset: {
                top: $('#Enav').offset().top,
                bottom: ($('footer').outerHeight(true)) + 40
            }
        });
        $('#Enav').affix({
            offset: {
                top: $('#Enav').offset().top
            }
        });
    </script>
</body>
</html>
