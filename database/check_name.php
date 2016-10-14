<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

<?php
	include("members.php");
	$username=$_GET["username"];
	if($username=="")
	{
		echo "用户名不能为空";
		exit();	
	}
	$sqlstr="select * from tb_user where username='".$username."'";
	$result=mysqli_query($mycon,$sqlstr);
	if (!$result) 
	{
 	printf("Error: %s\n", mysqli_error($mycon));
 	exit();
	}
	if(mysqli_num_rows($result)==0)
	{
		echo "<font color='blue'>用户名".$username."可用。</font>";
	}else
	{
		echo "<font color='red'>用户名".$username."不可用。</font>"	;
	}
	mysqli_close($mycon);
?>
</body>
</html>