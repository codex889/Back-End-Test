<?php

$text="0000000000000000000000000000000";
$len=strlen($text);

$row=0;
$num=2;
while($len>0){
	if($row==0){
		$len=$len-1;
	}
	else{
		$len=$len-($num+1)*2;
		$num=$num+2;
	}
	$row++;
}
echo $row=($row*2)-1;

?>