<?php

$key=$_GET['key'];
$key=strtolower($key);
$text=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');

$num=0;
if($key!=""){
	while($num<50){
		if($text[$num]==$key){
			$num++;
			break;
		}
		else{
			$num++;
		}
	}
}
echo $num;

?>