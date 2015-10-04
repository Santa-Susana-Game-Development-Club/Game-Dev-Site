<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendar | Santa Susana Game Development Club</title>
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
