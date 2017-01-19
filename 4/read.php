<html>
<head>
	<title>แสดงข้อมูล</title>
	<script src="../jquery-1.7.1.min.js" type="text/javascript"></script>
</head>
<body>
<?php
$db_host = "localhost"; 
$db_username = "root"; 
$db_pass = "";  
$db_name = "backendtest"; 

$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
$sql = "SELECT * FROM `personnel`";
$result=$conn->query($sql);
?>
<table border="1">
	<tr><th>Id</th><th>Name</th><th>Age</th><th>Salary</th><td>Edit</td><td>Delete</td></tr>
<?php
while(list($personnel_id,$personnel_name,$personnel_age,$personnel_salary)=mysqli_fetch_row($result)){
?>
	<tr><td><?=$personnel_id?></td><td><?=$personnel_name?></td><td><?=$personnel_age?></td><td><?=$personnel_salary?></td><td><a href="#">edit</a></td><td><a href="#">delete</a></td></tr>
<?php
}
?>
</table>
<?php
$conn->close();
?>
</body>
</html>