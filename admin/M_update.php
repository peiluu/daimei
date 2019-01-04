<?php 
session_start(); 
include("config.php");
//$furl=getenv("http_referer");
header("content-type:text/html;charset=utf-8");
if(isset($_SESSION['g_name']) && isset($_SESSION['g_pass'])){
	if($_GET['lmbs']=="菜单管理-meat"){
		$m_id=$_GET['m_id'];
   		//$query="delete from con_drink where d_id='$d_id'";
		$sqlstr = "select * from con_meat where m_id='$m_id'";   		
   		$result=mysqli_query($conn,$sqlstr);
		$myrow = mysqli_fetch_array($result);
?>

<style>
.m_{
	width:200px;
	height:50px;
	font-size:16px;
	font-weight:bold;
}
.m_1{
	
	font-size:14px;
}
</style>
<table width="776" border="1" align="center" cellpadding="0" cellspacing="0" background="../img/5.jpg">
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
	<form name="myform" method="post" action="update_ok.php" enctype="multipart/form-data">
        
          <tr>
            <td height="30" align="center" ><h3>名称:</h3></td>
            <td><input name="m_name" type="text" class="m_" value="<?php echo $myrow['m_name'] ?>"></td>
          </tr>

		  <tr>
            <td height="30" align="center" ><h3>价格:</h3></td>
            <td><input name="m_price" type="text" class="m_"  value="<?php echo $myrow['m_price'] ?>"></td>
          </tr>
 
		<tr>
            <td height="145" align="center" ><h3>内容简介:</h3></td>
            <td align="left" valign="top">                          
			<textarea name="m_content" cols="25" rows="8" class="m_1" ><?php echo $myrow['m_content'] ?></textarea></td>             
        </tr>
		
          <tr>
            <td height="30" align="center">&nbsp;</td>
            <td>
			<input type="hidden" name="lmbs" value="菜单管理-meat">
			<input type="hidden" name="m_id" value="<?php echo $myrow['m_id']?>">
			<input name="tj" type="submit" class="m_1" value="提交" >
             <input type="reset" name="Submit" class="m_1" value="重置信息">  </td>
          </tr>
          <tr>
            <td height="30" align="center">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
		   </form>
		           </table></td>
       
      </tr>
    </table></td>
  </tr>
</table>

<?php
	}
}
?>
