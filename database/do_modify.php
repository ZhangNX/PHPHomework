<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>更新</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="root">
	<div id="top"<?php include("menu.php");?></div>
    <?php
		include("members.php");
		$arr=array();
		$arr["username"]=$_COOKIE["user"];
		if($_POST["gender"]=="men")
		{$arr["gender"]="男";}
		else{$arr["gender"]="女";}
		$arr["birthdate"]=$_POST["birthdate"];
		$arr["question"]=$_POST["question"];
		$arr["answer"]=$_POST["answer"];
		$arr["email"]=$_POST["email"];
		$arr["introduce"]=$_POST["introduce"];
		$sqlstr="update tb_user set gender='".$arr["gender"]."', birthdate='".$arr["birthdate"]."', question='".$arr["question"]."', answer='".$arr["answer"]."', email='".$arr["email"]."', introduce='".$arr["introduce"]."' where username='".$arr["username"]."'";
		mysqli_query($mycon,"set names utf8");//防止乱码！！！！！
		$result=mysqli_query($mycon,$sqlstr);
		if (!$result) 
		{
		printf("Error: %s\n", mysqli_error($mycon));
		exit();
		}else
		{
			echo "修改成功";
			header("Refresh:3;url=index.php");
		}
		mysqli_close($mycon);
	?>
</div>
</body>
</html>