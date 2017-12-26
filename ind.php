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