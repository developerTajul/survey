<?php 
session_start();


require_once('inc/functions.php');

if( user_logged_in() ){
	header("Location: admin.php");
}


if( isset($_POST['login_info']) ){

	$uname 			= $_POST['sUsername'];
	$pass 			= md5($_POST['sPass']);

	$q = "SELECT * FROM student_info WHERE userName='$uname' AND userPass = '$pass' ";

	$results = $con->query($q);

	$login_info = $results->fetch_assoc();

	$username_from_db =  $login_info['userName'];
	$password_from_db = $login_info['userPass'];



	if( ($uname === $username_from_db)  AND ($pass = $password_from_db) ){
		$_SESSION['username'] = $uname;
		

		header("Location: admin.php");
	}else{
		echo "Sorry, try again";
	}
	
	

	
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Info</title>
</head>
<body>
	
	<form action="" method="post">
		<table>
			<tr>
				<td><label for="sUsername">Username</label></td>
				<td><input type="text" name="sUsername" id="sUsername"></td>
			</tr>			

			<tr>
				<td><label for="sPass">Password</label></td>
				<td><input type="password" name="sPass" id="sPass"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Submit" name="login_info"></td>
			</tr>
		</table>			
	</form>
	<a href="register.php">Register</a>


</body>
</html>