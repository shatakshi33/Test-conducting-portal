<?php
session_start();
session_destroy();
header('location:http://localhost/BRM/login.php');
?>