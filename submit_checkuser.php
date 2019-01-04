<?php
header("content-type:text/html;charset=utf-8");
include "config.php";
if(isset($_POST['u_name']) && $_POST['u_name']!=""){
	$query="select * from tb_user where u_name='".$_POST['u_name']."'";
	$result=mysqli_query($conn,$query);
	$nn=mysqli_num_rows($result);
	if ($nn==1) {
		echo"<script>alert('用户名已经存在，不能注册');history.back();</script>";
	} 
}
?>