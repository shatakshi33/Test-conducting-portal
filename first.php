<?php include 'database.php';?>
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
window.location="ind.php";
</script>