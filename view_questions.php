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
* view question
*
*/
$select_all_questions = "SELECT * FROM questions";
$view_query = $con->query($select_all_questions);

$all_questions= $view_query->fetch_all(MYSQLI_ASSOC);


/**
*
* Delete question
*/
if( isset($_GET['delete']) ){
	$delete_id = $_GET['delete'];



	$q = "DELETE FROM questions  WHERE id = $delete_id";
	

	$con->query($q);

	header('Location: view_questions.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Question</title>
</head>
<body>

	<h1>Welcome to Dashboard</h1>
	<h2>View Questions</h2>
	<!-- <h4>Name: <?php // echo $user_info['name']; ?></h4> -->
	<h4>Name: <?php echo $user_info->name; ?></h4>
	<h4>Email: <?php echo $user_info->userEmail; ?></h4>
	<a href="add_question.php">Add Question</a><br />
	<a href="add_options.php">Add Options</a><br />
	<a href="logout.php">Logout</a><br />
	

	<form action="" method="post">
		<table border="1">		
			<tr>
				<th>Id</th>
				<th>Title</th>	
					
				<th>Update Info</th>	
			</tr>

			<?php foreach ($all_questions as $value) : ?>
			<tr>
				<td><?php echo $value['id']; ?></td>
				<td><?php echo $value['title']; ?></td>	
				<td><a href="edit-question.php?id=<?php echo $value['id']; ?>">Edit</a> <a href="?delete=<?php echo $value['id']; ?>">Delete</a></td>	
			</tr>
			<?php endforeach; ?>


		</table>			
	</form>

	<?php if( isset($success) ){
		echo $success;
	}
	?>
	
</body>
</html>