<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
<style>
#root{margin:0 auto;width:800px; text-align:center;}
</style>
</head>
<script language="javascript">
	function save(current,ans)
	{
		var httpRequest = new XMLHttpRequest();
		httpRequest.open("get","sub.php?current="+current+"&ans="+ans);
		httpRequest.send();
	}
	function jump(current)
	{
		var httpRequest = new XMLHttpRequest();
		httpRequest.open("get","form.php?current="+current);
		httpRequest.send();
		httpRequest.onreadystatechange = function()
		{
			if(httpRequest.readyState==4&&httpRequest.status==200)
			{document.getElementById("form").innerHTML=httpRequest.responseText;}	
		}
	}
	function teststart(s)
	{
		s-=1;
		document.getElementById("time").innerHTML=s;
		if(s!=0){setTimeout("teststart("+s+")",1000);}
		else{alert("time is out");}	
	}
</script>
<body>
<div id="root">
<div id="time" align="right"> <p><input type="button" onClick="teststart(31)" value="start"></p></div>
<div id="form"></div>
<?php
	$current=1;
	$currentpage=$current/2;
	if($currentpage>1)
	   {
		 echo "<input type='button' onclick='jump(".($current-3).")' value=Previouse >";
	   }
	   for($i=1;$i<=6;$i++)
	   {
			 if($currentpage==$i)
			 {
			   echo "[$i]&nbsp;";
			 }
			 else
			 {
			   echo "<input type='button' onclick='jump(".($i*2-1).")' value=[$i] > ";
			 }
		}
		if($currentpage<6)
	   {
		 echo "<input type='button' onclick='jump(".($current+1).")' value=Next >";
	   }
?>

</div>
</body>
</html>