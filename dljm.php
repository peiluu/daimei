<?php
if(!isset($_SESSION['u_name']) && !isset($_SESSION['u_pass'])){
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">

#div1 {	
display: none;
position: absolute;
z-index: 1000;
height: 100%;
width: 100%;

}
#div2 {
display: none;
position: absolute;
height: 100%;
width: 100%;
padding-top: 10%;
z-index: 1002;
left: -160px;
top: 100px;
background:#C90
}

<!--a:link {
	color: #FF0000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.style6 {font-size:16px; font-family: "宋体"; font-weight:bold;color:white;} 
#u_name{
	width:158px;
	height:26px;
}
#u_pass{
	width:158px;
	height:26px;
}
-->
</style>
<script>
function openme(){
document.getElementById('div1').style.display='block';
document.getElementById('div2').style.display='block';
}
function closeme(){
document.getElementById('div1').style.display='none';
document.getElementById('div2').style.display='none';
}

</script>

<div id="div1"></div>
<div id="div2">
<table width="268" height="180" border="0" cellpadding="0" cellspacing="0" style="border-radius:28px;" align="center" background="img/head.jpg">
<tr>
<td width="80" ></td>
<td align="right"><input type="button" value="ｘ" onClick="closeme()" style="cursor: hand;"></td>
</tr>

  <form action="dl_ok.php" method="post" name="dlform">
    <tr>
      <td  align="left"><span class="style6">用户名:</span></td>
      <td><input name="u_name" type="text" id="u_name" ></td>
	</tr> 
	<tr>	
      <td align="left"><span class="style6">密&nbsp;&nbsp;码:</span></td>
      <td><input name="u_pass" type="password" id="u_pass"  /></td>
	 </tr> 
	 <tr>
     <td><input name="imageField" type="submit" value="登录"  /> 
	<input type="button" name="exit" value="取消" onClick="closeme()">	</td>
    </tr>
  </form>
<!--<tr>
<form action="dl_ok.php" method="post" name="dlform" >
<td colspan="2" width="100%"  height="150">
用户名: <input type="text" name="u_name" size="10">
<br>密码:<input type="password" name="u_pass" size="12">
<br><input name="imageField" type="image" src="img/denglu.gif" width="45" height="19" border="0">
<input type="button" name="exit" value="取消" onClick="closeme()">
</td>
</form>
</tr>-->
</table>
</div>
					<!--<div>
<a href="javascript:openme()">登录</a>
</div>-->

<?php
}else{
?>
<table width="776" height="25" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="455">&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['u_name'];?>已登录,欢迎您发表评论和回复主题!!</td>
    <td width="80" height="25" align="center"><a href="zx_ok.php">注销登录!</a></td>
  </tr>
</table>
<?php
}
?>