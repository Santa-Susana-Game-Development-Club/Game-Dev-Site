<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include_once($path);
    ?>
    <title>Calendar | Santa Susana Game Development Club</title>
</head>
<body>
    
    <?php 
    
        include('/inc/header.php');

    ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="col-xs-12">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.google.com/calendar/embed?showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=uioi5lkseqrvd0f7ecrvnh91gc%40group.calendar.google.com&amp;color=%2328754E&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php 
    
        include('/inc/footer.php');
        include('/inc/javascript.php');

    ?>
</body>
</html>
