    <?php
session_start(); 					//初始化SESSION变量
include("config.php");				//包含数据库连接文件
header("content-type:text/html;charset=utf-8");

$data['dm_content']=strval($_POST['dm_content']);


	$sqlstr1="insert into dmcs(dm_content) values('$data[dm_content]')";
	
	$result=mysqli_query($conn,$sqlstr1);
	
	if($result)
	{
		echo "<script>alert('添加成功！');history.go(-1);</script>";
	}
	else
	{
		echo "<script>alert('添加失败！');history.go(-1);</script>";
		}

	
?>

