<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改信息</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="root">
	<div id="top"<?php include("menu.php");?></div>
    <?php
		if(!isset($_COOKIE["user"]))
		{
			echo "请登录";
			header("Refresh:3;url=login.php");	
		}
		else
		{
			include("members.php");
			$username=$_COOKIE["user"];
			$sqlstr="select username, gender, birthdate, question, answer, email, introduce from tb_user where username='".$username."'";
			mysqli_query($mycon,"set names utf8");
			$result=mysqli_query($mycon,$sqlstr);
			if (!$result) 
			{
			printf("Error: %s\n", mysqli_error($mycon));
			exit();
			}
			$row=array();$recordest=array();
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				$recordest[]=$row;
			}
			mysqli_close($mycon);
		
	?>
        <form id="mid" action="do_modify.php" method="post">
            <span id="word">用户名:</span><span id="word2"><?php echo $recordest[0]["username"]; ?></span><br>
            <span id="word">性别:</span>
			<?php 
			if($recordest[0]["gender"]=="男")
			{
				echo "<input type='radio' name='gender' value='men' checked='true'>男<input type='radio' name='gender' value='women'>女<br>";
			}else
			{
				echo "<input type='radio' name='gender' value='men' >男<input type='radio' name='gender' value='women' checked='true'>女<br>";
			}
			?>
             <span id="word">出生日期:</span><input type="date" name="birthdate" value="<?php echo $recordest[0]["birthdate"]; ?>"><br>
            <span id="word">安全问题:</span><input type="text" name="question" value="<?php echo $recordest[0]["question"]; ?>"><br>
            <span id="word">答案:</span><input type="text" name="answer" value="<?php echo $recordest[0]["answer"]; ?>"><br>
            <span id="word">电子邮件:</span><input type="text" name="email" value="<?php echo $recordest[0]["email"]; ?>"><br>
            <span id="word">自我介绍:</span><input type="text" name="introduce" value="<?php echo $recordest[0]["introduce"]; ?>"><br>
            <div id="zhong"><input type="submit" name="sub" value="更新"><input type="reset"  value="重置"></div>
            
        </form>
        <?php } ?>
</div>
</body>
</html>