<?php
$db_host = "localhost"; 
$db_username = "root"; 
$db_pass = "";  
$db_name = "backendtest";
$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);

$name=$_GET['title']." ".$_GET['name']." ".$_GET['lastname'];
$age=$_GET['age'];
$salary=$_GET['salary'];

$sql = "INSERT INTO `personnel`(`personnel_id`, `personnel_name`, `personnel_age`, `personnel_salary`) VALUES ('','$name','$age','$salary')";

$conn->query($sql);
$conn->close();
?>