<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员登陆</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="root">
	<div id="top"<?php include("menu.php");?></div>
    
        <form id="mid" action="do_login.php" method="post">
            <span id="word">用户名:</span><input type="text" name="username"> <a href="register.php">注册新会员</a><br>
            <span id="word">密码：</span><input type="password" name="password"> <a href="">忘记密码</a><br>
            <div id="zhong"><input type="submit" name="sub" value="登录"><input type="reset"  value="重置"></div>
            
        </form>
</div>
</body>
</html>