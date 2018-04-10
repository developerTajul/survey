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



/**
*
* edit question view
*
*/

if( isset($_GET['id']) ){
	$idd = $_GET['id'];

	$select_query = "SELECT * FROM questions WHERE id=$idd";


	$q_result = $con->query($select_query);

	$results = $q_result->fetch_object();



}



/**
*
* update question
*/
if( isset( $_POST['update_question'] ) ){
	$title = $_POST['newQuestion'];

var_dump($title);
	$q = "UPDATE questions SET title = '$title' WHERE id = $idd";

	$con->query($q);


}









?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Question</title>
</head>
<body>

	<h1>Welcome to Dashboard</h1>
	<!-- <h4>Name: <?php // echo $user_info['name']; ?></h4> -->
	<h4>Name: <?php echo $user_info->name; ?></h4>
	<h4>Email: <?php echo $user_info->userEmail; ?></h4>
	<a href="add_question.php">Add Question</a><br />
	<a href="view_questions.php">View Question</a><br />
	<a href="logout.php">Logout</a><br />
	

	<form action="" method="post">

		<table>		
			<tr>
				<td><label for="newQuestion">Add Question</label></td>
				<td><input type="text" name="newQuestion" value="<?php echo $results->title; ?>" id="newQuestion"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update" name="update_question"></td>
			</tr>
		</table>			
	</form>


	
</body>
</html>