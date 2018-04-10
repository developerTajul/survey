<?php 
session_start();


require_once('inc/functions.php');

if( user_logged_in() ){
	header("Location: admin.php");
}

if( isset($_POST['submitSurvey']) ){

	$name 			= $_POST['sName'];
	$uname 			= $_POST['sUsername'];
	$pass 			= $_POST['sPass'];
	$email 			= $_POST['sEmail'];
	$age 			= $_POST['sAge'];
	$gardianName 	= $_POST['sGardian'];
	$gardianEmail 	= $_POST['sEmail'];

	$enctyp 		= md5($pass);

	$q = "INSERT INTO student_info(name, userName, userPass, userEmail, userAge, userGardian, userGardianEmail  ) VALUES('$name', '$uname', '$enctyp', '$email', '$age', '$gardianName', '$gardianEmail')";

	$insertQuery = $con->query($q);

	if($insertQuery){
		echo "Info has been added to database successfully";
	}else{
		echo "OPS, there are some problems";
	}

	
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
</head>
<body>
	
	<form action="" method="post">
		<table>
			<tr>
				<td><label for="sName">Your Name</label></td>
				<td><input type="text" name="sName" id="sName"></td>
			</tr>			

			<tr>
				<td><label for="sUsername">Username</label></td>
				<td><input type="text" name="sUsername" id="sUsername"></td>
			</tr>	

			<tr>
				<td><label for="sPass">Password</label></td>
				<td><input type="password" name="sPass" id="sPass"></td>
			</tr>			

			<tr>
				<td><label for="sEmail">Your Email</label></td>
				<td><input type="Email" name="sEmail" id="sEmail"></td>
			</tr>
			<tr>
				<td><label for="sAge">Your Age</label></td>
				<td><input type="number" name="sAge" id="sAge"></td>
			</tr>
			<tr>
				<td><label for="sGardian">Gardian Name</label></td>
				<td><input type="text" name="sGardian" id="sGardian"></td>
			</tr>
			<tr>
				<td><label for="sGardianEmail">Gardian Email</label></td>
				<td><input type="Email" name="sGardianEmail" id="sGardianEmail"></td>
			</tr>



			<tr>
				<td></td>
				<td><input type="submit" value="Submit" name="submitSurvey"></td>
			</tr>
		</table>		
	</form>

	<a href="login.php">Login</a>

</body>
</html>