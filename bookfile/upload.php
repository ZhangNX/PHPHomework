<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>上传</title>

</head>
<style>
	#root{margin:0 auto;width:800px; text-align:center;} 
</style>
<body>
<div id="root">
<?php
	@$why=@$_GET["why"];
	if($why==1){echo "<script language='javascript'>alert('文件类型错误');</script>";}
	if($why==2){echo "<script language='javascript'>alert('上传并保存成功');</script>";}
?>
<table border="black" align="center">
	<form method="post" action="doupload.php" enctype="multipart/form-data">
    	<tr><td colspan="2">上传章节</td></tr>
    	<tr><td><input type="file" name="file_name" size=16 value="选择章节"></td>
        <td><input type="submit" value="上传" name="add"></td></tr>
    </form>
 </table>
</div>

</body>
</html>