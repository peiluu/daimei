<?php 
session_start(); 
include "config.php";					//设置编码格式
$furl=getenv("http_referer");
header("content-type:text/html;charset=utf-8");	
$u_name=$_POST['u_name'];
$u_pass=$_POST['u_pass'];

$query="select u_name from tb_user where u_name='".$u_name."' and u_pass='".$u_pass."'";
$result=mysqli_query($conn,$query);
if($result){
	if(mysqli_num_rows($result)!=0){
		$_SESSION['u_name']=$u_name;
	 	$_SESSION['u_pass']=$u_pass;
		echo "恭喜您登录成功！"; 
       	echo "<meta http-equiv=\"Refresh\" content=\"2;url=yhfk.php\">";
	 }else{
	 	echo "您输入的用户名<b>$u_name</b>不正确或不存在...";
		echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
	 }
}else{
	echo "<font color=\"#6633cc\">登录失败!!";
	}


?> 
