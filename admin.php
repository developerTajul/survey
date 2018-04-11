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
	<title>Dashboard</title>
</head>
<body>

	<h4>Name: <?php echo $user_info->name; ?></h4>
	<h4>Email: <?php echo $user_info->userEmail; ?></h4>
	<a href="add_question.php">Add Question</a><br />
	<a href="add_options.php">Add Options</a><br />
	<a href="index.php">View Exam</a><br />
	<a href="logout.php">Logout</a><br />
	


	
</body>
</html>