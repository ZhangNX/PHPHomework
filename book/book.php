<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>book</title>
</head>

<body>
<?php
	for($i=0;$i<30;$i++)
	{
		if(@$_COOKIE[($i+1)]=="yes")
		{echo "第".($i+1)."章<br>";}
		else{echo "<a href='book2.php?page=".($i+1)."'>第".($i+1)."章 </a><br>";}
	}
?>
</body>
</html>