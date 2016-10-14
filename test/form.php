<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

<?php
	include("test.txt");
		
	$current=1;
	if(isset($_GET["current"]))
	{
	   $current=$_GET["current"];
	}
	else
	{
	   $_GET["current"]=1;
	}
	
	if(isset($_SESSION["test"]["no".$current]))
	{
	   $answer1=$_SESSION["test"]["no".$current];
	}
	else
	{
		$answer1="null";
	} 
	if(isset($_SESSION["test"]["no".($current+1)]))
	{
	   $answer2=$_SESSION["test"]["no".($current+1)];
	}
	else
	{
		$answer2="null";
	} 
	$_SESSION["test"]["current"]=($current);
	echo "<form action='sub.php' method='post'>";
 	echo "<h4>$current :  ".$test[$current]["subject"]."</h4>";
?>
	<p><input type="radio" name="test<?php echo"$current"; ?>" value="A" onChange="save(<?php echo $current;?>,'A')"
		<?php if($answer1=="A") echo "checked='checked'";?>> A. <?php echo $test[$current]["A"];?></p>
    <p><input type="radio" name="test<?php echo"$current"; ?>" value="B" onChange="save(<?php echo $current;?>,'B')"
		<?php if($answer1=="B") echo "checked='checked'";?>> B. <?php echo $test[$current]["B"];?></p>
    <p><input type="radio" name="test<?php echo"$current"; ?>" value="C" onChange="save(<?php echo $current;?>,'C')"
		<?php if($answer1=="C") echo "checked='checked'";?>> C. <?php echo $test[$current]["C"];?></p>
    <p><input type="radio"name="test<?php echo"$current"; ?>" value="D" onChange="save(<?php echo $current;?>,'D')"
		<?php if($answer1=="D") echo "checked='checked'";?>> D. <?php echo $test[$current]["D"];?></p>
     <br><br><br>
<?php
	$current++;
	echo "<h4>$current :  ".$test[$current]["subject"]."</h4>";
?>
	<p><input type="radio" name="test<?php echo"$current"; ?>" value="A" onChange="save(<?php echo $current;?>,'A')"
		<?php if($answer2=="A") echo "checked='checked'";?>> A. <?php echo $test[$current]["A"];?></p>
    <p><input type="radio" name="test<?php echo"$current"; ?>" value="B"  onChange="save(<?php echo $current;?>,'B')"
		<?php if($answer2=="B") echo "checked='checked'";?>> B. <?php echo $test[$current]["B"];?></p>
    <p><input type="radio" name="test<?php echo"$current"; ?>" value="C"  onChange="save(<?php echo $current;?>,'C')"
		<?php if($answer2=="C") echo "checked='checked'";?>> C. <?php echo $test[$current]["C"];?></p>
    <p><input type="radio"name="test<?php echo"$current"; ?>" value="D" onChange="save(<?php echo $current;?>,'D')"
		<?php if($answer2=="D") echo "checked='checked'";?>> D. <?php echo $test[$current]["D"];?></p>
    <br><br><br>
    </form>
</body>
</html>