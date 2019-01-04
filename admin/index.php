<!--<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
  <script src="http://libs.baidu.com/jquery/1.9.1/jquery.js"></script>
	<style type="text/css">
		*{
			margin:0;
			padding:0;
			}
	 	#main{
	 		text-align: center;
	 		font-family: "宋体";
	 		font-size: 20px;
	 		position: relative;
	 		width:900px;
	 		height: 600px;
	 		margin: 0  auto;
	 		text-align: center;
			border:1px solid #CCC;
	 	}	
		
	 	#header{
	 		position:absolute;
	 		text-align: center;
			width:900px;
			height:100px;
			background-image:url(img/head_bg.jpg);
			background-repeat:no-repeat;
	 	}
		#menu{
			position:absolute;
			right:20px;
			font-size:18px;
			}
	 	#center{
			width:900px;
			height:500px;	
			background-color:#FFC;
			}
		#left{
			position:absolute;
			top:100px;
			width:200px;
			height:400px;
			border:1px solid #666;
			border-bottom:none;
			
			}
	 	#left_1{
			padding-top:20px;
			
			}
		#right{
			position:absolute;
			width:700px;
			left:200px;
			height:400px;
		    border:1px solid #666;
			top:100px;
			border-left:none;
			
			}
			
	 	.right_1{
	 		position:absolute;
	 		top:60px;
			padding-left:50px;
			width:500px;
			font-size:18px;
			font-family:"新宋体";
	 	}
		#under{
			width:100%; 
			height:100px;
			border:1px solid #666;
			background-color:#FF9;
			font-family:"宋体";
			font-size:15px;
			}
	 	h2{
	 		font-family:"宋体";
	 	}
	 	button{
	 		border-radius: 20px;
	 	}
	 
	 	table{
	 		border-collapse: collapse;
	 	}
	    td{
			width:70px;
			height:40px;
			}	
	    .text{
			width:200px;
			}
		a{
			color:black;
			text-decoration:none;
			}
		a:hover{
			color:#36F;
			}
	    .tr1 {
			background-color:#FC6;
			}
	</style>
	<script language="JavaScript">
		function show_user(){
		  $("#table_user").css("display","block");
		  $("#table_pl").css("display","none");
		  $("#table_content").css("display","none");
		}
		
		function show_pl(){
		 $("#table_user").css("display","none");
		 $("#table_pl").css("display","block");
		 $("#table_content").css("display","none");
		}
			
	   function show_content(){
	     $("#table_user").css("display","none");
		 $("#table_pl").css("display","none");
		 $("#table_content").css("display","block");	
		}
	</script>
	</head>
	<body>
		<div id="main">
		<div id="header"><br><h2>管理员界面</h2>
        <div>
        <i id="menu">
          <a href="javascript:history.back()">后退</a>
          <a href="javascript:history.forward()">前进</a>
          <a href="javascript:location.reload()">刷新</a>&nbsp;
          <a href="#">返回首页</a></i>
         </div>
        </div>
        <div id="center">
        <div id="left">
		<div id="left_1"><br><br>
        	<h3>管理员选项</h3><br>
         	<a href="D:\phpstudy\WWW\wode\admin\yhgl.php">用户管理</a><br><br>
         	<a href="javascript:show_pl()">评论管理</a><br><br>
         	<a href="javascript:show_content()">内容管理</a><br><br>
         </div>
        </div>
        <div id="right">
		
       </div>
      
       </div>
	    <div id="under">
    
      欢迎观临本网站，为您的体验和使用，请使用IE7以上版本浏览器，谢谢。<br>
      版权所有@xxxx火锅
       </div>
	</div>
	
	</body>
</html>-->
<?php
session_start();		//初始化SESSION变量
					
include("config.php");					//包含数据库连接文件
$furl=getenv("http_referer");					//获取当前文件

$page=(isset($_GET['page']))?$_GET['page']:"1";		//定义分页变量的值
$lmbs=(isset($_GET['lmbs']))?$_GET['lmbs']:"";		//定义栏目标识传递的参数值

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理员界面</title>
<style type="text/css">

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style1 {font-size: 16px;
	font-family: "幼圆";
	font-weight: bold;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EFF3FF;
}


</style>
</head>
<script language="javascript" src="../script/zc_check.js" type="text/javascript"></script>
<body>

<table width="1028" border="0" align="center" cellpadding="0" cellspacing="0" background="../img/7.png" >

  <tr>
	<td height="98" align="center"><h3>管理员界面</h3></td>  
  </tr>
	<tr>
	<td align="right"><h3><a href="../wzsy_3.php">退出</a></h3></td>
	</tr>
<table  width="1028" border="1" align="center" cellpadding="0" cellspacing="0" >
  <tr bgcolor="#FFE4E1">
    <td width="180" height="580" align="center" valign="top">
	<table width="175" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="40" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td height="50" align="center" class="style1"><a href="index.php?lmbs=<?php echo urlencode('用户管理');?>">用户管理</a></td>
      </tr>
      <tr>
        <td height="50" align="center"class="style1"><a href="index.php?lmbs=<?php echo urlencode('评论管理');?>">评论管理</a></td>
      </tr>
	   <tr>
        <td height="50" align="center" class="style1"><a href="index.php?lmbs=<?php echo urlencode('火锅前沿-pic');?>">火锅前沿-pic</a></td>
      </tr>
	   <tr>
        <td height="50" align="center" class="style1"><a href="index.php?lmbs=<?php echo urlencode('火锅前沿-content');?>">火锅前沿-content</a></td>
      </tr>
      <tr>
        <td height="50" align="center"class="style1"><a href="index.php?lmbs=<?php echo urlencode('菜单管理-drink');?>">菜单管理-drink</a></td>
      </tr>
	  
		<tr>
        <td height="50" align="center"class="style1"><a href="index.php?lmbs=<?php echo urlencode('菜单管理-meat');?>">菜单管理-meat</a></td>
      </tr>
	  <tr>
        <td height="50" align="center" class="style1"><a href="index.php?lmbs=<?php echo urlencode('菜单管理-special');?>">菜单管理-special</a></td>
      </tr>
	  <tr>
        <td height="50" align="center" class="style1"><a href="index.php?lmbs=<?php echo urlencode('菜单管理-vegetable');?>">菜单管理-vegetable</a></td>
      </tr>
	   
    </table></td>
    <td width="596" align="center" valign="top">
	
<?php 
switch($lmbs){		//通过该语句来调用相应的文件
	    case "用户管理":
		    include "yhgl.php";		 //如果点击的超链接等于栏目管理，则输出lmgl.php页
		break;						//如果不是，则跳出，继续其他的循环
		case "评论管理":
		    include "plgl.php";
		break;	
		case "菜单管理-drink":
		    include "cdgl-D.php";
		break;	
		case "菜单管理-meat":
		    include "cdgl-M.php";
		break;	
		case "菜单管理-special":
		    include "cdgl-S.php";
		break;	
		case "菜单管理-vegetable":
		    include "cdgl-V.php";
		break;	
		case "火锅前沿-pic":
		    include "hgqy_gl_pic.php";
		break;	
		case "火锅前沿-content":
		    include "hgqy_gl_con.php";
		break;	
		default:
		    include "yhgl.php";
		break;	
	}
	?>
	</td>
	<table width="776" height="78" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr><td align="center"> 欢迎观临本网站，为您的体验和使用，请使用IE7以上版本浏览器，谢谢。<br>
      版权所有@xxxx火锅</td>
	</tr>
	</table>
  </tr>
  
</table>


</body>
</html>

