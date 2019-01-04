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

<table width="690" border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="90" height="40">&nbsp;</td>
    <td align="center" class="style4">评论管理</td>
    <td width="90">&nbsp;</td>
    <td width="110">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="70">&nbsp;</td>
 </tr>
 
  <tr align="center" >
    <td width="10%" height="40" class="style4">主 题</td>
    <td colspan="3" class="style4" >评论</td>
	<td width="10%"class="style4">发布时间</td>
    <td width="15%" class="style4" >状 态</td>
    <td width="10%" class="style4">审 核</td>
    <td class="style4">是否删除</td>
  </tr>
  
 
  <?php 
       $page_size=6;
       $query="select * from lypl where l_id";
	   $result=mysqli_query($conn,$query);
	   $message_count=mysqli_num_rows($result);
	   $page_count=ceil($message_count/$page_size);
	   $offset=($page-1)*$page_size;
	   $query="select * from lypl where l_id order by l_id desc limit $offset,$page_size";
	   $result=mysqli_query($conn,$query);
	   if($result){
	   while($myrow=mysqli_fetch_array($result)){
  ?>
  <tr align="center" onMouseDown="this.bgColor='#C4E1FF'" onMouseOut="this.bgColor='#FFE1E1'" onMouseMove="this.bgColor='#DDFFFF'">
    <td height="30"><span class="style3"><?php echo $myrow['zt'];?></span></td>
    <td class="style5" colspan="3"><?php echo $myrow['pj'];?></td>
    <td class="style5"><?php echo $myrow['fbsj'];?></td>
	<form name="ztupdate" action="check.php" method="post">
	<td style="display: none;"><input type="text" name="id" value="<?php echo $myrow['l_id']?>" ></td>
	<td class="style3">	
			<select name="check">
				<option value="1" <?php if($myrow['l_flag']==1){ echo "selected"; } ?> >通过</option>
				<option value="0" <?php if($myrow['l_flag']==0){ echo "selected"; } ?>>不通过</option>
			<lect>
		
	</td>
    <td class="style2"><input type="submit" name="submit" value="修改"></td>
	</form> 
    <td class="style5"><a href="delete.php?lmbs=<?php echo urlencode('评论管理');?>&l_id=<?php echo $myrow['l_id'];?>" class="style5">删除</a></td>
  </tr>
  <?php }}?>
  <tr>
    <td height="30" colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
           
           
<a href='index.php?lmbs=评论管理&page=1'>首页</a>
<?php
		if($page >= 2){
?>
			<a href="index.php?lmbs=评论管理&page=<?php echo $page-1;?>">上一页</a>
<?php
		
		}
		if($page < $page_count){
?>
			<a href="index.php?lmbs=评论管理&page=<?php echo $page+1;?>">下一页</a>
<?php
		}
		if($page >= $page_count){		
?>
			<a href="index.php?lmbs=评论管理&page=<?php echo $page_count;?>">尾页</a>
            <?php 
		}
			?>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
<?php 
}else{
	echo "<meta http-equiv=\"Refresh\" content=\"2;url=admin.php\">";
	echo "<a href=\"admin.php\">这里</a>";
}
?>