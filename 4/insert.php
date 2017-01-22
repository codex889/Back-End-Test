<?php
include "../db.php";

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