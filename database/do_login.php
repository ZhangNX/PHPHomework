<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="root">
	<div id="top"<?php include("menu.php");?></div>
    <?php
		$username=$_POST["username"];
		$password=$_POST["password"];
		include("members.php");
		$sqlstr="select userid from tb_user where username='$username' and password='$password'";
		$result=mysqli_query($mycon,$sqlstr);
		if (!$result) 
		{
		printf("Error: %s\n", mysqli_error($mycon));
		exit();
		}
		if(mysqli_num_rows($result)==1)
		{
			echo "登陆成功";
			unset($_COOKIE);
			setcookie("user",$username);
			header("Refresh:3;url=index.php");
		}else
		{
			echo "用户名或密码错误";
			header("Refresh:3;url=login.php");
		}
		mysqli_close($mycon);
	?>
</div>
</body>
</html>