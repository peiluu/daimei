<?php 
session_start(); 
include("config.php");					//设置编码格式

/*$host="localhost";
$userName="root";
$password="root";	
$conn=mysqli_connect($host,$userName,$password);
mysqli_query($conn,"set names gb2312");		//连接数据库服务器*/
/*if($conn)
{
	echo "<script type='text/javascript'>alert('数据库连接成功！');</script>";
	
}
else
{
	echo "<script type='text/javascript'>alert('数据库连接失败！');</script>";
}*/

$furl=getenv("http_referer");
$g_name=$_POST['g_name'];
$g_pass=$_POST['g_pass'];
$query="select g_name from gly where g_name='".$g_name."' and g_pass='".$g_pass."'";
$result=mysqli_query($conn,$query);
if($result){
	if(mysqli_num_rows($result)!=0){
		$_SESSION['g_name']=$g_name;
	 	$_SESSION['g_pass']=$g_pass;
		//echo "恭喜您登录成功！"; 
	 	echo "<meta http-equiv=\"refresh\" content=\"1; url=index.php\">";
	 }else{
	 	echo "你输入的用户名ID<b>$u_name</b>不存在或密码不正确!!";
	 	echo "<meta http-equiv=\"refresh\" content=\"2 url=$furl\"> ";
	 }
}else{
	echo "<font color=\"#6633cc\">登录失败!!";
}

?>   