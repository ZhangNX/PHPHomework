<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员管理</title>
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
			$sqlstr="select userid from tb_user where username='$username' and role='1'";
			$result=mysqli_query($mycon,$sqlstr);
			if (!$result) 
			{
			printf("Error: %s\n", mysqli_error($mycon));
			exit();
			}
			if(mysqli_num_rows($result)==1)
			{
				mysqli_close($mycon);
				$sqlstr="select username, gender, email, regtime from tb_user";
				include("members.php");
				mysqli_query($mycon,"set names utf8");
				$result=mysqli_query($mycon,$sqlstr);
				if (!$result) 
				{
				printf("Error: %s\n", mysqli_error($mycon));
				exit();
				}
				$row=array();$recordest=array();
				echo "<table border='black' id='midd'>";
				echo "<tr><td>用户名</td><td>性别</td><td>电子邮箱</td><td>注册时间</td><td>操作</td></tr>";
				while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					$recordest[]=$row;
					echo "<tr>";
					foreach($row as $k=>$v)
					{
						echo "<td>".$v."</td>";	
					}
					echo "<td> <a href='delete.php?username=".$row["username"]."'>删除</a></td>";
					echo "</tr>";
				}
				echo "</table>";
				mysqli_close($mycon);
			}else
			{
				echo "没有权限";
				mysqli_close($mycon);
				header("Refresh:3;url=index.php");
			}
			
		}
	?>
        
</div>
</body>
</html>