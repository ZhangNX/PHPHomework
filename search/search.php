<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>search</title>
</head>

<body>
	<form action=""  method="get">
	<input type="text" name="keywords" size=30 value="<?php echo @$_GET["keywords"]; ?>">
    <input type="submit" name="submit" value="search">
    </form>
    
    <?php 
		include("definition2.txt");
		if(isset($_GET["keywords"]))
			{
				$keywords=$_GET["keywords"];
				$keylist=explode(',',$keywords);
				for($i=0;$i<count($keylist);$i++)
					{$keylist[$i]=trim($keylist[$i]);}
				$total=0;
				foreach($definition as $key=>$value)
				{
					foreach($keylist as $k) 
					{
						if($key==$k){$result[]=$value;$total++;}		
					}
				}
				
				if($total==0){echo "no match";}
				else
				{
					define("maxperpage",2);
					$pagecount=ceil($total/maxperpage);
				if(empty($_GET["currentpage"]))
				{
				  $currentpage=1;
				}
					else
					{
					  $currentpage=$_GET["currentpage"];
					}
				$first=($currentpage-1)*maxperpage;
				$last=$currentpage*maxperpage-1;
				if($last>$total-1)
				{
				  $last=$total-1;
				}
				 echo "<ol type='1'>";
				 for($i=$first;$i<=$last;$i++)
				 {
				   echo "<li>";
				   foreach($keylist as $value)
				   {
					 $result[$i]["value"]=str_replace($value,"<font color='#ff0000'><a href='".$result[$i]["url"]."'>".$value."</a></font>",$result[$i]["value"]);//
				   }
				   echo $result[$i]["value"];
				   echo "</li>";
				 }
				 echo "</ol>";
			   }
			   if($currentpage>1)
			   {
				 echo "<a href='search.php?keywords=$keywords&currentpage=".($currentpage-1)."'>Previouse</a>&nbsp;";
			   }
			   for($i=1;$i<=$pagecount;$i++)
			   {
					 if($currentpage==$i)
					 {
					   echo "[$i]&nbsp;";
					 }
					 else
					 {
					   echo "<a href='search.php?keywords=$keywords&currentpage=$i'>[$i]</a>&nbsp;";
					 }
				}
				if($currentpage<$pagecount)
			   {
				 echo "<a href='search.php?keywords=$keywords&currentpage=".($currentpage+1)."'>Next</a>&nbsp;";
			   }
				
			}
	?>
</body>
</html>