<?php 
session_start();
include("config.php");
header("content-type:text/html;charset=utf-8");
//if(!isset($_SESSION['u_name']) && !isset($_SESSION['u_pass'])){
	//echo "请先登录,才可以发布主题!!";
	//echo "<meta http-equiv=\"Refresh\" content=\"2;url=index.php\">";
//}else{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>火锅前沿</title>
<style type="text/css">
<!--
.style1 {font-size: 14px;
	font-family: "宋体";
	font-weight: normal;
}

.style2 
{
	font-size: 16px;
	font-family: "宋体";
	font-weight: bold;
}
body {
	background-color: #EFF3FF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>
<body>

<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" background="../images/hgqy/06.jpg">
  <tr>
    <td width="15">&nbsp;</td>
    <td width="760" height="100" class="style2">&nbsp;&nbsp;== 火锅前沿 == </td>
  </tr>
</table>


<table width="776" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="776"><table width="776" height="400"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
		
        <td align="center" valign="top" >&nbsp;</td>
      </tr>
      <tr>
     
        <td width="522" align="center" valign="top">
		  <table width="88%"  border="0" cellpadding="0" cellspacing="0">

<form name="myform" method="post" action="hgqy_add_okpic.php" enctype="multipart/form-data">		 
	<tr>
    	<td class="style1">
    	<label for myfile>图片:</label>
    	</td>
    	<td ><input type="file" name="h_pic" /></td>
     </tr>        
		  		 
	   <tr>
            <td height="30" align="center">&nbsp;</td>
            <td><input name="tj" type="submit"  value="提交-pic" >
              <input type="reset" name="Submit" value="重置信息">  </td>
          </tr>
          <tr>
            <td height="30" align="center">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
		   </form>
		   
        </table>
		</td>
       
      </tr>
    </table></td>
  </tr>
</table>


</body>
</html>
