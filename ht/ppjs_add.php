<?php 
session_start();
include("config.php");
header("content-type:text/html;charset=utf-8");

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>品牌介绍</title>
<style type="text/css">
<!--
.style1 {font-size: 13px;
	font-family: "宋体";
	font-weight: normal;
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
<script language="javascript" src="script/zc_check.js" type="text/javascript"></script>
<body>

<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" background="../img/20.jpg">
  <tr>
    <td width="15">&nbsp;</td>
    <td width="760" height="100">&nbsp;&nbsp;== 品牌介绍 == </td>
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
		<form name="myform" method="post" action="ppjs_add_ok.php" enctype="multipart/form-data">
        

		<tr>
            <td height="235" align="center" class="style1">具体内容:</td>
            <td align="left" valign="top">              
              <input name="u_name" type="hidden" id="u_name" value="<?php echo $_SESSION['u_name'];?>">
              <input name="u_pass" type="hidden" id="u_pass" value="<?php echo $_SESSION['u_pass'];?>">
			    <textarea name="p_wen" cols="50" rows="15" wrap="PHYSICAL" ></textarea></td>
              
          </tr>
		  
              <tr>
    	<td>
    	<label for myfile>图片:</label>
    	</td>
    	<td ><input type="file" name="p_pic" /></td>
     </tr>  
		  
	
		  
          <tr>
            <td height="30" align="center">&nbsp;</td>
            <td><input name="tj" type="submit"  value="提交" onclick="checkString()">
              <input type="reset" name="Submit" value="重置信息">  </td>
          </tr>
          <tr>
            <td height="30" align="center">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
		   </form>
        </table>		</td>
       
      </tr>
    </table></td>
  </tr>
</table>





</body>
</html>