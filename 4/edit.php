<?php
$db_host = "localhost"; 
$db_username = "root"; 
$db_pass = "";  
$db_name = "backendtest"; 

$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
$sql = "SELECT * FROM `personnel` WHERE `personnel_id`='$_GET[id]'";
$result=$conn->query($sql);

list($personnel_id,$personnel_name,$personnel_age,$personnel_salary)=mysqli_fetch_row($result);

$name=explode(' ',$personnel_name);
$select1="";$select2="";$select3="";
if($name[0]=="Mr."){
	$select1="selected";
}
else if($name[0]=="Mrs."){
	$select2="selected";
}
else if($name[0]=="Miss"){
	$select3="selected";
}
?>
<html>
<head>
	<title>แก้ไขข้อมูล</title>
	<script src="../jquery-1.7.1.min.js" type="text/javascript"></script>
</head>
<body>
	<table>
	<input type="hidden" id="id" value="<?=$_GET['id']?>">
		<tr>
			<td>Title</td>
			<td>
			<select id="title">
				<option value="1" <?=$select1?>>Mr.</option>
				<option value="2" <?=$select2?>>Mrs.</option>
				<option value="3" <?=$select3?>>Miss</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Name</td><td><input type="text" id="name" value="<?=$name[1]?>"></td>
		</tr>
		<tr>
			<td>Lastname</td><td><input type="text" id="last" value="<?=$name[2]?>"></td>
		</tr>
		<tr>
			<td>Age</td><td><input type="number" id="age" min="1" value="<?=$personnel_age?>"></td>
		</tr>
		<tr>
			<td>Salary</td><td><input type="number" id="salary" min="1" value="<?=$personnel_salary?>"></td>
		</tr>
	</table>
	<input type="button" id="mySend" value="แก้ไข">
	<script>
	$(document).ready(function(){
		$('#mySend').click(function(){
			myEdit();
		});
	});
	function myEdit(){
		var inputId = $('#id').val();
		var inputTitle = $('#title').val();
		var inputName = $('#name').val();
		var inputLast = $('#last').val();
		var inputAge = $('#age').val();
		var inputSalary = $('#salary').val();
		$.get('update.php', {id:inputId,title:inputTitle,name:inputName,lastname:inputLast,age:inputAge,salary:inputSalary},
			function(data){
				$('#strShow').load('read.php');
		});
	}
	</script>
</body>
</html>