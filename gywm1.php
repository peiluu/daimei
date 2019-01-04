<?php 
include("config.php");
header("content-type:text-html;charset=utf-8");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>关于我们</title>
</head>
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
		 function show_aboutus(){
		  $("#table_aboutus").css("display","block");
		  $("#table_culture").css("display","none");
		  $("#table_concept").css("display","none");
		  $("#table_legend").css("display","none");
		  $("#table_contact").css("display","none");
		}
		
	    function show_culture(){
		  $("#table_aboutus").css("display","none");
		  $("#table_culture").css("display","block");
		  $("#table_concept").css("display","none");
		  $("#table_legend").css("display","none");
		  $("#table_contact").css("display","none");
		}
		
		function show_concept(){
		$("#table_aboutus").css("display","none");
		 $("#table_culture").css("display","none");
		  $("#table_concept").css("display","block");
		  $("#table_legend").css("display","none");
		  $("#table_contact").css("display","none");
		}
			
	   function show_legend(){
		     $("#table_aboutus").css("display","none");
	      $("#table_culture").css("display","none");
		  $("#table_concept").css("display","none");
		  $("#table_legend").css("display","block");
		  $("#table_contact").css("display","none");
		}
		 function show_contact(){
		$("#table_aboutus").css("display","none");
	    $("#table_culture").css("display","none");
		  $("#table_concept").css("display","none");
		  $("#table_legend").css("display","none");
		  $("#table_contact").css("display","block");
		 }
</script>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/wzsy_menu.css" rel="stylesheet" type="text/css" />
<link href="css/gywm.css" rel="stylesheet" type="text/css" />

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
		<div class="left">
    		
        		<div class="left-menu">
            		
                		<ul>
                    		<li><a href="javascript:show_aboutus()"><span class="text1">关于我们</span></a></li>
                        	<li><a href="javascript:show_culture()"><span class="text1">企业文化</span></a></li>
                        	<li><a href="javascript:show_concept()"><span class="text1">发展理念</span></a></li>
                        	<li><a href="javascript:show_legend()"><span class="text1">傣妹传说</span></a></li>
                        	<li><a href="javascript:show_contact()"><span class="text1">联系我们</span></a></li>
                    	</ul>
                    
           	 	</div>
        	
        	
    	</div>
        
         <div class="right" id="table_aboutus" style="display:block">
        	<div class="right-top">
            	<div class="right-top-1"><span style="float:left;font:30px bold;padding:0px 5px;font-family:'Comic Sans MS', cursive;" >About Us</span></div>
                <div class="right-top-2">当前位置<<关于傣妹<<关于我们 </div>
            </div>
            
              <div class="medium-1">
            	<div class="aboutus-1" >
            	<p class="aboutus_text">
                <span style="font:22px bold;font-family:'黑体'; color:#666">傣妹火锅广告语</span>：
				<?php
			$result=mysqli_query($conn,"select * from gywm");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i==1){		
					$i++;
		?>	          
		   <?php echo $myrow['g_ad'];?>
	<?php
			}
		}
		?> <br /><br>
            	<span style="font:22px bold;font-family:'黑体'; color:#666">傣妹火锅火锅饮食文化</span>:
				<?php
			$result=mysqli_query($conn,"select * from gywm");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i==1){		
					$i++;
		?>	          
		   <?php echo $myrow['g_cul'];?>
	<?php
			}
		}
		?>
            	</div>
                <div class="aboutus_img">
                	<img src="images/gy4.jpg" />
                </div>
                <div class="aboutus-2">
                <p class="aboutus_text"><span style="font:22px bold;font-family:'黑体'; color:#666">傣妹火锅经营理念</span>：
				<?php
			$result=mysqli_query($conn,"select * from gywm");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i==1){		
					$i++;
		?>	          
		   <?php echo $myrow['g_con'];?>
	<?php
			}
		}
		?>
             </p>
                </div>
               </div>
        </div>
        
        
        <div class="right" id="table_culture" style="display:none">
        	<div class="right-top">
            	<div class="right-top-1"><span style="float:left;font:30px bold;padding:0px 5px;font-family:'Comic Sans MS', cursive;" >Our Culture</span></div>
                <div class="right-top-2">当前位置<<关于傣妹<<企业文化 </div>
            </div>
            
            <div class="medium-2"></div>
        </div>
        
        
        
        <div class="right" id="table_concept" style="display:none;">
        	<div class="right-top">
            	<div class="right-top-1"><span style="float:left;font:30px bold;padding:0px 5px;font-family:'Comic Sans MS', cursive;" >Our Concept</span></div>
                <div class="right-top-2">当前位置<<关于傣妹<<发展理念 </div>
            </div>
            
            <div class="medium-3">
             <div class="medium_img"><img src="images/24.jpg" /></div>
            	<div class="text">&nbsp;&nbsp;&nbsp;
                <?php
			$result=mysqli_query($conn,"select * from fzln");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i==1){		
					$i++;
		?>	          
		   <?php echo $myrow['fz_content'];?>
	<?php
			}
		}
		?> <br />
                
                
                
                
                </div>
			
            	
           
        <div class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <?php
			$result=mysqli_query($conn,"select * from fzln");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i=2){		
					$i++;
		?>	          
		   <?php echo $myrow['fz_content'];?>
	<?php
			}
		}
		?> <br />
        
        
        
        
        </div>
