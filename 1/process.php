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
$row=($row*2)-1;
$count=0;
$len=$row;

while($row>0){
	echo substr($text,$count,$len)."<br>";
	$count=$count+$len;
	$len=$len-2;
	$row--;
}

?>