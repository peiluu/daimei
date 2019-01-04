<?php 
//session_start();
include("config.php");
header("content-type:text/html;charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>特色菜单</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/wzsy_menu.css"  rel="stylesheet" type="text/css">
<script type="text/javascript" src="script/jquery.js"></script>
<style type="text/css">
	.main{
		width:1180px;
		border:1px solid black;
		}
	.center{
		width:1179px;
		height:700px;
		border:1px solid black;
		margin:0 auto;
		background:#FFFFF0;
		}

	.center h2{
		font-size:40px;
		text-align:center;
				}
	.center_1{
		width:588.5px;
		float:left;
		height:320px;
		border:1px solid #999;
		text-align:center;
		position:relative;
		border-left:none;
		border-bottom:none;
		
		}
	.center_1 .img{
		width:170px;
		height:200px;
		float:left;
		margin-left:11px;
		margin-top:1px;
		}
	.center_1 .img img{
		width:160px;
		height:190px;		
		}
	.center_1 .img img:hover{
		width:170px;
		height:200px;
		
		}
	.center_1 .name{
		width:170px;
		height:50px;
		float:left;
		padding-top:18px;
		margin-left:11px;
		font-size:20px;
		}
	
		
	.center_1 h5{
		padding-top:4px;
		font-size:22px;
		font-family:"Adobe 楷体 Std R";
		}
    .center .more{
		position:absolute;
		top:18px;
		right:10px;
		font-family:"Charlemagne Std";
		font-size:14px;
		
			}
	 .center .more:hover{
		 font-size:17px;
		 font-family:"Charlemagne Std";
		 color:red;	
		 }
</style>
</head>

<body>
	<div class="main">
   <div class="header">   
        <span><img src="images/logo.png"></span>
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
   		<h2>特色菜单</h2>
    	<div class="center_1">
        <h5>肉类展示区</h5><div class="more"><a href="content/con_Meat.php">More&gt;&gt;</a></div>
		
		
		<?php
			$result=mysqli_query($conn,"select * from con_meat");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i<=3){		
					$i++;
		?>	
		
           <div class="img"><img src="admin/<?php echo $myrow['m_pic'];?>"/></div>
		   
		 <?php
			}
		}
		?> 
		
		<?php
			$result=mysqli_query($conn,"select * from con_meat");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i<=3){		
					$i++;
		?>	
		
           <div class="name"><?php echo $myrow['m_name'];?></div>
		   
		 <?php
			}
		}
		?>          
        </div>

        <div class="center_1">
         	<h5>蔬菜展示区</h5><div class="more" style="color:red"><a href="content/con_Vegetable.php">More&gt;&gt;</a></div>
           	
		<?php
			$result=mysqli_query($conn,"select * from con_vegetable");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i<=3){		
					$i++;
		?>	
		
           <div class="img"><img src="admin/<?php echo $myrow['v_pic'];?>"/></div>
		   
		 <?php
			}
		}
		?> 
		
		<?php
			$result=mysqli_query($conn,"select * from con_vegetable");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i<=3){		
					$i++;
		?>	
		
           <div class="name"><?php echo $myrow['v_name'];?></div>
		   
		 <?php
			}
		}
		?> 
          
        </div>
				
        <div class="center_1">
        	<h5>酒水展示区</h5><div class="more"><a href="content/con_Drink.php">More&gt;&gt;</a></div>
       		
		<?php
			$result=mysqli_query($conn,"select * from con_drink");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i<=3){		
					$i++;
		?>	
		
           <div class="img"><img src="admin/<?php echo $myrow['d_pic'];?>"/></div>
		   
		 <?php
			}
		}
		?> 
		
		<?php
			$result=mysqli_query($conn,"select * from con_drink");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i<=3){		
					$i++;
		?>	
		
           <div class="name"><?php echo $myrow['d_name'];?></div>
		   
		 <?php
			}
		}
		?> 
          
        </div>
        <div class="center_1">
        <h5>特色菜展示区</h5><div class="more"><a href="content/con_Special.php">More&gt;&gt;</a></div>
        		
		<?php
			$result=mysqli_query($conn,"select * from con_special");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i<=3){		
					$i++;
		?>	
		
           <div class="img"><img src="admin/<?php echo $myrow['s_pic'];?>"/></div>
		   
		 <?php
			}
		}
		?> 
		
		<?php
			$result=mysqli_query($conn,"select * from con_special");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i<=3){		
					$i++;
		?>	
		
           <div class="name"><?php echo $myrow['s_name'];?></div>
		   
		 <?php
			}
		}
		?> 
          
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