</p></div>
        </div>
        
        
         <div class="right" id="table_legend" style="display:none;">
        	<div class="right-top">                
            	<div class="right-top-1"><span style="float:left;font:30px bold;padding:0px 5px;font-family:'Comic Sans MS', cursive;" >Legend Of 傣妹</span></div>
                <div class="right-top-2">当前位置<<关于傣妹<<傣妹传说 </div>
            </div>
            
            <div class="medium-4">
            	
               		<div class="legend_center-1">
                      <?php
			$result=mysqli_query($conn,"select * from dmcs");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i==1){		
					$i++;
		?>	          
		   <?php echo $myrow['dm_content'];?>
	<?php
			}
		}
		?>  
                    
                    <br /></div>
                <div class="legend_center-2">
                    <p class="legend_text">&nbsp;&nbsp;&nbsp;&nbsp;
                    
                              <?php
			$result=mysqli_query($conn,"select * from dmcs");
			$i=1;
			while($myrow=mysqli_fetch_array($result))
			{
				if($i=2){		
					$i++;
		?>	          
		   <?php echo $myrow['dm_content'];?>
	<?php
			}
		}
		?>  
           </span></p></div>
                   
                    
                    <div class="legend_img">
                    	<img src="images/dai1.jpg" />
                    </div>
                    
                    
                    
                   
                    
            </div>
        </div>
        
        
           <div class="right" id="table_contact" style="display:none;">
        	<div class="right-top">
            	<div class="right-top-1"><span style="float:left;font:30px bold;padding:0px 5px;font-family:'Comic Sans MS', cursive;" >Contact Us</span></div>
                <div class="right-top-2">当前位置<<关于傣妹<<联系我们 </div>
            </div>
            
            <div class="medium-5">
           		<div class="medium-top">
                	<table border="0" width="100%" id="table1" cellpadding="0" cellspacing="0">
                    	<tr>
                        	<th scope="col" width="20%"><span>门店</span></th>
                            <th scope="col" width="50%"><span>地址</span></th>
                            <th scope="col" width="30%"><span>联系方式</span></th>
                        </tr>
                        <tr class="xiangxin">
                        	<td><span class="dianpu">基建营店</span></td>
                            <td><span class="address">雨湖区车站路198号粮贸大楼4楼</span></td>
                            <td><span class="tel">0731-5825-7297</span></td>
                        </tr>
                         <tr class="xiangxin">
                        	<td><span class="dianpu">潭城店</span></td>
                            <td><span class="address">雨湖区车站路潭城大厦3楼</span></td>
                            <td><span class="tel">0731-58533355</span></td>
                        </tr>
                         <tr class="xiangxin">
                        	<td><span class="dianpu">步行街店</span></td>
                            <td><span class="address">天心区黄兴路步行街262号2楼</span></td>
                            <td><span class="tel">0731-8536-1148</span></td>
                         </tr>
                    </table>
                </div>
                
                <div class="medium-down">
                	<div class="medium-down-left">
                    	<div class="left_center">
                        	<p>所属公司：上海傣妹品牌管理有限公司<br />
                             总部地址：上海皇甫区北海路8号福申大厦<br />
                             邮编：411100<br />
                             咨询热线：0731-5825-7297<br />
                             公司网址：<a href="http://www.daimeihuoguo.net">http://www.daimeihuoguo.net</a></p>
                        </div>
                    </div>
                    <div class="medium-down-right">
                    	<div class="dt"><img src="images/dt.JPG" /></div>
                    </div>
                </div>
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