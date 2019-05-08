<?php
function getStr($add){
$myfile = fopen("$add", "r") or die("Unable to open file!");
$str= fread($myfile,filesize("$add"));
fclose($myfile);
return $str;
}
function toArr($s){
	$arr=explode(",", $s);
	return $arr;
}
function toArr1($s){
	$arr=explode("|", $s);
	return $arr;
}
?>