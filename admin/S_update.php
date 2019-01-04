<?php 
session_start(); 
include("config.php");
//$furl=getenv("http_referer");
header("content-type:text/html;charset=utf-8");
if(isset($_SESSION['g_name']) && isset($_SESSION['g_pass'])){
	if($_GET['lmbs']=="菜单管理-special"){
		$s_id=$_GET['s_id'];
   		//$query="delete from con_drink where d_id='$d_id'";
		$sqlstr = "select * from con_special where s_id='$s_id'";   		
   		$result=mysqli_query($conn,$sqlstr);
		$myrow = mysqli_fetch_array($result);
?>

<style>
.s_{
	width:200px;
	height:50px;
	font-size:16px;
	font-weight:bold;
}
.s_1{
	
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
            <td><input name="s_name" type="text" class="s_" value="<?php echo $myrow['s_name'] ?>"></td>
          </tr>

		  <tr>
            <td height="30" align="center" ><h3>价格:</h3></td>
            <td><input name="s_price" type="text" class="s_" value="<?php echo $myrow['s_price'] ?>"></td>
          </tr>
		  
		<tr>
            <td height="145" align="center" ><h3>内容简介:</h3></td>
            <td align="left" valign="top">                          
			<textarea name="s_content" cols="25" rows="8" class="s_1" ><?php echo $myrow['s_content'] ?></textarea></td>             
        </tr>
		
          <tr>
            <td height="30" align="center">&nbsp;</td>
            <td>
			<input type="hidden" name="lmbs" value="菜单管理-special">
			<input type="hidden" name="s_id" value="<?php echo $myrow['s_id']?>">
			<input name="tj" type="submit" class="s_1" value="提交" >
             <input type="reset" name="Submit" class="s_1" value="重置信息">  </td>
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