<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
        // If there are no errors, send the data

        if(!$errName && !$errEmail && !$errHuman) {
            $servername = "localhost";
            $username = "jose_tcg";
            $password = "SunCraft123";
            $dbname = "sshsgamedev";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO IndieCade (name, email) VALUES ('$name', '$email')";

            if (mysqli_query($conn, $sql)) {
		        $result='<div class="alert alert-success">Thank You!</div>';
            } else {
                $result='<div class="alert alert-danger">Sorry there was an error sending your sign up. Please try again later.</div>';
            }

            mysqli_close($conn);
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your sign up. Please try again later.</div>';
        }

	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Field Trips and Fundraisers | Santa Susana Game Development Club</title>
    <link href="css/main.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .formText {
            padding-left: 0;
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
                    <div class="col-sm-9 col-xs-12">
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
                            The festival is from Thursday, October 22<sup>nd</sup> to Sunday, October 25<sup>th</sup>. The club plans on going on Saturday, October 24<sup>th</sup>.
                        </p>
                        <p>
                            More details will be available soon.
                        </p>
                        <h3>Sign Up</h3>
                        <p>Interested in going to IndieCade? Please sign up here! You are not obligated to go if you sign up</p>
                        <form role="form" method="post" action="/trips.php">
                            <div class="form-group col-sm-6 col-xs-12 formText">
                                <label for="name" class="control-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>" />
                                <?php echo "<p class='text-danger'>$errName</p>";?>
                            </div>
                            <div class="form-group col-sm-6 col-xs-12 formText" >
                                <label for="email" class="control-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                            <div class="form-group">
                                <div>
                                    <input id="submit" name="submit" type="submit" value="Sign Up" class="btn btn-primary">
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <?php echo $result; ?>
                                </div>
                            </div>
                        </form>
                        <h2 class="text-danger">Sign ups due September 30th</h2>
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
