<?php
//require('components/navbar.php'); //for session
//if(!isset($_SESSION['username'])) { //only access this page if session exists, if not redirect to login
//header("Location: login.php");
//}


$servername = "localhost";
$username = "1415481";
$password = "chelsea123";
$dbname = "db1415481";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO person (Name, Surname, Gender, Ethnicity, DOB, Address, Postcode, Telephone_number, Email, Disability, Crime, Grading_history, Paid, Competitor_level, Injury)
VALUES ('$_POST[fname]','$_POST[lname]','$_POST[sex]','$_POST[ethnicity]','$_POST[DOB]','$_POST[address]','$_POST[postcode]','$_POST[number]','$_POST[email]','$_POST[disability]','$_POST[crime]','$_POST[grading]','N/A','$_POST[competitor]','$_POST[injury]')";

$message = "Thank you for registering, a member of our team will contact you shortly.";
$errormessage = "You have not fully filled out the registration form, Please go back and fill out again";
$name = $_POST['fname'];

if (mysqli_query($conn, $sql)) {
    $to = $_POST['email'];
    $subject = "Hi $name, Thanks for registering";
    $msg = "You have successfully registered for Elite Karate Association $name, a member of our team will contact you shortly!";
    mail($to,$subject,$msg);
} else {
    echo "<script type='text/javascript'>alert('$errormessage');</script>";
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta http-equiv="refresh" content="5;url=http://mi-linux.wlv.ac.uk/~1415481/elite/1index.php" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registered</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/business-casual.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public/css/indexform.css">
    <link rel="stylesheet" type="text/css" href="public/css/custom.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
	<body>

    <div class="brand">Elite Karate Association</div>
    <div class="address-bar">Self Defence | Peace of Mind | A Safer Future</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Elite Karate Association</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <h1 class="intro-text text-center"><strong>Thank you for registering, you will be redirected to the home page.</strong></h1>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    </body>
</html>

