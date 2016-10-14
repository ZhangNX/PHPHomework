<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录</title>
<style>
	#root{margin: 0 auto; text-align:center; width:600PX;}
</style>
</head>
<script language="javascript">
	function change_verify()
	{
		var http = new XMLHttpRequest();
		var d =new Date();
		http.open("get","verify.php?now="+(new Date()).valueOf(),true /*new Date().getTime()*/);
		http.send();
		//document.getElementById("iii").src=http.responseText;//"verify.php?now=" + Math.random();
		/*var image = document.getElementById("iii");  
      	image.src=http.responseText;*/
		
		//document.getElementById("iiii").innerHTML=http.responseText;
		//alert(http.responseText);
		
		http.onreadystatechange = function()
		{
			if(http.readyState==4&&http.status==200)
			{
				document.getElementById("iiii").innerHTML=" ";
				document.getElementById("iiii").innerHTML=http.responseText;
				//alert(http.responseText);
			}	
		}
		
	}	
</script>
<body>
<?php
	include("verify.php");
?>   

<div id="root">
	<form method="post" action="login_action.php">
    	<table border="black" align="center">
        	<tr><td colspan="4">登录</td></tr>
            <tr><td>用户名</td><td colspan="3"><input type="text" name="uesrname"></td></tr>
			<tr><td>密码</td><td colspan="3"><input type="password" name="uesrpwd"  ></td></tr>
            <tr><td>验证码</td><td><input type="text" name="verity"></td><td><span id="iiii" ><?php verify_code(); ?></span></td><td><span   onMouseDown="change_verify()">看不清</span></td></tr>
            <tr><td colspan="3"><input type="submit" name="logine" value="登录"> </td><td><input type="reset" value="重置"></td></tr>       
        </table>
    </form>
    
</div>

</body>
</html>