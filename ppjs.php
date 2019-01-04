
<?php 
include("config.php");
header("content-type:text-html;charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>品牌介绍</title>
<link href="css/ppjs.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/wzsy_menu.css" rel="stylesheet" type="text/css" />

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

	<div class="content">
    	<div id="content-1"><span style="font:40px bold;padding:8px 150px;font-family:'Comic Sans MS', cursive;">品牌介绍---傣妹火锅</span>
        </div>
       <div class="content-3"><span style="float:left;font:36px bold;padding:10px 0px;font-family:'Lucida Console', Monaco, monospace;">一</span>
        	
           <?php
			$result=mysqli_query($conn,"select * from ppjs");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i<=2){		
				$i++;
		?>	          
		   <div class="text">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $myrow['p_wen'];?> </div>
	<?php
			}
		}
		?>
           
        <div class="img2"><img src="images/pp.2.jpg" /></div>
        
    				<?php
			$result=mysqli_query($conn,"select * from ppjs");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				$i++;
				if($i==4){		
					
		?>	          
		  <div class="text">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $myrow['p_wen'];?> </div>
	<?php
			}
		}
		?>
         
        </div>
    </div>
</div>
	<div class="footer">
    	<div class="footer-1" >欢迎访问本网站，为了您的体验和使用，请使用IE7以上浏览器，谢谢。<br />版权所有@傣妹火锅
        
        </div>
        <div class="footer-2">
        	<img src="images/2.png" />
        </div>
    </div>

</div>

</body>
</html>