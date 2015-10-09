<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include_once($path);
    ?>
    <title>Field Trips and Fundraisers | Santa Susana Game Development Club</title>
    <style>
        .formText {
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
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1>Field Trips and Fundraisers</h1>
                            <p>
                                Game Development Club is planning to have field trips and fundraisers this year and in years to come.
                            </p>
                            <h2>IndieCade Festival 2015</h2>
                            <img src="/images/content/trips/indiecade.png" class="img-responsive" onclick="window.open('http://www.indiecade.com/2015');" style="cursor: pointer;"/>
                            <h3>About</h3>
                            <p>
                                The IndieCade Festival is the biggest event dedicated to celebrating independent games in the nation. This premiere event is held each October in the Los Angeles area and is open to the industry and to the public.
                            </p>
                            <h3>When is the Event</h3>
                            <p>
                                The festival is from Thursday, October 22<sup>nd</sup> to Sunday, October 25<sup>th</sup>.<br />
                                The club will be attending the event on Saturday, October 24<sup>th</sup>.<br />
                                The club will meet at Santa Susana at 8:00am and take a bus to the event.<br />
                                The bus will leave with the club at 6pm, it should be back by 7pm at the latest.
                            </p>
                            <h3>Price</h3>
                            <p>
                                Club members who signed up are getting their tickets for $20.
                            </p>
                        </div>
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
