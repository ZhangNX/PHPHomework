<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
</body>
<?php
	$name=$_GET["name"];
	$_SESSION["book"][$name]-=1;
	header("location:cart.php");
?>
</body>
</html>