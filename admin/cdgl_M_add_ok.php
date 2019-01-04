<?php
session_start(); 
					//初始化SESSION变量
include("config.php");				//包含数据库连接文件
header("content-type:text/html;charset=utf-8");
//$furl=getenv("http_referer");
//$time=date("Y")."-".date("m")."-".date("d");		//获取系统当前时间
//if(isset($_SESSION['u_name']) && isset($_SESSION['u_pass'])){		//判断用户是否正常登录
									//判断主题是否提交
$data['m_name']=strval($_POST['m_name']);
$data['m_price']=strval($_POST['m_price']);
$data['m_content']=strval($_POST['m_content']);

	$fileinfo = $_FILES['m_pic'];
    $path = './'.$_FILES['m_pic']['name'];
    move_uploaded_file($fileinfo['tmp_name'],$path);
    $data['m_pic'] = $path;

	$sqlstr1="insert into con_meat(m_name,m_price,m_content,m_pic) values('$data[m_name]','$data[m_price]','$data[m_content]','$data[m_pic]')";
	
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