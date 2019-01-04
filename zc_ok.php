<?php 
session_start();	//初始化session变量
include "config.php";	//包含数据库文件
$furl=getenv("HTTP_REFERER");	//获取IP
header("content-type:text/html;charset=utf-8");	
if(isset($_POST['qrtj'])){		//对提交按钮进行判断
    $u_name=$_POST['u_name'];
	$u_pass=$_POST['u_pass'];
    $u_sex=$_POST['u_sex'];
	$u_pnumber=$_POST['u_pnumber'];
	$u_address=$_POST['u_address'];
	
	$query="select * from tb_user where u_name='$u_name'";		//在数据库中查询提交的用户名
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0){		//对查询的记录数进行判断
	 	echo $u_name."已经被注册!</font>";	//用户名注册过给出提示
   		echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";		//跳转回注册页
	 }else{
		//$u_pass=md5($u_pass);		
	 	$query="insert into tb_user (u_name,u_pass,u_sex,u_pnumber,u_address)values('$u_name','$u_pass','$u_sex','$u_pnumber','$u_address')";
	 	if(mysqli_query($conn,$query)){
	 		$_SESSION['u_name']=$u_name;	//通过session获取提交的用户名
	 		$_SESSION['u_pass']=$u_pass;    //通过session获取提交的密码
			
			echo "<li class=\"huise03\"><font color=red>".$u_name."</font>恭喜您注册成功！";
			echo "<meta http-equiv=\"Refresh\" content=\"2;url=wzsy_3.php\">";
	 	}else{
	 		echo "<font class='#ff0000'>注册失败!!!</font>";
	 		echo mysqli_error();
		} 
	}
}