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
	<tr><td><?=$personnel_id?></td><td><?=$personnel_name?></td><td><?=$personnel_age?></td><td><?=$personnel_salary?></td><td><button onclick="edit('<?=$personnel_id?>')">edit</button></td><td><button onclick="del('<?=$personnel_id?>')">delete</button></td></tr>
<?php
}
?>
</table>
<br>
<button id="add">เพิ่มข้อมูล</button>
<?php
$conn->close();
?>
<script>
	$(document).ready(function(){
		$('#add').click(function(){
			$('#strShow').load('add.html');
		});
	});
	function edit(str){
		$('#strShow').load('edit.php?id='+str);
	}
	function del(str){
		if(confirm('ต้องการลบใช่หรือไม่?')){
			$('#strShow').load('delete.php?id='+str);
		}
	}

</script>
</body>
</html>