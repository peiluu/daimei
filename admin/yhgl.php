<?php 
if(isset($_SESSION['g_name']) && isset($_SESSION['g_pass'])){
?>
<style type="text/css">

a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color:red;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.style4 {font-size: 16px;
	font-family: "宋体";
	font-weight: bold;
}

.style5 {font-size: 14px;
	font-weight:normal;
	font-family:"仿宋";
	}

</style>
<table  width="690" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="90" height="40">&nbsp;</td>
    <td align="center" class="style4">用户管理</td>
    <td width="90">&nbsp;</td>
    <td width="110">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="100">&nbsp;</td>
    <td width="70">&nbsp;</td>
  </tr>
  <tr align="center">
    <td height="40" class="style4">用户名</td>
    <td class="style4">性别</td>
	<td class="style4">电话</td>
    <td colspan="2" class="style4">地址</td>  
    <td class="style4">是否删除</td>
  </tr>
  <?php 
     $page_size=8;
	 $query="select * from tb_user where u_id";
	 $result=mysqli_query($conn,$query);
	 $message_count=mysqli_num_rows($result);			//记录条数
	 $page_count=ceil($message_count/$page_size);       //       page /后面的数字
	 $offset=($page-1)*$page_size;
	 $query="select * from tb_user where u_id order by u_id desc limit $offset,$page_size";
	 $result=mysqli_query($conn,$query);
	 if($result){
	 while($myrow=mysqli_fetch_array($result)){
  ?>
  <tr align="center" onMouseMove="this.bgColor='#D7F2FF'" onMouseOut="this.bgColor='#FFD9D9'">
    <td height="30"><span class="style5"><?php echo $myrow['u_name'];?></span></td>
    <td class="style5"><?php echo $myrow['u_sex'];?></td>
	  <td class="style5"><?php echo $myrow['u_pnumber']?></td>
    <td colspan="2" class="style5"><?php echo $myrow['u_address'];?></td>
	
    <td><a href="delete.php?lmbs=<?php echo urlencode('用户管理');?>&u_id=<?php echo $myrow['u_id'];?>" class="style5">删除</a></td>
  </tr>
  <?php }}?>
  <tr>
    <td height="30" colspan="7">
	
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr class="style5">
        <td width="50%" class="#ff0000">&nbsp;&nbsp;页次：<font class="#ff0000"><?php echo $page;?></font> / <font class="#ff0000">
			<?php
	   if($message_count==0)
	   {		  
		   $page_count=1;
	   }
	   ?>
	   <?php echo $page_count;?> </font>页 记录：<font class="#ff0000"><?php echo $message_count;?> </font>条&nbsp; </td>
        <td width="39%" class="#ff0000"> 分页：
      
<a href='index.php?lmbs=<?php echo urlencode('用户管理');?>&page=1'>首页</a>
<?php
		if($page >= 2){
?>
			<a href="index.php?lmbs=<?php echo urlencode('用户管理');?>&page=<?php echo $page-1;?>">上一页</a>
<?php
		
		}
		if($page < $page_count){
?>
			<a href="index.php?lmbs=<?php echo urlencode('用户管理');?>&page=<?php echo $page+1;?>">下一页</a>
<?php
		}
		if($page >= $page_count){		
?>
			<a href="index.php?lmbs=<?php echo urlencode('用户管理');?>&page=<?php echo $page_count;?>">尾页</a>
            <?php 
		}
			?>
        </td>
      </tr>
    </table>
	
</td>
  </tr>
</table>
<?php 
	}
?>