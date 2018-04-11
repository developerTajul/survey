<?php 
session_start();


require_once('inc/functions.php');

if( !user_logged_in() ){
	header("Location: login.php");
}

/**
*
* all users
*/
$user = $_SESSION['username'];

$q = "SELECT * FROM student_info WHERE userName = '$user' ";

$results = $con->query($q);

$user_info = $results->fetch_object();




/**
* show questions
*
*/

$select_all_questions = "SELECT * FROM questions";
$view_query = $con->query($select_all_questions);

$all_questions= $view_query->fetch_all(MYSQLI_ASSOC);

echo "<pre>";
	// print_r($all_questions);
echo "</pre>";
$question_num = count($all_questions);

echo $question_num;

/**
*
* show options
*
*/
$select_all_options = "SELECT * FROM options";
$options_query = $con->query($select_all_options);

$all_options= $options_query->fetch_all(MYSQLI_ASSOC);
echo "<pre>";
	// print_r($all_options);
echo "</pre>";

$x = 0;




if( isset($_POST['survey_info']) ){


	


	$one_1 = isset($_POST['one_1']) ? $_POST['one_1'] : '';
	$one_2 = $_POST['one_2'];
	$one_3 = $_POST['one_3'];
	$one_4 = $_POST['one_4'];
	$one_5 = $_POST['one_5'];
	$one_6 = $_POST['one_6'];
	$one_7 = $_POST['one_7'];
	

	// $one = $_POST['one'];
	// $two = $_POST['two'];
	// $three = $_POST['three'];
	// $four = $_POST['four'];
	// $five = $_POST['five'];
	// $six = $_POST['six'];
	// $seven = $_POST['seven'];

	// $total= ($one+ $two + $three + $four + $five + $six + $seven);
	$total= ($one_1+ $one_2 + $one_3 + $one_4 + $one_5 + $one_6 + $one_7);

	echo "<h1>".$total."</h1>";

	
	if( $total <= 29){
		echo "00 – 29 	Get help immediately.  $total";
		
	}elseif( $total == 30 OR $total <= 39 ){
		echo "30 – 39 	Get help immediately.  $total";
	}elseif( $total == 40 OR $total <= 45 ){
		echo "40 – 45 	You have a number of strengths and are doing many things right.".$total;
	}elseif( $total == 46 OR $total <= 56 ){
		echo "46 – 56 	Congratulations – you are on track. ".$total;
	}

}


/**
foreach ($all_questions as  $value) {
	echo $x++." ".$value['title']."<br />";
	foreach ($all_options as $key => $value) {
		echo $value['title']."<br />";
	}
}

**/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Question</title>
</head>
<body>

	<h2>Are you ready Mr. <?php echo $user_info->name; ?> for the exam?</h2>
	<h4>Your Email address is <?php echo $user_info->userEmail; ?></h4>
	<a href="admin.php">Admin Panel</a>
	<a href="login.php">Login</a>
	<a href="logout.php">Logout</a>
	

	<form action="" method="post">
		<table>
			<!-- 
				main foreach loop
				for showing Questions
			 -->
			<?php
			$a = 0;
			 foreach ($all_questions as  $value) { 
			 	$a++;
			 	?>

			<tr>
				<td><label for="sUsername"><?php echo $x++." ) ".$value['title']; ?></label></td>

				<!-- nested loop for options -->
				<?php foreach ($all_options as $value) { ?>

				<td><input type="radio" name="one_<?php echo $a; ?>" value="<?php echo $value['value']; ?>"><?php echo $value['title']; ?></td>

				<?php } ?> <!-- nested loop ends here -->
			</tr>	

			<?php } ?> <!-- main foreach loop ends -->
			

			<tr>
				<td></td>
				<td><input type="submit" value="Submit" name="survey_info"></td>
			</tr>
		</table>			
	</form>




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