<?php  
$conn=mysqli_connect("localhost","root","root");		//连接数据库服务器
mysqli_select_db($conn,"db_database");				//选择数据库
mysqli_query($conn,"set names utf8");						//设置编码格式
?>