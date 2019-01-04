<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../script/jquery.js"></script>
<title>管理员登陆</title>
</head>
<style type="text/css">
<!--td{

	font-size: 14px;
	font-weight: bold;
	font-family: "宋体";
}

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EFF3FF;	
	}
.focus{
	border:1px solid #f00;
	background:#fcc;
}-->
</style>

<script language="javascript">
   function checklogin()
   {   
       if((login.g_name.value!="")&&(login.g_pass.value!=""))
	      return true;
		else{
		   alert("用户名或密码不能为空!");
		   return false;
			
		}  
   
   }
   
   $(function(){
	   $("input:lt(2)").focus(function(){
		   $(this).addClass("focus");
	   }).blur(function(){
		   $(this).removeClass("focus");
	   });
   });
</script>

<body>
	
<table  width="335" border="0" align="center"  background="../img/gly_pic.jpg" style="border-radius:30px;">	
<tr>
    <td height="65">&nbsp;</td>
</tr>

<form action="admin_ok.php" method="post" name="login" onSubmit="return checklogin()">

 <tr>
      <td width="316" align="center">
     	&nbsp;管理员:<input name="g_name" type="text" id="g_name" size="20">
      </td>   
</tr>
  
<tr>  
    <td width="316" align="center">
      &nbsp;密	码:<input name="g_pass" type="password" id="g_pass" size="20">
    </td>
</tr>
  
<tr>
    <td height="30">&nbsp;</td>
</tr>	

<tr>        
<td align="center"><input name="denglu" type="submit" id="denglu" value="登录">
</td>
</tr>   

</form>
</table>
</body>
</html>