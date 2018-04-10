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

	<h1>Welcome to Dashboard</h1>
	<!-- <h4>Name: <?php // echo $user_info['name']; ?></h4> -->
	<h4>Name: <?php echo $user_info->name; ?></h4>
	<h4>Email: <?php echo $user_info->userEmail; ?> <a href="logout.php">Logout</a></h4>
	

	<form action="" method="post">
		<table>
			<tr>
				<td><label for="sUsername">1.	I have a good idea about what I want to do for a career. </label></td>
				<td><input type="radio" name="one" value="1" checked> Strongly disagree </td>
				<td><input type="radio" name="one" value="2"> Disagree somewhat</td>
				<td> <input type="radio" name="one" value="3"> Other</td>
				<td> <input type="radio" name="one" value="4"> Other</td>
				<td> <input type="radio" name="one" value="5"> Other</td>
				<td> <input type="radio" name="one" value="6"> Other</td>
				<td> <input type="radio" name="one" value="7"> Other</td>
			</tr>			

			<tr>
				<td><label for="sUsername">1.	I have a good idea about what I want to do for a career. </label></td>
				<td><input type="radio" name="two" value="1" checked> Strongly disagree </td>
				<td><input type="radio" name="two" value="2"> Disagree somewhat</td>
				<td> <input type="radio" name="two" value="3"> Other</td>
				<td> <input type="radio" name="two" value="4"> Other</td>
				<td> <input type="radio" name="two" value="5"> Other</td>
				<td> <input type="radio" name="two" value="6"> Other</td>
				<td> <input type="radio" name="two" value="7"> Other</td>
			</tr>

			<tr>
				<td><label for="sUsername">1.	I have a good idea about what I want to do for a career. </label></td>
				<td><input type="radio" name="three" value="1" checked>Strongly disagree</td>
				<td><input type="radio" name="three" value="2"> Disagree somewhat</td>
				<td> <input type="radio" name="three" value="3"> Other</td>
				<td> <input type="radio" name="three" value="4"> Other</td>
				<td> <input type="radio" name="three" value="5"> Other</td>
				<td> <input type="radio" name="three" value="6"> Other</td>
				<td> <input type="radio" name="three" value="7"> Other</td>
			</tr>			

			<tr>
				<td><label for="sUsername">1.	I have a good idea about what I want to do for a career. </label></td>
				<td><input type="radio" name="four" value="1" checked> Strongly disagree </td>
				<td><input type="radio" name="four" value="2"> Disagree somewhat</td>
				<td> <input type="radio" name="four" value="3"> Other</td>
				<td> <input type="radio" name="four" value="4"> Other</td>
				<td> <input type="radio" name="four" value="5"> Other</td>
				<td> <input type="radio" name="four" value="6"> Other</td>
				<td> <input type="radio" name="four" value="7"> Other</td>
				
			</tr>

			<tr>
				<td><label for="sUsername">1.	I have a good idea about what I want to do for a career. </label></td>
				<td><input type="radio" name="five" value="1" checked> Strongly disagree </td>
				<td><input type="radio" name="five" value="2"> Disagree somewhat</td>
				<td> <input type="radio" name="five" value="3"> Other</td>
				<td> <input type="radio" name="five" value="4"> Other</td>
				<td> <input type="radio" name="five" value="5"> Other</td>
				<td> <input type="radio" name="five" value="6"> Other</td>
				<td> <input type="radio" name="five" value="7"> Other</td>
			</tr>

			<tr>
				<td><label for="sUsername">1.	I have a good idea about what I want to do for a career. </label></td>
				<td><input type="radio" name="six" value="1" checked> Strongly disagree </td>
				<td><input type="radio" name="six" value="2"> Disagree somewhat</td>
				<td> <input type="radio" name="six" value="3"> Other</td>
				<td> <input type="radio" name="six" value="4"> Other</td>
				<td> <input type="radio" name="six" value="5"> Other</td>
				<td> <input type="radio" name="six" value="6"> Other</td>
				<td> <input type="radio" name="six" value="7"> Other</td>
				
			</tr>

			<tr>
				<td><label for="sUsername">1.	I have a good idea about what I want to do for a career. </label></td>
				<td><input type="radio" name="seven" value="1" checked> Strongly disagree </td>
				<td><input type="radio" name="seven" value="2"> Disagree somewhat</td>
				<td> <input type="radio" name="seven" value="3"> Other</td>
				<td> <input type="radio" name="seven" value="4"> Other</td>
				<td> <input type="radio" name="seven" value="5"> Other</td>
				<td> <input type="radio" name="seven" value="6"> Other</td>
				<td> <input type="radio" name="seven" value="7"> Other</td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Submit" name="survey_info"></td>
			</tr>
		</table>			
	</form>
	
</body>
</html>