<?php
session_start(); 					//初始化SESSION变量
include("config.php");				//包含数据库连接文件
header("content-type:text/html;charset=utf-8");

$data['p_wen']=strval($_POST['p_wen']);

	$fileinfo = $_FILES['p_pic'];
    $path = './'.$_FILES['p_pic']['name'];
    move_uploaded_file($fileinfo['tmp_name'],$path);
    $data['p_pic'] = $path;

	$sqlstr1="insert into ppjs(p_wen,p_pic) values('$data[p_wen]','$data[p_pic]')";
	
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

