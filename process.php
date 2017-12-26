<?php include 'database.php';?>
<?php session_start(); ?>

<?php
session_start();
//get total ques
$q="select * from questions";
//get results
$results=mysqli_query($con,$q);
$total=$results->num_rows;
$tot=$total*0.5;

$duration="";
$query="INSERT INTO timer (duration) values('$tot')";
$status=mysqli_query($con,$query);

while($row=mysqli_fetch_array($status))
{
	$duration=$row["duration"];
}
$_SESSION["duration"]=$duration;
$_SESSION["start_time"]=date("Y-m-d H:i:s");

$end_time=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes',strtotime($_SESSION["start_time"])));

$_SESSION["end_time"]=$end_time;
?>
<script type="text/javascript">
window.location="question.php";
</script>


<?php //check correct ans
if(!isset($_SESSION['s'])){
	$_SESSION['s']=0;
}
if($_POST)
{
	
	
		$number=$_POST['number'];
		$selected_choice=$_POST['choice'];
		echo $number ;
		echo $selected_choice;
		$next=$number+1;
		
		//get total no of questions
		$q="select * from questions";
		
		//get results
		$results=mysqli_query($con,$q);
		$total=$results->num_rows;
		
		//extract correct choice from database
		$q="select * from choices where question_number=$number AND is_correct=1";
		//get result
		$result=mysqli_query($con,$q);
	      
		  //get row
		  $row=$result->fetch_assoc();
		  
		  //set correct choice
		  $correct_choice=$row['id'];
		  
		  //comparision
		  if($correct_choice == $selected_choice){
			  //Answer is correct
			  $_SESSION['s']++;
		  }
		
		  //check if last question
		  if($number==$total){
			  header("location: final.php");
			  exit();
		  }
		  else{
			  header("location: question.php?n=".$next);
		  }
}
?>