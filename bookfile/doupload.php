<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	if(isset($_POST["add"]))
	{
		$tmp=explode(".",$_FILES["file_name"]["name"]);
		if($tmp[1]!="txt")
		{
			header("location:upload.php?why=1")	;
			exit();
		}
		if($_FILES["file_name"]["error"]==0)
		{
			$fileloc=iconv("UTF-8","gb2312","upfile/".$_FILES["file_name"]["name"]);
			move_uploaded_file($_FILES["file_name"]["tmp_name"],$fileloc);
			$fp=fopen("filelist.txt","a+");
			fwrite($fp,"\r\n".$tmp[0]);
			header("location:upload.php?why=2")	;
		}
	}
?>

</body>
</html>