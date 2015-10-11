<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include_once($path);
    ?>
    <title>Santa Susana Game Development Club</title>
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
                    <div class="col-xs-12">
                        <h1>404 - Not Found</h1>
                        <p>We're sorry, but the page: <span id="href"></span> could not be found. Please try again later or try a different page</p>
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
    <script>
        $(document).ready(function() {
            document.getElementById("href").innerHTML = $(location).attr('hostname') + $(location).attr('pathname');
        });
    </script>
</body>
</html>
