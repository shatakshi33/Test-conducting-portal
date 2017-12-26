<?php include 'database.php';?>

<?php session_start(); ?>

<?php 
//get total ques
$q="select * from questions";
//get results
$results=mysqli_query($con,$q);
$total=$results->num_rows;
?>
<div id="response"></div>
<script type="text/javascript">
setInterval(function()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","response.php",false);
	xmlhttp.send(null);
	document.getElementById("response").innerHTML=xmlhttp.responseText;
},1000);
</script>


<?php
//set ques no
$number="";
$number=(int)$_GET['n'];
		
//get ques
$q="select * from questions where question_number=$number";
//get result
$result=mysqli_query($con,$q);
$question=$result->fetch_assoc();


//get choices
$q="select * from choices where question_number=$number";
//get results
$choices=mysqli_query($con,$q);

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
			<div class="current"> Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
			<p class="question">
			<?php  echo $question['text']; ?>
			</p>
			
			
			<form method="post" action="process.php">
				<ul class="choices">
				<?php while($row=$choices->fetch_assoc()):?>
				<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
				<?php endwhile;?>
				
				</ul>
				<input type="submit" value="Submit" />
				<input type="hidden" name="number" value="<?php echo $number?>" />
			</form>
		</div>
	</main>
	
	<footer>
		<div  class="container">
			copyright &rdua; 2017, Test Conducting Portal
		</div>
	</footer>
</body>
</html>