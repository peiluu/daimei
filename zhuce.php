<?php  
session_start();   
include "submit_checkuser.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="script/jquery.js"></script>
<title>用户注册</title>
<style type="text/css">

body {
	background-color:#FFFAF0;

	}
input{
	height:30px;
	}
.style0{
	font-size:30px;
}
.style1{
	font-size:18px;
	font-family:"Comic Sans MS", cursive;
	color:red;
	}
.style2 {
	font-size: 20px;
	font-family: "宋体";
		line-height:30px;
	
}
.style3{
	font-size: 20px;
	font-family: "宋体";
	font-weight: normal;
	padding-top:30px;

}

.style3 input {
	width:90px;
	height:30px;
	border-radius:5px;
	}
input:hover{
	border:1px solid #666;	
	background:#FFEFD5;
}-->
strong{
	color:red;}
</style>




<!--<script language="JavaScript" src="script/zhuce_check.js" type="text/javascript"></script>-->
</head>
<body>
<script language="javascript">
function validateForm()
{
	if(checkName()&&checkPassword()&&checkNumber())
	return true;
	else
	return false;
}

function checkName()
{
	var strName=document.zhuce.u_name.value;
	if(strName.length==0)
	{
		alert("用户名不能为空！");
		document.zhuce.u_name.focus();
		return false;
	}
	else
	{
		for(i=0;i<strName.length;i++)
		{
			var str1=strName.substring(i,i+1);
			if(!((str1>="0"&&str1<="9")||(str1>="a"&&str1<="z")||(str1=="_")))
			{
				alert("登录名中不能包含特殊字符！");
				document.zhuce.u_name.focus();   //把光标的焦点重新放到name=loginName这一控件上
				return false;
			}
		}
	}
	return true;
}

function checkPassword(){
	var password=document.zhuce.u_pass.value;
		
		if((password.length)==0)
		{
			alert("密码不能为空！");
			document.zhuce.u_pass.focus();
			
			return false;
		}
		else if(password.length<6)
		{
			alert("密码不能少于6位数！");
			document.zhuce.u_pass.focus();
			return false;
		}
		
	return true;
}

function checkNumber()
{
	var strNum=document.zhuce.u_pnumber.value;
	if(strNum.length==0)
	{
		alert("联系电话不能为空！");
		document.zhuce.u_pnumber.focus();
		return false;
	}
	else
	{
		for(i=0;i<strNum.length;i++)
		{
			var str1=strNum.substring(i,i+1);
			if(!(str1>="0"&&str1<="9"))
			{
				alert("联系电话中不能包含特殊字符！");
				document.zhuce.u_pnumber.focus();   
				return false;
			}
		}
	}
	return true;
}
</script>
<script>
 $(function(){
	   $("input:lt(2)").focus(function(){
		   $(this).addClass("focus");
	   }).blur(function(){
		   $(this).removeClass("focus");
	   }); 
   });
   
$(function(){
	
		   var $required=$("<strong>*</strong>");
		   $("input:lt(6)").parent().append($required);
	   
})
</script>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" backgroundcolor=>
  <tr>
    <td width="15">&nbsp;</td>
    <td width="760" height="60"><span class="style0">&nbsp;&nbsp;== 用户注册信息填写 == </span></td>
  </tr>
</table>
<table width="776"  border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        
        <td width="282" height="263" align="center" valign="top"><table width="88%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="55%" height="70">&nbsp;</td>
            <td width="45%">&nbsp;</td>
          </tr>
          <tr align="left" valign="top">
          <td height="355" colspan="2"><ul>
              <li class="style1"> 用 户 名：可使用英文字母、数字或英文字母、数字、下划线的组合，长度控制在6-20个字符之内。</li>
            
              <li class="style1">密码：请设定大于6位数。</li>
             
              <li class="style1">联系电话：请不要输入除0~9的其他字符 ,且长度为11位</li>
             
              <li class="style1">联系地址：请填写有效的地址，以便与您联系。</li>
            </ul>            
          <p class="style1">&nbsp; </p>
            </td>
          </tr>
        </table></td>
      
        <td width="470" align="center" valign="top">
		  <table width="88%"  border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate; border-spacing:0px 14px;" >
        <form name="zhuce" method="post" action="zc_ok.php" enctype="multipart/form-data" onsubmit="return validateForm()">
		  <!--<tr>
            <td width="55%" height="50">&nbsp;</td>
      
          </tr>-->
		  <tr>
		    <td width="18%" rowspan="2" align="center" valign="bottom"><span class="style2">用 户 名:</span></td>
		    <td height="16" valign="bottom"></td>
	      </tr>
		  <tr>
            <td height="16" valign="bottom"><input name="u_name" type="text" id="u_name" size="20" maxlength="20" value="" /> 
              </td>
          </tr>
		  
         
          <tr>
            <td height="28" align="center" class="style2">密&nbsp;&nbsp;&nbsp;&nbsp;码:</td>
            <td><input name="u_pass" type="password" id="u_pass" size="20" maxlength="30" />
              </td>
          </tr>
         
          <tr>
            <td height="28" align="center" class="style2">性&nbsp;&nbsp;&nbsp;&nbsp;别:</td>
            <td class="style2"><input name="u_sex" type="radio" value="男"/>男
              
                <input type="radio" name="u_sex" value="女">女
                </td>
          </tr>
         
          <tr>
            <td height="28" align="center" class="style2">联系电话:</td>
            <td><input name="u_pnumber" type="text" id="u_pnumber" size="15" maxlength="20"  required/>
              </td>
          </tr>
    
            <td height="28" align="center" class="style2">联系地址:</td>
            <td><input name="u_address" type="text" id="u_address" size="40" maxlength="100" />
            </td>
          </tr>
          <tr>
            <td height="34" align="center">&nbsp;</td><br>
          <td class="style3"><input name="qrtj" type="submit" id="qrtj" value="确认提交" />
              <input  name="Submit2" type="reset" value="刷新重置"></td>
          </tr>
		  </form>
        </table>
          
        </td>
 
</table>
</body>
</html>
