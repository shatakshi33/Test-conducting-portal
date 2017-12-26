<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'loginDB');
$q="select * from user where username='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
if($num==1)
{
	$_SESSION['username']=$username;
	header('location:http://localhost/TCP/admin.php');
}
else
{
	header('location:http://localhost/TCP/login.php');
}

?>