<?php 
//session_start();
include("config.php");
header("content-type:text/html;charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>傣妹火锅-首页</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/wzsy.css" rel="stylesheet" type="text/css">
<link href="css/wzsy_menu.css"  rel="stylesheet" type="text/css">
<script type="text/javascript" src="script/jquery.js"></script>
<style type="text/css">
.textbgcolor{
	background:#FFC;	
}
.h5bgcolor{
	background:	Burlywood1;
	font-size:30px;
	font-weight:100;
}
 a{
    color:	DarkOliveGreen;
		  }
</style>
<script type="text/javascript">

        $(function () {
            var container = $('.container');
            var list = $('.list');
            var buttons = $('.buttons span');
            var prev = $('#prev');
            var next = $('#next');
            var index = 1;
            var len = 4;
            var interval = 3000;
            var timer;


            function animate (offset) {
                var left = parseInt(list.css('left')) + offset;
                if (offset>0) {
                    offset = '+=' + offset;
                }
                else {
                    offset = '-=' + Math.abs(offset);
                }
                list.animate({'left': offset}, 300, function () {
                    if(left > -200){
                        list.css('left', -1180 * len);
                    }
                    if(left < (-1180 * len)) {
                        list.css('left', -1180);
                    }
                });
            }

            function showButton() {
                buttons.eq(index-1).addClass('on').siblings().removeClass('on');
            }

            function play() {
                timer = setTimeout(function () {
                    next.trigger('click');
                    play();
                }, interval);
            }
			
            function stop() {
                clearTimeout(timer);
            }

            next.bind('click', function () {
                if (list.is(':animated')) {
                    return;
                }
                if (index == 4) {
                    index = 1;
                }
                else {
                    index += 1;
                }
                animate(-1180);
                showButton();
            });

            prev.bind('click', function () {
                if (list.is(':animated')) {
                    return;
                }
                if (index == 1) {
                    index = 4;
                }
                else {
                    index -= 1;
                }
                animate(1180);
                showButton();
            });

            buttons.each(function () {
                 $(this).bind('click', function () {
                     if (list.is(':animated') || $(this).attr('class')=='on') {
                         return;
                     }
                     var myIndex = parseInt($(this).attr('index'));
                     var offset = -1180 * (myIndex - index);

                     animate(offset);
                     index = myIndex;
                     showButton();
                 })
            });

            container.hover(stop, play);
            play();

        });
   </script>
   <script language="javascript">
   	$(function(){
		$(".saucetip").mouseover(function(){
			$(this).addClass("textbgcolor");
			}).mouseout(function(){
			$(this).removeClass("textbgcolor");
				});
    	$(".spec_food_2").mouseover(function(){
			$(this).addClass("textbgcolor");
			}).mouseout(function(){
			$(this).removeClass("textbgcolor");
				});
	 	$("h5").mouseover(function(){
			$(this).addClass("h5bgcolor");
			}).mouseout(function(){
			$(this).removeClass("h5bgcolor");
				});
		})
   </script>
</head>

<body>
	<div class="main">
   	  <div class="header">   
        <span><img src="images/logo.png">   </span>
        <div class="header_right">
       <a href="admin/admin.php" style="color:red;">后台登录</a></div>
     <div class="music">
     <embed src="music/太田美知彦 - 万里の長城.mp3" height="0" width="100px"></embed></div>
       
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
  
   
  <div class="container">
    <div class="list" style="left: -1180px;">
        <img src="images/img_show_1.gif" alt="1">
        <img src="images/img_show_1.gif" alt="1">
        <img src="images/img_show_7.gif" alt="2"/>
        <img src="images/img_show_5.jpg" alt="3"/>
        <img src="images/img_show_6.jpg" alt="4"/> 
        <img src="images/img_show_6.jpg" alt="4"/>  
    </div>
    <div class="buttons">
        <span index="1" class="on"></span>
        <span index="2"></span>
        <span index="3"></span>
        <span index="4"></span>
    </div>
    <a href="javascript:;" id="prev" class="arrow">&lt;</a>
    <a href="javascript:;" id="next" class="arrow">&gt;</a>
</div>
     <div class="center">
		<div class="spec_food">
 			<h5><a href="spec_food.php" style="color:DarkOliveGreen;">特色菜单</a></h5><br /> 
			
	
		<?php
			$result=mysqli_query($conn,"select * from con_meat");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i==1){		
					$i++;
		?>	
		
           <div class="spec_food_1"><a href="content/con_Meat.php"><img src="admin/<?php echo $myrow['m_pic'];?>"/></div>
           <div class="spec_food_2">肉类-- <?php echo $myrow['m_name'];?><br>
           <?php echo substr($myrow['m_content'],0,108)."......";?></div></a>
		   
		 <?php
			}
		}
		?> 
		
		<?php
			$result=mysqli_query($conn,"select * from con_vegetable");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i==1){		
					$i++;
		?>	
		   
            <div class="spec_food_1"><a href="content/con_Vegetable.php"><img src="admin/<?php echo $myrow['v_pic'];?>"/></div>
           <div class="spec_food_2">蔬菜类--<?php echo $myrow['v_name'];?><br>
		   <?php echo substr($myrow['v_content'],0,104)."......";?>
			</div></a>
			
		<?php
			}
		}
		?>
		
		<?php
			$result=mysqli_query($conn,"select * from con_drink");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i==1){		
					$i++;
		?>	
		
            <div class="spec_food_1"><a href="content/con_Drink.php"><img src="admin/<?php echo $myrow['d_pic'];?>"/></div>
           <div class="spec_food_2">特色饮品--<?php echo $myrow['d_name'];?><br>
		   <?php echo substr($myrow['d_content'],0,109)."......";?>
			</div></a>
			
		<?php
			}
		} 
		?>
		
		<?php
			$result=mysqli_query($conn,"select * from con_special");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i==1){		
					$i++;
		?>	
		
			
            <div class="spec_food_1"><a href="content/con_Special.php"><img src="admin/<?php echo $myrow['s_pic'];?>"/></div>
           <div class="spec_food_2" style="color:#000;">特色菜--<?php echo $myrow['s_name'];?><br>
		   <?php echo substr($myrow['s_content'],0,108)."......";?>
		   </div></a>
		 		
		<?php
			}
		}
		?>
			</div>

	   
	   
	   
    <div class="hgqy">
  <h5><a href="hgqy.php" style="color:	DarkOliveGreen;">火锅前沿</a></h5>
    <div class="hgqy_text">冰激凌火锅全新上市</div>
    <div class="img1"><a href="hgqy.php"><img src="images/19.jpg" /></a></div>&nbsp;&nbsp;
     <div class="img1"><a href="hgqy.php"><img src="images/20.jpg" /></a></div>
   </div>
   
   	<div class="store_show">
          <h5>分店风采</h5><br>
       <img src="images/25.gif" /> 
       <img src="images/23.gif" />
       <img src="images/24.jpg" />
   </div>
      
         <div class="sauce">
           <h5><a href="mzjl.php" style="color:	DarkOliveGreen;">独家秘制酱料</a></h5>
            <p><img src="images/26.gif"></p>
          
          <div class="sauce_img">
            <img src="images/33.gif">
          </div>
          <div class="sauce_text">
             四种独家酱料配方<br>任你选选择<br>总有一款适合你
          </div>
         </div>
  <div class="link">
  <h5>友情链接</h5>
    <br /><a href="http://www.haidilao.com/">1、海底捞官网</a><br>
    <br><a href="http://www.meishichina.com/">2、美食天下</a><br>
    <br><a href="http://www.daimeihuoguo.net/">3、傣妹官网</a><br> 
     <br><a href="http://huoguo.zonglai.mobi/index/huoguo2.html">4、中国火锅网</a><br>
 	 <br><a href="http://www.6eat.com/">5、中国吃网</a><br>
 
 
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