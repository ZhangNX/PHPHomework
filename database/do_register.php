<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="root">
	<div id="top"<?php include("menu.php");?></div>
    <?php
		$arr=array();
		$arr["userid"]=rand(0,9).date("his").rand(0,9).rand(0,9);
		$arr["username"]=$_POST["username"];
		$arr["password"]=$_POST["password"];
		$arr["password2"]=$_POST["password2"];
		if($_POST["gender"]=="men")
		//$fileloc=iconv("UTF-8","gb2312","upfile/".$_FILES["file_name"]["name"])
		{$arr["gender"]="男";}
		else{$arr["gender"]="女";}
		//$arr["gender"]=$_POST["gender"];
		$arr["birthdate"]=$_POST["birthdate"];
		$arr["question"]=$_POST["question"];
		$arr["answer"]=$_POST["answer"];
		$arr["email"]=$_POST["email"];
		$arr["introduce"]=$_POST["introduce"];
		$arr["regtime"]=date("Y-m-d h:i:s");
		//foreach($arr as $k=>$v)
		//{
		//	echo $k."：".$v;	
		//	echo "<br>";
		//}
		//echo $arr["userid"];
		include("members.php");
		$sqlstr="insert into tb_user(userid,username,gender,birthdate,password,question,answer,email,introduce,regtime) values('".$arr["userid"]."','".$arr["username"]."','".$arr["gender"]."','".$arr["birthdate"]."','".$arr["password"]."','".$arr["question"]."','".$arr["answer"]."','".$arr["email"]."','".$arr["introduce"]."','".$arr["regtime"]."')";
		mysqli_query($mycon,"set names utf8");//防止乱码！！！！！
		$result=mysqli_query($mycon,$sqlstr);
		if($result)
		{
			echo "success";
			header("Refresh:3;url=login.php");
		}
		else
		{
			echo "错误";	
			printf("Error: %s\n", mysqli_error($mycon));
			printf("<br>");
			printf($sqlstr);
 			exit();
			header("Refresh:3;url=register.php");
		}
		mysqli_close($mycon);
	?>
</div>

</body>
</html>