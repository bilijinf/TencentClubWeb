<!DOCTYPE html>
<html lang="en">
<head>
	<style>

	</style>
</head>
<body>

	<?php
	$dbhost = 'localhost';  // mysql服务器主机地址
	$dbuser = 'root';            // mysql用户名
	$dbpass = '123456';          // mysql用户名密码
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('连接错误: ' . mysqli_error($conn));
	}
	echo '连接成功<br />';
	$sql = 'create DATABASE RUNOOB';
	$retval = mysqli_query($conn,$sql );
	if(! $retval )
	{
	    die('创建数据库失败: ' . mysqli_error($conn));
	}
	echo "数据库 RUNOOB 创建成功\n";
	mysqli_close($conn);
	?>

</body>
</html>