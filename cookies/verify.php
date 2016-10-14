<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
	if(isset($_POST["user"]))
	{
		$user=$_POST["user"];$pwd=$_POST["pwd"];
		if($user=="zhang"&&$pwd=="123456")
		{
			if(isset($_POST["auto"]))
			{
				setcookie("user","zhang",time()+60);
				setcookie("pwd","123456".time()+60);	
			}
			header("location:welcome.php?user=$user");
		}
		else
		{header("location:login.php?flag=1");}
	}
?>
<body>
</body>
</html>