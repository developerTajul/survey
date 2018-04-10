<?php 
session_start();


require_once('inc/functions.php');

if( !user_logged_in() ){
	header("Location: login.php");
}


$user = $_SESSION['username'];

$q = "SELECT * FROM student_info WHERE userName = '$user' ";

$results = $con->query($q);

$user_info = $results->fetch_object();





?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Options</title>
</head>
<body>

	<h1>Welcome to Dashboard</h1>
	<h2>Add Options</h2>
	<!-- <h4>Name: <?php // echo $user_info['name']; ?></h4> -->
	<h4>Name: <?php echo $user_info->name; ?></h4>
	<h4>Email: <?php echo $user_info->userEmail; ?></h4>
	<a href="view_options.php">View Options</a><br />
	<a href="add_question.php">Add Questions</a><br />

	<a href="logout.php">Logout</a><br />




	<form action="" method="post">
		<table>

			<tr>
				<td><label for="optionsChoice">Add Options</label></td>
				<td><input type="text" name="optionsChoice" id="optionsChoice"></td>

			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Submit" name="survey_info"></td>
			</tr>
		</table>			
	</form>
	
</body>
</html>