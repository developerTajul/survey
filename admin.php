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




if( isset($_POST['survey_info']) ){
	$one = $_POST['one'];
	$two = $_POST['two'];
	$three = $_POST['three'];
	$four = $_POST['four'];
	$five = $_POST['five'];
	$six = $_POST['six'];
	$seven = $_POST['seven'];

	$total= ($one+ $two + $three + $four + $five + $six + $seven);

	echo "<h1>".$total."</h1>";

	
	if( $total <= 29){
		echo "00 – 29 	Get help immediately.  $total";
		mail("");
	}elseif( $total == 30 OR $total <= 39 ){
		echo "30 – 39 	Get help immediately.  $total";
	}elseif( $total == 40 OR $total <= 45 ){
		echo "40 – 45 	You have a number of strengths and are doing many things right.".$total;
	}elseif( $total == 46 OR $total <= 56 ){
		echo "46 – 56 	Congratulations – you are on track. ".$total;
	}

}

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