<?php 
session_start();
include("config.php");
header("content-type:text/html;charset=utf-8");	
if(!isset($_SESSION['u_name']) && !isset($_SESSION['u_pass'])){
	echo "请先登录,才可以发布主题!!";
	echo "<meta http-equiv=\"Refresh\" content=\"2;url=wzsy_3.php\">";
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户反馈</title>
<link href="css/wzsy_menu.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/yhfk.css" rel="stylesheet">
<script language="JavaScript">
			function limit(){
				var tx=document.getElementById("txt").value;
			     var txtlen=tx.length;
						if(txtlen>300){
						alert("输入文字不能超过300字");
						return false;
			    }
				return true;
			}
			function note(){
				 var tx1=document.form.txt.value;
			     var txtlen1=tx1.length;
			     var listlen=299-txtlen1;
			     document.form.nums.value=listlen;
			     if(listlen==0){
			     	alert("您已经输入300字了,请不要再输入");
			     	return false;
			     }
			     //document.write(100-txtlen1);
			}
	   
		</script>
</head>

<body>
	<div class="main">
	 <div class="header">   
        <span><img src="images/logo.png">   </span> 
        <div id="menu_wrap">    
      	<div id="nav">
         <ul class="nav-menu clearfix unstyled">
		<li><a href="wzsy_3.php" class="three-d">
             首页
				<span class="three-d-box"><span class="front">首页</span><span class="back">首页</span></span>
			</a></li>
              <li><a href="ppjs.php" class="three-d">
            品牌介绍
				<span class="three-d-box"><span class="front"> 品牌介绍</span><span class="back">  品牌介绍</span></span>
			</a></li>
			<li><a href="spec_food.php" class="three-d">
				特色菜单
				<span class="three-d-box"><span class="front">特色菜单</span><span class="back">特色菜单</span></span></a>
				<ul class="clearfix unstyled drop-menu">
					<li><a href="content/con_Meat.php" class="three-d">
							肉类
							<span class="three-d-box"><span class="front">肉类</span><span class="back">肉类</span></span>
					</a></li>
					<li><a href="content/con_Vegetable.php" class="three-d">
						素食
						<span class="three-d-box"><span class="front">素食</span><span class="back">素食</span></span>
					</a></li>
					<li><a href="content/con_Special.php" class="three-d">
						特色菜品
						<span class="three-d-box"><span class="front">特色菜品</span><span class="back">特色菜品</span></span>
					</a></li>
					<li><a href="content/con_Drink.php" class="three-d">
						酒水
						<span class="three-d-box"><span class="front">酒水</span><span class="back">酒水</span></span>
					</a></li>
				</ul>
              
			</li>
			<li><a href="hgqy.php" class="three-d">
			   火锅前沿
				<span class="three-d-box"><span class="front">火锅前沿</span><span class="back">火锅前沿</span></span>
			</a></li>
      <li><a href="yhfk.php" class="three-d">
        用户反馈
        <span class="three-d-box"><span class="front">用户反馈</span><span class="back">用户反馈</span></span>
      </a></li>
    
       <li><a href="gywm1.php" class="three-d">
      关于我们
        <span class="three-d-box"><span class="front">关于我们</span><span class="back">关于我们</span></span>
        </a></li>
      <li><a href="#" class="three-d">
      注册登录
        <span class="three-d-box"><span class="front">注册登录</span><span class="back">注册登录</span></span>
     </a>
     	  <ul class="clearfix unstyled drop-menu">
		<li><a href="zhuce.php" class="three-d">
					注册
				<span class="three-d-box"><span class="front">注册</span><span class="back">注册</span></span>
					</a></li>
					<?php
					include "dljm.php";
					?>

					<li><a href="javascript:openme()" class="three-d">
						登录
						<span class="three-d-box"><span class="front">登录</span><span class="back">登录</span></span>
					</a></li>
			</ul>  
          </li>
       </ul>
	  </div>
	</div>
</div> 

		<div class="center">
            <div class="message">
            	<div class="message_head">给我留言</div><br>
                  <tr>
    <td width="455">&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['u_name'];?>已登录,欢迎您发表评论!!</td>
    <td width="80" height="25" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="zx_ok.php" style="color:blue">注销登录!</a></td>
  </tr>
                   <form name="form" onsubmit="return limit(this)" method="post" action="yhfk_ok.php">
                     <div class="mess_right">
                       留言主题:<input type="text" id="topic" class="name" name="zt" required="required"><span class="star">*</span><br><br>
                  
                        <textarea name="pj"  id="txt" size="1000" required="required" onkeydown="note(this)" onfocus="this.value=''; this.onfocus=null;">
请留下您的想法(但注意不要超过300字...)</textarea><span class="star">*</span><br>
                            <span class="smalltext">您还可以输入<input type="text" name="nums" size="4" class="tip">字</span>
                    </div>
             <div class="submit">
                  <input type="submit" value="提交留言"  name="submit">&nbsp;&nbsp;
                  <input type="reset" value="重置留言" name="reset"><br><br>
                  
            </div>
             </form>
           </div>
             <div class="message_show">
        	  <div class="message_show_box">
            	谁给我留了言<br>
                	<div class="more"><a href="yhfk_more.php">more&gt;&gt;</a></div><hr>
					
					
					
		<?php
			$result=mysqli_query($conn,"select * from lypl where l_flag=1");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i<=3){		
					$i++;
		?>	
		
		
                     <div class="user_message">
                       <div class="txt_1">用户xxxx发表留言</div> 
					   <div class="time"><?php echo $myrow['fbsj'];?></div> 
                      
                    <div class="txt_3">&nbsp;&nbsp;&nbsp;留言主题:<?php echo $myrow['zt'];?></div>
                      <br /><div class="txt_4"><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $myrow['pj'];?></div>
                    </div>
         
		   
		 <?php
			}
		}
		?> 
            </div>
         </div>
       </div>
      
        
      <div class="buttoms"><br>		
		 <div class="tip">欢迎访问本网站，为您的体验和使用，请使用IE7以上版本浏览器，谢谢。<br>  
          版权所有@傣妹火锅</div>
         <div class="logn"><img src="images/2.png"></div>
	  </div>
   </div>

</body>
</html>
<?php 
}
?>