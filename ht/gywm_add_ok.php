<?php
session_start(); 					//初始化SESSION变量
include("config.php");				//包含数据库连接文件
header("content-type:text/html;charset=utf-8");

$data['g_ad']=strval($_POST['g_ad']);
$data['g_cul']=strval($_POST['g_cul']);
$data['g_con']=strval($_POST['g_con']);


	$sqlstr1="insert into gywm(g_ad,g_cul,g_con) values('$data[g_ad]','$data[g_cul]','$data[g_con]')";
	
	$result=mysqli_query($conn,$sqlstr1);
	
	if($result)
	{
		echo "<script>alert('添加成功！');history.go(-2);</script>";
	}
	else
	{
		echo "<script>alert('添加失败！');history.go(-2);</script>";
		}

	
?>