<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>删除</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="root">
	<div id="top"<?php include("menu.php");?></div>
    <?php
		include("members.php");
		$username=$_GET["username"];
		$sqlstr="delete from tb_user where username='".$username."'";
		mysqli_query($mycon,"set names utf8");//防止乱码！！！！！
		$result=mysqli_query($mycon,$sqlstr);
		if (!$result) 
		{
		printf("Error: %s\n", mysqli_error($mycon));
		exit();
		}else
		{
			echo "删除成功";
			header("Refresh:3;url=manage.php");
		}
		mysqli_close($mycon);
	?>
</body>
</html>