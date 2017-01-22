<?php
include "../db.php";

$sql = "DELETE FROM `personnel` WHERE `personnel_id`='$_GET[id]'";

$conn->query($sql);
$conn->close();
?>
<script>
	$(document).ready(function(){
		$('#strShow').load('read.php');
	});
</script>