<?php 
session_start(); 
include("config.php");
header("content-type:text/html;charset=utf-8");
$furl=getenv("http_referer");
if(isset($_SESSION['g_name']) && isset($_SESSION['g_pass'])){
		$id=$_POST['id'];
		$flag=$_POST['check'];		//获得将被删除的用户ID
		$query="update lypl set l_flag = '".$flag."' where l_id = ".$id;	
		$result=mysqli_query($conn,$query);
		if($result){
  			echo "审核成功!!";
  			echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
		}else{
			echo "审核失败!";
		}

	
}else{
	echo "<meta http-equiv=\"Refresh\" content=\"2;url=admin.php\">";
	echo "<a href=\"admin.php\">这里</a>";
}
?>