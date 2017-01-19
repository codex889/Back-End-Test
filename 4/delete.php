<?php
$db_host = "localhost"; 
$db_username = "root"; 
$db_pass = "";  
$db_name = "backendtest";

$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
$sql = "DELETE FROM `personnel` WHERE `personnel_id`='$_GET[id]'";

$conn->query($sql);
$conn->close();
?>
<script>
	$(document).ready(function(){
		$('#strShow').load('read.php');
	});
</script>