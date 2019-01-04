<?php
session_start(); 
					//初始化SESSION变量
include("config.php");				//包含数据库连接文件
header("content-type:text/html;charset=utf-8");
//$furl=getenv("http_referer");
//$time=date("Y")."-".date("m")."-".date("d");		//获取系统当前时间
//if(isset($_SESSION['u_name']) && isset($_SESSION['u_pass'])){		//判断用户是否正常登录
									//判断主题是否提交
$data['d_name']=strval($_POST['d_name']);
$data['d_price']=strval($_POST['d_price']);
$data['d_num']=strval($_POST['d_num']);
$data['d_content']=strval($_POST['d_content']);

	$fileinfo = $_FILES['d_pic'];
    $path = './'.$_FILES['d_pic']['name'];
    move_uploaded_file($fileinfo['tmp_name'],$path);
    $data['d_pic'] = $path;

	$sqlstr1="insert into con_drink(d_name,d_price,d_num,d_content,d_pic) values('$data[d_name]','$data[d_price]','$data[d_num]','$data[d_content]','$data[d_pic]')";
	
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