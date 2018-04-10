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
* add question
*
*/

$error = array();

if( isset($_POST['add_question_info']) ){
	$question = $_POST['newQuestion'];

	if( empty($question) ){
		$error['no_question'] = "Question Field must not be blank";
	}

	$error_num = count($error);


	$add_ques = "INSERT INTO questions(title) VALUES('$question')";

	if($error_num === 0){
		$question_add = $con->query($add_ques);

		if( $question_add ){
			$success = "You are successful";
		}
	}



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
	<h2>Add Question Section</h2>
	<!-- <h4>Name: <?php // echo $user_info['name']; ?></h4> -->
	<h4>Name: <?php echo $user_info->name; ?></h4>
	<h4>Email: <?php echo $user_info->userEmail; ?></h4>
	<a href="view_questions.php">View Question</a><br />
	<a href="add_options.php">Add Options</a><br />
	<a href="view_options.php">View Options</a><br />

	<a href="logout.php">Logout</a><br />
	

	<form action="" method="post">
		<table>		
			<tr>
				<td><label for="newQuestion">Add Question</label></td>
				<td><input type="text" name="newQuestion" id="newQuestion"></td>
				<td><?php if( isset($error['no_question']) ){ echo $error['no_question']; } ?></td>
				
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Submit" name="add_question_info"></td>
			</tr>
		</table>			
	</form>

	<?php 

		if( isset($success) ){
			echo $success;
		}

	?>
	
</body>
</html>