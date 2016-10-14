<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
  		$current=$_GET["current"];
		$ans=$_GET["ans"];
		$_SESSION["test"]["no".$current]=$ans;
	
  //$current=$_SESSION["test"]["current"];
//  header("location:test.php?current=$current");

 
?>
</body>
</html>