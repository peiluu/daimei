<?php
session_start(); 					//初始化SESSION变量
include("config.php");				//包含数据库连接文件
//$time=date("Y")."-".date("m")."-".date("d");		//获取系统当前时间
//if(isset($_SESSION['u_name']) && isset($_SESSION['u_pass'])){		//判断用户是否正常登录
									//判断主题是否提交
header("content-type:text/html;charset=utf-8");
$data['s_name']=strval($_POST['s_name']);
$data['s_price']=strval($_POST['s_price']);
$data['s_content']=strval($_POST['s_content']);

	$fileinfo = $_FILES['s_pic'];
    $path = './'.$_FILES['s_pic']['name'];
    move_uploaded_file($fileinfo['tmp_name'],$path);
    $data['s_pic'] = $path;

	$sqlstr1="insert into con_special(s_name,s_price,s_content,s_pic) values('$data[s_name]','$data[s_price]','$data[s_content]','$data[s_pic]')";
	
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