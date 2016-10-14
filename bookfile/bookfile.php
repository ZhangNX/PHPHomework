<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>小小说网</title>
<style>
	#root{margin:0 auto;width:800px; text-align:center;} 
</style>
</head>

<body>
<div id="root">
<table align="center" border="dark">
<?php
	$fp=fopen("filelist.txt","r+");
	$i=1;
	while(!feof($fp))
		{
			$line=fgets($fp);
			$booklist[$i] = $line;
			$i++;
		}
	$j=1;
		echo "<tr>";
		while($j<=$i)
		{
			echo "<td><a href='list.php?page=".@$booklist[$j]."'>".@$booklist[$j]."</a></td>";
			if($j%3==0){echo "</tr>";}
			$j++;
		}
		echo "</tr>";
		fclose($fp);
?>
</table>
</div>
</body>
</html>