<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>内容</title>
</head>

<body>
<?php
	setcookie($_GET["page"],"yes",time()+60);
?>
<h1>这是第<?php echo $_GET["page"]; ?>章</h1><br>

	<a href="book.php">return</a><br>
</body>
</html>