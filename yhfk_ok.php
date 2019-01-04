<?php
session_start(); 					//初始化SESSION变量
include "config.php";
//$furl=getenv("http_referer");				//包含数据库连接文件
header("content-type:text/html;charset=utf-8");	
$time=date("Y")."-".date("m")."-".date("d");		//获取系统当前时间
		//判断用户是否正常登录
		$data['zt']=strval($_POST['zt']);							
		$data['pj']=strval($_POST['pj']);
		//$zq=$_POST['zq'];
		//$xq=$_POST['xq'];	
		//$l_name=$_SESSION['u_name'];			//获取系统提交数据									
	    $query="insert into lypl (zt,pj,fbsj)values('$data[zt]','$data[pj]','$time')";
		$result=mysqli_query($conn,$query);  			//执行添加语句
		if($result){
			echo "发布成功!";
			echo "<meta http-equiv=\"Refresh\" content=\"1;url=yhfk.php\">";   //到时跳转到主页
			
		}else{ 
			echo "发布主题失败!!";
		}    
	

?>