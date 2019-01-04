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

#photo{
	width:100px;
	height:60px;
	}
</style>

<table width="690" border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="90" height="40">&nbsp;</td>
    <td colspan="3" align="center" class="style4">关于我们——about us</td>
</tr>
 
<tr align="center" >
    <td  height="30" class="style4">火锅广告语</td>
    <td  class="style4">火锅饮食文化</td>
	<td colspan="3" class="style4">经营理念</td>
    <td  class="style4">操作/<a href="gywm.php">增加</a></td>
</tr>
  
 
  <?php 
       $page_size=6;
       $query="select * from gywm where g_id";
	   $result=mysqli_query($conn,$query);
	   $message_count=mysqli_num_rows($result);
	   $page_count=ceil($message_count/$page_size);
	   
	   $offset=($page-1)*$page_size;
	   $query="select * from gywm where g_id order by g_id desc limit $offset,$page_size";
	   
	  /* $fileinfo = $_FILES['d_pic'];
    $path = './'.$_FILES['d_pic']['name'];
    move_uploaded_file($fileinfo['tmp_name'],$path);
    $data['d_pic'] = $path;*/

	//$sqlstr1="insert into tb_user2 values('$data[num]','$data[name]','$data[id]','$data[place]','$data[ttime]','$data[schoolname]','$data[class]','$data[img]')";
	
	
	
	   $result=mysqli_query($conn,$query);
	   if($result){
	   while($myrow=mysqli_fetch_array($result)){
  ?>
  <tr align="center" onMouseDown="this.bgColor='#C4E1FF'" onMouseOut="this.bgColor='#FFE1E1'" onMouseMove="this.bgColor='#DDFFFF'">
    <td height="30"><span class="style3"><?php echo $myrow['g_ad'];?></span></td>
    <td class="style5"><?php echo $myrow['g_cul'];?></td>
    <td class="style5"colspan="3"><?php echo $myrow['g_con'];?></td>
	

	
    <td class="style5">
	<a href="delete.php?lmbs=<?php echo urlencode('关于我们——about us');?>&g_id=<?php echo $myrow['g_id'];?>">删除</a>
	</td>
	
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
           
           
<a href='index.php?lmbs=菜单管理-meat&page=1'>首页</a>

<?php
		if($page >= 2){
?>
			<a href="index.php?lmbs=关于我们——about us&page=<?php echo $page-1;?>">上一页</a>
<?php
		
		}
		if($page < $page_count){
?>
			<a href="index.php?lmbs=关于我们——about us&page=<?php echo $page+1;?>">下一页</a>
<?php
		}
		if($page >= $page_count){		
?>
			<a href="index.php?lmbs=关于我们——about us&page=<?php echo $page_count;?>">尾页</a>
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