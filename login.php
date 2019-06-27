<?php
require('components/navbar.php'); //for session
?>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="public/css/login.css">

		<a href="1index.php">Return to Homepage</a>
		<div class="login">
				<form action="login.php" method="POST" name="login">
			  	
			  	<input type="text" name="username" id="username" placeholder="Enter username/email address">
				
    			<input type="password" name="password" id="password" placeholder="Enter password">
    			<br>
				<input type="submit" class="btn btn-primary btn-block btn-large" value="Login" name="submit" /><br>
				</input>
			  	</form>

		</div>
<script>
	alert("You are trying to access a staff ONLY page, please either login or go back if you are not staff, Thank you!");
</script>
<?php 

	if (isset($_POST['submit'])) { 
		require('application/database.php');
		$username_email = $_POST['username'];
		$password = $_POST['password'];
		$encrypted_post_password = md5($password);
		

		$usernameCountQuery = $dbh->prepare("SELECT * FROM admin WHERE username='$username_email' or email='$username_email'"); 
    	$usernameCountQuery->execute();
    	$usernameRows = $usernameCountQuery->rowCount();

		if ($usernameRows==1){
			$userdata = $usernameCountQuery->fetch(PDO::FETCH_OBJ);
			$dbUsername = $userdata->username;
			$dbPassword = $userdata->password;

			if ($encrypted_post_password==$dbPassword) {
			  	$_SESSION['username'] = $dbUsername;
			}else {
				echo "<br><br><br><br><br><br><br><br><br><br><br><br><center><div style='width:300px;height:auto;background:black;border:1px solid black;color:white;font-size:17px;'>Wrong password, Please try again.</div></center>";
			}
		}else {
			echo "<br><br><br><br><br><br><br><br><br><br><br><br><center><div style='width:350px;height:auto;background:black;border:1px solid black;color:white;font-size:17px;'>This account does not exist, Please try again.</div></center>";
		}
	}

			  	if(isset($_SESSION['username'])) {
  					header("Location: 3customers.php");
				}

?>
