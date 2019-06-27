<?php
require('components/navbar.php'); //navbar include, so you dont need to copy/paste navbar code in every page of your web because navbar content is probably static
if(isset($_SESSION['username'])) {
  	header("Location: 3customers.php");
}
?>
<link rel="stylesheet" type="text/css" href="public/css/login.css">

<div class="login">

			  	<form action="register.php" method="POST" name="registration">

				<input type="text" name="firstname" id="firstname" placeholder="Enter first name">

    			<input type="text" name="lastname" id="lastname" placeholder="Enter last name">

    			<input type="text" name="email" id="email" placeholder="Enter email address">

    			<input type="text" name="username" id="username" placeholder="Enter username">

    			<input type="password" name="password" id="password" placeholder="Enter password">

    			<input type="password" name="password2" id="password2" placeholder="Confirm password">

				<input class="btn btn-primary btn-block btn-large"  type="submit" value="Register" name="submit" />
			  	</form>
</div>

			   <!--end of container -->
<?php 
// Our database object
if (isset($_POST['submit'])) {
require('application/database.php');

	//we use mysql_real_escape_string because of safety. mysql_real_escape_string quote data user entered like that 'myFirstName'
	$password = ($_POST['password']);
	$password2 = ($_POST['password2']);
	//$password = mysql_real_escape_string($_POST['password']);
	//$password2 = mysql_real_escape_string($_POST['password2']);

	if ($password == $password2) {



	$name = ($_POST['firstname']);
	$lname = ($_POST['lastname']);
	$email = ($_POST['email']);
	$username = ($_POST['username']);


	$password_enc = md5($password);


	if(!isset($name) || trim($name) == '' || !isset($lname) || trim($lname) == '' || !isset($email) || trim($email) == '' || !isset($username) || trim($username) == '' || !isset($password) || trim($password) == '') { //here we are checking if any of fields do not have value
		echo "<center><div style='width:200px;height:auto;background:red;border:1px solid black;color:white;font-size:17px;'>You have to fill all of the fields!</div></center>";
	}else {

		//$usernameCount = "SELECT * FROM admin WHERE username = '$username'";
		//$dbh->query($usernameCount)

    	$usernameCountQuery = $dbh->prepare("SELECT * FROM admin WHERE username = '$username'"); 
    	$usernameCountQuery->execute();
    	$usernameRows = $usernameCountQuery->rowCount();

    	$emailCountQuery = $dbh->prepare("SELECT * FROM admin WHERE email = '$email'");
    	$emailCountQuery->execute();
    	$emailRows = $emailCountQuery->rowCount();


		if ($usernameRows>=1) { //if is there any account with same username, User can't register
			echo "<center><div style='width:200px;height:auto;background:red;border:1px solid black;color:white;font-size:17px;'>Username is already taken!</div></center>";
		}else if ($emailRows>=1){ //if is there any account with same email, User can't register
			echo "<center><div style='width:200px;height:auto;background:red;border:1px solid black;color:white;font-size:17px;'>Email is already taken</div></center>";
		}else {

		$statement = $dbh->prepare("INSERT INTO admin(first_name, last_name, username,email,password)
		    VALUES(:fname, :lname, :username,:email,:password)");
		$statement->execute(array(
		    "fname" => $name,
		    "lname" => $lname,
		    "username" => $username,
		    "email" => $email,
		    "password" => $password_enc
		));


		//mysql_query("INSERT INTO `admin` (`first_name`, `last_name`, `username`, `email`, `password`) VALUES ('$name', '$lname', '$username', '$email', '$password_enc')");
		echo "<center><div style='width:200px;height:auto;background:green;border:1px solid black;color:white;font-size:17px;'>You have registered succesfuly</div></center>";
		echo "<center><a href='login.php'><button type='button' class='btn btn-success'>Login!</button></a></center>";
		}
	}

	}	



}

?>
