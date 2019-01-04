<html>
<head>
<meta charset="utf-8">
<style type="text/css">
   body{
	   width:100%;
	   font-size:16px;
	   line-height:20px;
	   font-family:"Adobe 楷体 Std R";
	   text-align:center;
	   background:#FFFAF0;
	   }	
	   h3{
		   font-size:20px;
		   }
  form{
	 width:400px;
	 border:1px solid #999;
	   border-rdius:6px;
	 margin-top:100px;
	 margin-left:30%;
	  
	  }
  	input{
	  border-rdius:6px;
	  height:26px;
	  font-family:"Adobe 楷体 Std R";
	}
  input:hover{
	  background:#FFE7BA;
	  
	  }
	.into input{
		width:120px;
		}
	 
</style>
</head>

<body>                         
			
<form name="form1" method="post" enctype="multipart/form-data" action="dd_ok.php">
<h3>订单</h3>
<p class="into">
请输入名称:<input name="j_name" type="text" /><br><br>
请输入数量:<input name="j_num" type="text"  /><br></p>

<p class="sub"><input type="submit" name="Submit" value="提交" />
   <input type="reset" name="Submit2" value="重置" /></p>


</form>

</body>
</html>