
<!--网页导航栏-->
<?php
	if(isset($_COOKIE["user"]))
	{
		echo "欢迎您，".$_COOKIE["user"];
	}
	
?>
&nbsp;&nbsp;<a href="index.php">系统首页</a>&nbsp;&nbsp;<a href="register.php">会员注册</a>&nbsp;&nbsp;<a href="login.php">会员登陆</a>&nbsp;&nbsp;<a href="modify.php">修改资料</a>&nbsp;&nbsp;<a href="upload.php">上传照片</a>&nbsp;&nbsp;<a href="manage.php">会员管理</a>&nbsp;&nbsp;<?php $time=date("Y年m月d日"); echo $time;   ?>
