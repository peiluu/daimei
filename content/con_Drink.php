<?php 
//session_start();
include("../config.php");
header("content-type:text/html;charset=utf-8");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="../css/con_drink.css" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/wzsy_menu.css"  rel="stylesheet" type="text/css">
<script src="../script/jquery.js"></script>
<script type="text/javascript" >

	$(function(){
	    var $div_li =$("div.tab_menu ul li");
	    $div_li.click(function(){
			$(this).addClass("selected")            
				   .siblings().removeClass("selected");  
            var index =  $div_li.index(this);  
			$("div.tab_box > div")   	
					.eq(index).show()   
					.siblings().hide();
		}).hover(function(){
			$(this).addClass("hover");
		},function(){
			$(this).removeClass("hover");
		})
	})


/*function show(){
var demo=document.getElementById("zone");
var imgs=zone.getElementsByTagName("img");
var ei=document.getElementById("showpic");

for(i=0;i<imgs.length;i++)
{
	var ts=imgs[i];
	ts.onmousemove=function(event){
		event=event||window.event;
		ei.style.display="block";
		
		ei.innerHTML='<img src="' +this.src+ '" style="width:300px;height:300px;" />';
		ei.style.top=document.body.scrollTop + event.clientY + 20 + "px";
		ei.style.left=document.body.scrollLeft + event.clientX + 20 + "px";
	}
	ts.onmouseout=function(){
		ei.innerHTML="";
		ei.style.display="none";
	}
	ts.onclick=function(){
		window.open(this.src);
	}
}
}
*/

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
	//var prev=(i-1+images.length)%images.length;    //ͼƬѭ������
	var next=i+1;
	var prev=i-1;
	
	
	document.getElementById("prev").onclick=function()
	{

		setTimeout(function (){go(prev);},200);
	};
	document.getElementById("next").onclick=function()
	{	
		setTimeout(function (){go(next);},200);
		
	
		
	};
	
	
}

function hide(){
document.getElementById("show").style.display="none";
}
	

var images=[];

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

</head>
<body onLoad="init()">
	<div class="main">
    	 <div class="header">   
        <span><img src="../images/logo.png">   </span>       
             <div id="menu_wrap">    
            <div id="nav">
             <ul class="nav-menu clearfix unstyled">
            <li><a href="../wzsy_3.php" class="three-d">
             首页
				<span class="three-d-box"><span class="front">首页</span><span class="back">首页</span></span>
			</a></li>
              <li><a href="../ppjs.php" class="three-d">
            品牌介绍
				<span class="three-d-box"><span class="front"> 品牌介绍</span><span class="back">  品牌介绍</span></span>
			</a></li>
			<li><a href="../spec_food.php" class="three-d">
				特色菜单
				<span class="three-d-box"><span class="front">特色菜单</span><span class="back">特色菜单</span></span></a>
				<ul class="clearfix unstyled drop-menu">
					<li><a href="con_Meat.php" class="three-d">
							肉类
							<span class="three-d-box"><span class="front">肉类</span><span class="back">肉类</span></span>
					</a></li>
					<li><a href="con_Vegetable.php" class="three-d">
						素食
						<span class="three-d-box"><span class="front">素食</span><span class="back">素食</span></span>
					</a></li>
					<li><a href="con_Special.php" class="three-d">
						特色菜品
						<span class="three-d-box"><span class="front">特色菜品</span><span class="back">特色菜品</span></span>
					</a></li>
					<li><a href="con_Drink.php" class="three-d">
						酒水
						<span class="three-d-box"><span class="front">酒水</span><span class="back">酒水</span></span>
					</a></li>
				</ul>
              
			</li>
			<li><a href="../hgqy.php" class="three-d">
			   火锅前沿
				<span class="three-d-box"><span class="front">火锅前沿</span><span class="back">火锅前沿</span></span>
			</a></li>
      <li><a href="../yhfk.php" class="three-d">
        用户反馈
        <span class="three-d-box"><span class="front">用户反馈</span><span class="back">用户反馈</span></span>
      </a></li>
    
       <li><a href="../gywm1.php" class="three-d">
      关于我们
        <span class="three-d-box"><span class="front">关于我们</span><span class="back">关于我们</span></span>
        </a></li>
      <li><a href="#" class="three-d">
      注册登录
        <span class="three-d-box"><span class="front">注册登录</span><span class="back">注册登录</span></span>
     </a>
     	  <ul class="clearfix unstyled drop-menu">
		<li><a href="../zhuce.php" class="three-d">
					注册
				<span class="three-d-box"><span class="front">注册</span><span class="back">注册</span></span>
					</a></li>
				
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

  <div class="spec_text_1">特色菜单--</div>
  <div class="spec_text_2">酒水类</div>
    <div class="tab">
	
        <div class="tab_menu">
		
		<form><a href="dingdan_D.php?">
        <div class="buy"><input type="button" value="订购" name="buy"></div></a></form>
            <ul>
            <?php
                $result=mysqli_query($conn,"select * from con_drink");
                $i=1;
                while($myrow=mysqli_fetch_array($result))
                {
                    
                    if($i==1){		
                        $i++;
            ?>
                <li class="selected"><?php echo $myrow['d_name'];?></li>
            <?php
            }
            else{
            ?>		
                <li><?php echo $myrow['d_name'];?></li>
            <?php
            }
                }
            ?>
    
            </ul>
        </div>
        <br><br><br>
        <div class="tab_box"> 
            
             <?php
                $result=mysqli_query($conn,"select * from con_drink");
                $i=1;
                while($myrow=mysqli_fetch_array($result))
                {
                    
                    
                    if($i==1){		
                        $i++;
            ?>
                <div><span class="style">名称:</span><?php echo $myrow['d_name'];?>
                <br><span class="style">价格:</span><?php echo $myrow['d_price'];?>&nbsp;&nbsp;<br>
				<span class="style">数量:</span><?php echo $myrow['d_num'];?>
                <br><span class="style">简介:</span><?php echo $myrow['d_content'];?>
                <div class="box"><img class="img" src="../admin/<?php echo $myrow['d_pic'];?>"/>				  
                </div>
				
                
                </div>
            <?php
            }
            else{
                ?>			
                <div class="hide"><span class="style">名称:</span><?php echo $myrow['d_name'];?>
                <br><span class="style">价格:</span><?php echo $myrow['d_price'];?>&nbsp;&nbsp;<br>
				<span class="style">数量:</span><?php echo $myrow['d_num'];?>
                <br><span class="style">简介:</span><?php echo $myrow['d_content'];?>
               
                <div class="box"><img class="img" src="../admin/<?php echo $myrow['d_pic'];?>"/>
                </div>	
			
		
                </div>
                
                <?php
            }
                }
            ?>
                
          </div>      
		</div>
       <div id="show" style="display:none">
            <img id="showpic" src="" alt="" onClick="hide()" />
             <div>
                <span id="prev">prev</span>
                <span id="next">next</span>
            </div>
        </div>
         <div class="buttoms"><br>		
		<div class="tip">迎观临本网站，为您的体验和使用，请使用IE7以上版本浏览器，谢谢。<br>  
      版权所有@xxxx火锅</div>
       <div class="logn"><img src="../images/2.png"></div>
		</div>
      </div>
       

</body>
</html>