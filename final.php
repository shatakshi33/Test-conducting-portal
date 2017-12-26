
<?php session_start(); ?>
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
			<h2>You're Done!!</h2>
			<p>Congrats! You have Completed the Test</p>
			<p>Final Score: <?php echo $_SESSION['s']; ?></p>
			<?php $_SESSION['s']=0 ?>
			<a href="question.php?n=1" class="start">Take Again</a>
		</div>
	</main>
	
	<footer>
		<div  class="container">
			copyright &rdua; 2017, Test Conducting Portal
		</div>
	</footer>
</body>
</html>