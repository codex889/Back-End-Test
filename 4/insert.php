<?php
$db_host = "localhost"; 
$db_username = "root"; 
$db_pass = "";  
$db_name = "backendtest";
$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);

if($_GET['title']==1){
	$title="Mr.";
}
else if($_GET['title']==2){
	$title="Mrs.";
} 
else if($_GET['title']==3){
	$title="Miss";
} 

$name=$title." ".$_GET['name']." ".$_GET['lastname'];
$age=$_GET['age'];
$salary=$_GET['salary'];

$sql = "INSERT INTO `personnel`(`personnel_id`, `personnel_name`, `personnel_age`, `personnel_salary`) VALUES ('','$name','$age','$salary')";

$conn->query($sql);
$conn->close();
?>