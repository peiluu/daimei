<?php 
//session_start();
include("config.php");
header("content-type:text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/wzsy_menu.css">
    <link rel="stylesheet" href="css/hgqy.css">
    <script type="text/javascript" src="script/jquery.js"></script>
   <script language="javascript">
		 $("#meat").click(function(){
		 	alert("你好");
		 });
	function handleEvent(evt){
		var event=window.event?window.event:evt;
		
		var target=event.target?event.target:event.srcElement;
		
		for(var i=0;i<images.length;i++)
		{
			if(images[i]==target)
			break;
	
		}
			setTimeout(function (){go(i);},200);
			
			
	}
	

function go(i){
	
	document.getElementById("showpic").src=images[i].src;
	document.getElementById("show").style.display="";
	
	//var next=(i+1)%images.length;
	//var prev=(i-1+images.length)%images.length;    //图片循环播放
	var next=i+1;
	var prev=i-1;
	
	
	document.getElementById("prev").onclick=function()
	{
		/*if(prev==-1)
		{				
			alert("已是第一张！");			
		}*/
		setTimeout(function (){go(prev);},200);
	};
	document.getElementById("next").onclick=function()
	{	
		setTimeout(function (){go(next);},200);
		
		/*if(next==images.length)
		{			
			alert("已是最后一张！");			
		}*/
		
	};
	
	
}

function hide(){
document.getElementById("show").style.display="none";
}
	
//记录<img>对象的数组
var images=[];
//初始化处理事件函数
function init()
{
	var imgArr=document.getElementsByTagName("img");
	
	for(var i=0;i<imgArr.length;i++)
	{
		if(imgArr[i].className=="img")
		{
			images.push(imgArr[i]);
			addEventListener(imgArr[i],"mouseover",handleEvent);
		}
	}
}

function addEventListener(ele,type,func)
{
	if(ele.addEventListener){
	ele.addEventListener(type,func,false);
	}
	else{
	ele.attachEvent("on"+type,func);
	}
}
		</script>
   <script language="javascript">
    	$(function(){
		$(".text_large").mouseover(function(){
			$(this).addClass("textbgcolor");
			}).mouseout(function(){
			$(this).removeClass("textbgcolor");
				});
    	$(".text").mouseover(function(){
			$(this).addClass("textbgcolor");
			}).mouseout(function(){
			$(this).removeClass("textbgcolor");
				});
	 	$("h5").mouseover(function(){
			$(this).addClass("h5bgcolor");
			}).mouseout(function(){
			$(this).removeClass("h5bgcolor");
				});
    	$(".text").click(function(){
    		alert($(this).text());
    	})
				
		})
   </script>
	</head>
	<body onload="init()">
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
					<li>
							<div id="meat"> 肉类</div>
							<span class="three-d-box"><span class="front">肉类</span><span class="back">肉类</span></span>
					</li>
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
         	<div class="center_1">
                 <div class="media">
                  <br><embed src="music/冰激凌火锅.mp4" width="600px" height="500px" autostart="false" loop="false"></embed>
                 </div> 
                <div class="center_1_right">
                 <h3><span class="text"><br>冰淇淋火锅</span></h3><br>
                 <span class="text_large">组成</span><br>
                  &nbsp;&nbsp;    &nbsp;&nbsp;   &nbsp;&nbsp;	
		<?php
			$result=mysqli_query($conn,"select * from hgqy_con");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i==1){		
					$i++;
		?>	          
		   <?php echo $myrow['h_content'];?>
	<?php
			}
		}
		?><br><hr><br> 
                 </div>
		 </div> 
        	<div class="center_2">				
               <span class="text_large">吃法</span><br>
                  &nbsp;&nbsp;    &nbsp;&nbsp;   &nbsp;&nbsp; 
		<?php
			$result=mysqli_query($conn,"select * from hgqy_con");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				$i++;
				if($i==2){		
					
		?>	          
		   <?php echo $myrow['h_content'];?>
	<?php
			}
		}
		?><br><hr><br><br>
               <span class="text_large">讲究</span><br>
               &nbsp;&nbsp;    &nbsp;&nbsp;   &nbsp;&nbsp;
		<?php
			$result=mysqli_query($conn,"select * from hgqy_con");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				$i++;
				if($i==3){		
					
		?>	          
		   <?php echo $myrow['h_content'];?>
	<?php
			}
		}
		?>
			<div class="canju">
              <img src="images/hgqy/014.jpg">
             </div>
				<?php
			$result=mysqli_query($conn,"select * from hgqy_con");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				$i++;
				if($i==4){		
					
		?>	          
		   <?php echo $myrow['h_content'];?>
	<?php
			}
		}
		?>
           
         </div>
            <hr>
          <div class="gallery_box">
            <div class="gallery">
            	<!--<div class="imgindex" id="index">
                	<img src="images/hgqy/1.jpg">
             	    <img src="images/hgqy/2.jpg">
                    <img src="images/hgqy/3.jpg">
                    <img src="images/hgqy/4.jpg">
                    <img src="images/hgqy/12.jpg">
                    <img src="images/hgqy/6.jpg">
                    <img src="images/hgqy/7.jpg">
                    <img src="images/hgqy/8.jpg">
                    <img src="images/hgqy/9.jpg">
                    <img src="images/hgqy/10.jpg">
                </div>-->
				   	
		<?php
			$result=mysqli_query($conn,"select * from hgqy");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i<=10){		
					$i++;
		?>	
					
            <img class="img" src="admin/<?php echo $myrow['h_pic'];?>"/>
     		 		
		<?php
			}
		}
		?>
             	
       
	  
	 <div id="show" style="display:none">
		<img id="showpic" src="" alt="" onclick="hide()" />
<!--	<div>
		<span id="prev">prev</span>
		<span id="next">next</span>
	</div>
    -->
 	</div>
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
