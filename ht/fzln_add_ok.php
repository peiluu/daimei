<?php
session_start(); 					//初始化SESSION变量
include("config.php");				//包含数据库连接文件
header("content-type:text/html;charset=utf-8");

$data['fz_content']=strval($_POST['fz_content']);


	$sqlstr1="insert into fzln(fz_content) values('$data[fz_content]')";
	
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


