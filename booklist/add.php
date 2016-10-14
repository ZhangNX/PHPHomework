<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	foreach($_POST["book"] as $key=>$value)
	{
		if(isset($_SESSION["book"][$value])){$_SESSION["book"][$value]+=1;}
		else{$_SESSION["book"][$value]=1;}	
	}
	echo "<script language=\"JavaScript\">\r\n";
	echo " alert(\"添加成功！\");\r\n";
	echo " history.back();\r\n";
	echo "</script>";
	exit;
	
	//header("location:booklist.php");
	
	
?>
</body>
</html>