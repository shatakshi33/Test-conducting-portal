<?php include 'database.php';?>
<?php session_start(); ?>
<?php 
//get total no of questions
$q="select * from questions";	
//get results
$results=mysqli_query($con,$q);
$total=mysqli_num_rows( $results);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>TCP</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
	<header>
		<div  class="container">
			<h1>Test Conducting Portal</h1>
		</div>
	</header>
	
	<main>
	    <div  class="container">
			<h2>Check your PHP Knowledge</h2>
			<p>This is a multiple choice test to check your knowledge</p>
			<ul>
				<li><strong>Number of Questions:</strong><?php echo $total; ?></li>
				<li><strong>Type:</strong>Multiple Choice</li>
				<li><strong>Estimated Time:</strong><?php echo $total * .5; ?> Minutes</li>
			</ul>
			<a href="question.php?n=1" class="start">Start Quiz</a>
		</div>
	</main>
	
	<footer>
		<div  class="container">
			copyright &rdua; 2017, Test Conducting Portal
		</div>
	</footer>
</body>
</html>