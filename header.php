<?php 
$lang="en";
if(isset($_GET["lang"])){
	$lang=$_GET["lang"];
}
include("functions.php");
 $menubar=getStr("lang/$lang/menubar.txt");
 $items= array();
 $items=toArr($menubar);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/bootstrap.css" />
	<link rel="stylesheet" href="styles/header.css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Sans" />
	<script src="styles/js/jquery.js"></script>
	<script src="styles/js/bootstrap.js"></script>
	<meta charset="UTF-8" />

