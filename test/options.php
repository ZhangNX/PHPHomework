<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>test</title>
</head>

<body>
<?php
 include("test.txt");
 $current=1;
 if(isset($_SESSION["current"]))
 {
   $current=$_SESSION["current"];
 }
 else
 {
   $_SESSION["current"]=1;
 }
 if(isset($_SESSION["no".$current]))
 {
   $answer=$_SESSION["no".$current];
  }
  else
  {
    $answer="null";
  } 
 echo "<form action='check.php' method='post'>";
 echo "<h4>$current :  ".$test[$current]["subject"]."</h4>";
 ?>
 <p><input type="radio" name="choose" value="A" <?php if($answer=="A") echo "checked='checked'";?>> A. <?php echo $test[$current]["A"];?></p>
 <p><input type="radio" name="choose" value="B" <?php if($answer=="B") echo "checked='checked'";?>> B. <?php echo $test[$current]["B"];?></p>
 <p><input type="radio" name="choose" value="C" <?php if($answer=="C") echo "checked='checked'";?>> C. <?php echo $test[$current]["C"];?></p>
 <p><input type="radio" name="choose" value="D" <?php if($answer=="D") echo "checked='checked'";?>> D. <?php echo $test[$current]["D"];?></p>
 <?php
 if($current>1)
 {
  echo "<p align='right'><input type='submit' name='ps' value='previouse'></p>";
 }
 if($current<count($test))
  {
    echo "<p align='right'><input type='submit' name='ns' value='next'></p>";
  }
 echo "</form>";
?>
</body>
</html>
