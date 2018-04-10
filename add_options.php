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
* insert options
*
*/
$error = array();

if( isset( $_POST['options_info']) ){
	$label = $_POST['optionsLabel'];
	$value = $_POST['optionsValue'];

	echo $label." ".$value;

	if( empty($label)){
		$error['label'] = "Label Field must not blank";
	}

	if( empty($value)){
		$error['value'] = "Label Field must not blank";
	}

	$error_num = count( $error );

	$insert_value = "INSERT INTO options (title, value) VALUES('$label', '$value')";

	if( $error_num === 0){
		$insert_value_q = $con->query($insert_value);

		if( $insert_value_q ){
			$success = "Value added successfully";
		}else{
			$fail = "Sorry, Try again";
		}
	}

}




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
				<td><label for="optionsLabel">Title</label></td>
				<td><input type="text" name="optionsLabel" id="optionsLabel"></td>
				<td><?php if( isset($error['label']) ){ echo $error['label']; } ?></td>
			</tr>		

			<tr>
				<td><label for="optionsValue">Value</label></td>
				<td><input type="number" name="optionsValue" id="optionsValue"></td>
				<td><?php if( isset($error['value']) ){ echo $error['value']; } ?></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Submit" name="options_info"></td>
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