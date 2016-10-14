<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员管理系统</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="root">
	<div id="top"<?php include("menu.php");?></div>
    <?php
		include("members.php");
		if(!isset($_COOKIE["user"]))
		{
			echo "请登录";
			header("Refresh:3;url=login.php");	
		}
		else
		{
			$sqlstr="select username, gender, email, regtime from tb_user";
			mysqli_query($mycon,"set names utf8");
			$result=mysqli_query($mycon,$sqlstr);
			if (!$result) 
			{
			printf("Error: %s\n", mysqli_error($mycon));
			exit();
			}
			$row=array();$recordest=array();
			echo "<table border='black' id='midd'>";
			echo "<tr><td>用户名</td><td>性别</td><td>电子邮箱</td><td>注册时间</td><td>其他</td></tr>";
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				$recordest[]=$row;
				echo "<tr>";
				foreach($row as $k=>$v)
				{
					echo "<td>".$v."</td>";	
				}
				echo "<td><a href=''>详细信息</a></td>";
				echo "</tr>";
			}
			echo "</table>";
			mysqli_close($mycon);
		}
	?>
        
</div>

</body>
</html>