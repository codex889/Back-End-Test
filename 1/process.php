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
$center=ceil($row/2);
while($row>0){
	if($center<$row){
		echo substr($text,$count,$len)."<br>";
		$count=$count+$len;
		$len=$len-2;
	}
	else if($center==$row){
		echo substr($text,$count,$len)."<br>";
		$count=$count+1;
		$len=$len+2;
	}
	else if($center>$row){
		echo substr($text,$count,$len)."<br>";
		$count=$count+$len;
		$len=$len+2;
	}
	$row--;
}

?>