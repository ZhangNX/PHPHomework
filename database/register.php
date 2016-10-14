<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员注册</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<script language="javascript">
	function check_name()
	{	//alert("haha" );
		var http = new XMLHttpRequest();
		var name = document.getElementById("username").value;
		http.open("get","check_name.php?username="+name,true);
		http.send();
		//alert("hah ");
		http.onreadystatechange = function()
		{
			//alert("haha" );
			if(http.readyState==4&&http.status==200)
			{
				document.getElementById("ccc").innerHTML="";
				document.getElementById("ccc").innerHTML=http.responseText;
			}	
		}
		
	}	
</script>
<body>
<div id="root">
	<div id="top"<?php include("menu.php");?></div>
    
        <form id="mid" action="do_register.php" method="post">
            <span id="word">用户名:</span><input type="text" name="username"  id="username" onBlur="check_name()"><font color="red">*</font><div id="ccc"></div><br>
            <span id="word">密码：</span><input type="password" name="password"><font color="red">*</font><br>
            <span id="word">确认密码:</span><input type="password" name="password2"><font color="red">*</font><br>
            <span id="word">性别:</span><input type="radio" name="gender" value="men">男<input type="radio" name="gender" value="women">女<font color="red">*</font><br>
            <span id="word">出生日期:</span><input type="date" name="birthdate" value="xxxx-xx-xx"><font color="red">*</font><br>
            <span id="word">安全问题:</span><input type="text" name="question" ><font color="red">*</font><br>
            <span id="word">答案:</span><input type="text" name="answer" ><font color="red">*</font><br>
            <span id="word">电子邮件:</span><input type="text" name="email" ><font color="red">*</font><br>
            <span id="word">自我介绍:</span><input type="text" name="introduce" ><br>
            <div id="zhong"><input type="submit" name="sub" value="注册"><input type="reset"  value="重置"></div>
            
        </form>
</div>
</body>
</html>