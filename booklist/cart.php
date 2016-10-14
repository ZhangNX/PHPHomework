<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>购物车</title>
<style>
#root{margin:0 auto;width:450px;text-align:center;}
body{margin:0;padding:0;text-align:center;}
</style>
</head>

<body>
<div id="root"
	<p id="root" align='center'>
    <a href="booklist.php?class=economy">economy</a>&nbsp&nbsp
    <a href="booklist.php?class=IT">IT</a>&nbsp&nbsp
    <a href="booklist.php?class=culture">culture</a>&nbsp&nbsp
    <a href="booklist.php?class=science">science</a>&nbsp&nbsp
    <a href="cart.php">购物车</a>
    </p>
    <?php 
	$flag=0;
	if(isset($_SESSION["book"]))
	{	echo "<table align='center' border='black'>";
		echo "<tr><td>name</td><td>count</td><td>remove</td></tr>";
			foreach($_SESSION["book"] as $k=>$v)
			{	if($v!=0)
				{
					$flag=1;
					echo "<tr>";
					echo "<td>".$k."</td>";	
					echo "<td>".$v."</td>";
					echo "<td>"."<a href='remove.php?name=".$k."'>remove one</a>"."</td>";	
					echo "</tr>";	
				}
			}
	}if($flag==0){echo "nothing in your cart!";}
	?>
</table>
</div>
</body>
</html>