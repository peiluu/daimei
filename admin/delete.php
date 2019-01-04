<?php 
session_start(); 
include("config.php");
header("content-type:text/html;charset=utf-8");
$furl=getenv("http_referer");
if(isset($_SESSION['g_name']) && isset($_SESSION['g_pass'])){
	if(isset($_GET['lmbs']) && $_GET['lmbs']=="用户管理"){
		$u_id=$_GET['u_id'];							//获得将被删除的用户ID
		$query="delete from tb_user where u_id='$u_id'";	//将要删除的用户从user表中删除
		$result=mysqli_query($conn,$query);
		if($result){
  			echo "删除成功!!";
  			echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
		}else{
			echo "删除失败!";
		}
	}
	if(isset($_GET['lmbs']) && $_GET['lmbs']=="评论管理"){
		$l_id=$_GET['l_id'];
		$query="delete from lypl where l_id='$l_id'";
		$result=mysqli_query($conn,$query);
  		if($result){
     		echo "<font color=\"#ff0000\">删除成功!!</font>";
     		echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">";
		}
	}
	if(isset($_GET['lmbs']) && $_GET['lmbs']=="菜单管理-drink"){
   		$d_id=$_GET['d_id'];
   		$query="delete from con_drink where d_id='$d_id'";
   		$result=mysqli_query($conn,$query);
   		if($result){
      		echo "成功删除!!";
      		echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">"; 
		}
	}
if(isset($_GET['lmbs']) && $_GET['lmbs']=="菜单管理-meat"){
   		$m_id=$_GET['m_id'];
   		$query="delete from con_meat where m_id='$m_id'";
   		$result=mysqli_query($conn,$query);
   		if($result){
      		echo "成功删除!!";
      		echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">"; 
		}
	}
if(isset($_GET['lmbs']) && $_GET['lmbs']=="菜单管理-special"){
   		$s_id=$_GET['s_id'];
   		$query="delete from con_special where s_id='$s_id'";
   		$result=mysqli_query($conn,$query);
   		if($result){
      		echo "成功删除!!";
      		echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">"; 
		}
	}
if(isset($_GET['lmbs']) && $_GET['lmbs']=="菜单管理-vegetable"){
   		$v_id=$_GET['v_id'];
   		$query="delete from con_vegetable where v_id='$v_id'";
   		$result=mysqli_query($conn,$query);
   		if($result){
      		echo "成功删除!!";
      		echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">"; 
		}
	}
	if(isset($_GET['lmbs']) && $_GET['lmbs']=="火锅前沿-pic"){
   		$h_id=$_GET['h_id'];
   		$query="delete  from hgqy where h_id='$h_id'";
   		$result=mysqli_query($conn,$query);
   		if($result){
      		echo "成功删除!!";
      		echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">"; 
		}
	}
	if(isset($_GET['lmbs']) && $_GET['lmbs']=="火锅前沿-content"){
   		$c_id=$_GET['c_id'];
   		$query="delete  from hgqy_con where c_id='$c_id'";
   		$result=mysqli_query($conn,$query);
   		if($result){
      		echo "成功删除!!";
      		echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">"; 
		}
	}
	
}else{
	echo "<meta http-equiv=\"Refresh\" content=\"2;url=admin.php\">";
	echo "<a href=\"admin.php\">这里</a>";
}
?>