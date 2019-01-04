<?php 
//session_start();
include("config.php");
header("content-type:text/html;charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全部留言</title>
<link rel="stylesheet" href="css/yhfk.css">
</head>

<body>
    <div class="main">
            <h2>全部留言&gt;&gt;</h2>
       <div class="message_show">
        	  <div class="message_show_box">

        <?php
		
		$pagesize=5;
		$sqlstr="select * from lypl where l_flag=1";
		$total=mysqli_query($conn,$sqlstr);
		$totalNum=mysqli_num_rows($total);
		$pagecount=ceil($totalNum/$pagesize);
	   
	   (!isset($_GET['page']))?($page=1):$page=$_GET['page'];
	   ($page<=$pagecount)?$page:($page=$pagecount);
	   $f_pageNum=$pagesize*($page-1);
	   $sqlstr1=$sqlstr." limit ".$f_pageNum.",".$pagesize;
	   
		$result=mysqli_query($conn,$sqlstr1);
			while($myrow=mysqli_fetch_array($result))
			{
				
		?>	
				
                     <div class="user_message1" style="border:1px solid black">
                       <div class="txt_1">用户xxxx发表于</div>
					   <div class="time"><?php echo $myrow['fbsj'];?></div> 
                     
                   <div class="txt_3"> &nbsp;&nbsp;&nbsp;留言主题:<?php echo $myrow['zt'];?></div>
                    <br><div class="txt_4">留言内容<br>&nbsp;&nbsp;&nbsp;<?php echo $myrow['pj'];?></div>
                    </div>
         
		   
		 <?php
			}	
		?> 
		
      
            </div>
         </div>
		 <div>
<?php
echo "共".$totalNum."条留言&nbsp;&nbsp;";

echo "第".$page."页/共".$pagecount."页&nbsp;&nbsp;";
if($page!=1)												//如果当前不是第一页，则输出有链接的上一页和首页
{
	echo "<a href='?page=1'>首页</a>&nbsp;";
	echo "<a href='?page=".($page-1)."'>上一页</a>&nbsp;&nbsp;";	
}
else{
	echo "首页&nbsp;上一页&nbsp;&nbsp;";
}

if($page!=$pagecount)
{
	echo "<a href='?page=".($page+1)."'>下一页</a>&nbsp;";	             //如果当前不是最后一页，则输出有链接的下一页和尾页
	echo "<a href='?page=".$pagecount."'>尾页</a>&nbsp;&nbsp;";	
}
else{
	echo "下一页&nbsp;尾页&nbsp;&nbsp;";   //否则输出没有链接的下一页和尾页
}
?>
</div>
       
    </div>
</body>
</html>