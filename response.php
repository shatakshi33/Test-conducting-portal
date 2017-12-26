

<?php include 'database.php';?>
<?php session_start(); ?>
<?php
$from_time1=date('Y-m-d H:i:s');
$to_time1=$_SESSION["end_time"];

$timefirst=strtotime($from_time1);
$timesecond=strtotime($to_time1);

$diffinsec=$timesecond-$timefirst;
echo gmdate("h:i:s",$diffinsec);
?>