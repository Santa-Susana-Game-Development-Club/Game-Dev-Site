<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
        $phone  = $_POST['phone'];
        $skype = $_POST['skype'];
		$human = intval($_POST['human']);

        $phoneEmpty = false;
        $skypeEmpty = false;

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

        if(!$_POST['phone']) {
            $phoneEmpty = true;
        }

        if(!$_POST['skype']) {
            $skypeEmpty = true;
        }

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
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

    $sql = "";

    if(!$phoneEmpty && !$skypeEmpty) {
        $sql = "INSERT INTO members (name, email, phone, skype)
                VALUES ('$name', '$email', '$phone', '$skype')";
    } elseif(!$phoneEmpty && $skypeEmpty) {
        $sql = "INSERT INTO members (name, email, phone)
        VALUES ('$name', '$email', '$phone')";
    } elseif($phoneEmpty && !$skypeEmpty) {
        $sql = "INSERT INTO members (name, email, skype)
        VALUES ('$name', '$email', '$skype')";
    } else {
        $sql = "INSERT INTO members (name, email)
                VALUES ('$name', '$email')";
    }

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
    <title>Sign Up | Santa Susana Game Development Club</title>
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
    
        include('header.php');

    ?>

    <section>
        <div class="container">
            <div class="row">
                
                <div class="col-sm-12">
                    <h2>Sign Up</h2>
                    <form role="form" method="post" action="/signup.php">
                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName</p>";?>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label">Phone Number - Optional</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="xxx-xxx-xxxx" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
                            <?php echo "<p class='text-danger'>$errPhone</p>";?>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <?php echo "<p class='text-danger'>$errEmail</p>";?>
                        </div>
                        <div class="form-group">
                            <label for="skype" class="control-label">Skype - Optional</label>
                            <input type="text" class="form-control" id="skype" name="skype" placeholder="Skype User" value="<?php echo htmlspecialchars($_POST['skype']); ?>">
                            <?php echo "<p class='text-danger'>$errSkype</p>";?>
                        </div>
                        <div class="form-group">
                            <label for="human" class="control-label">2 + 3 = ?</label>
                            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                            <?php echo "<p class='text-danger'>$errHuman</p>";?>
                        </div>
                        <div class="form-group">
                            <div>
                                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <?php echo $result; ?>
                            </div>
                        </div>
                    </form>
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
