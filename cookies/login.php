<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录</title>
</head>

<body>
<?php
	if(@$_GET["flag"]==1){echo "username or password is wrong.";}
?>
<?php
	if(isset($_COOKIE["user"]))
	{
		header("location:welcome.php?user=".$_COOKIE["user"]);	
	}
?>
<form action="verify.php" method="post">
	<input type="text" name="user" > <br>
    <input type="password" name="pwd"> <br>
    免登陆
    <input type="checkbox" name="auto" value="auto">
    <input type="submit" name="sub" value="登录">
</form>
</body>
</html>