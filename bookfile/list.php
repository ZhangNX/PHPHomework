<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_GET["page"];?></title>
<style>
	#root{margin:0 auto;width:800px; text-align:center;} 
</style>
</head>

<body>
<div id="root">
	<?php
		$page=$_GET["page"];
		if($page=="%EF%BB%BF将嫁-1"){$page="将嫁-1";}
		$page=iconv("UTF-8","gb2312",$page);
		$pageee=explode("-",$page);
		$pagepre=(integer)($pageee[1]-1);
		if($pagepre==0){echo "<p><a href='bookfile.php'>上一章</a>";}
		else{echo "<p><a href='list.php?page=将嫁-".$pagepre."'>上一章</a>";}
		echo "<h2><a href='bookfile.php'>返回目录</a></h2>";
		$pagenex=(integer)($pageee[1]+1);
		if($pagenex==19){echo "<p><a href='bookfile.php'>下一章</a></p>";}
		else{echo "<a href='list.php?page=将嫁-".$pagenex."'>下一章</a></p>";}
		echo readfile("upfile/".$page.".txt");
	?>
</div>
</body>
</html>