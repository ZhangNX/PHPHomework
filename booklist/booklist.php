<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>booklist</title>
<style>
#root{margin:0 auto;width:450px; text-align:center;}
body{margin:0;padding:0;text-align:center;}
</style>
</head>

<body>

<div id="root">
	<form action="add.php" method="post">
	<p id="root" align='center'>
    <a href="booklist.php?class=economy">economy</a>&nbsp&nbsp
    <a href="booklist.php?class=IT">IT</a>&nbsp&nbsp
    <a href="booklist.php?class=culture">culture</a>&nbsp&nbsp
    <a href="booklist.php?class=science">science</a>&nbsp&nbsp
    <a href="cart.php">购物车</a>
    </p>
	<?php 
	include("booklist.txt");
	if(isset($_GET["class"]))
	{
		$class=$_GET["class"];	
	}else{$class="economy";}
	
	echo "<table align='center' border='dark'>";
		echo "<tr>";
		echo "<td>"."name"."</td>";
		echo "<td>"."author"."</td>";
		echo "<td>"."price"."</td>";
		echo "<td>"."add to cart"."</td>";
		echo "</tr>";
	foreach($bookclassify[$class] as $key=>$value)
	{
		echo "<tr>";
		echo "<td>".$value["name"]."</td>";
		echo "<td>".$value["author"]."</td>";
		echo "<td>".$value["price"]."</td>";
		echo "<td> <input type='checkbox' name='book[]' value=".$value["name"]."></td>";
		echo "</tr>";
	}
	echo "<tr><td colspan='4' align='right'><input type='submit' name='sub' value='提交'></td></tr>";
	echo "</table>";
	?>
</div>
</form>
</body>
</html>