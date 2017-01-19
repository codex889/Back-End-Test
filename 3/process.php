<?php
$salary = 40000;
$db_host = "localhost"; 
$db_username = "root"; 
$db_pass = "";  
$db_name = "backendtest";
$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
$sql = "SELECT * FROM `personnel` WHERE `personnel_salary`>='$salary'";
$result=$conn->query($sql);
$num = mysqli_num_rows($result);
?>
<table border="1">
	<tr><th>Id</th><th>Title</th><th>Firstname</th><th>Lastname</th><th>Sex</th><th>Age</th><th>Salary</th></tr>
<?php
while(list($personnel_id,$personnel_name,$personnel_age,$personnel_salary)=mysqli_fetch_row($result)){
	$name=explode(' ',$personnel_name);
	$sex=strtolower($name[0]);
	if($sex=="mr."){
		$sex="Male";
	}
	else if($sex=="mrs."){
		$sex="Female";
	}
	else if($sex=="miss"){
		$sex="Female";
	}
?>
	<tr><td><?=$personnel_id?></td><td><?=$name[0]?></td><td><?=$name[1]?></td><td><?=$name[2]?></td><td><?=$sex?></td><td><?=$personnel_age?></td><td><?=$personnel_salary?></td></tr>
<?php
}
?>
</table>
<?php
$conn->close();
?>