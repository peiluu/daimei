<?php
header("Content-type:text/html;charset=utf-8"); //设置文件编码格式
include_once("config.php");//包含数据库连接文件

header("content-type:text/html;charset=utf-8");
if($_POST['lmbs']=="菜单管理-drink"){		
		if(!($_POST['d_name'] and $_POST['d_price'] and $_POST['d_content']and $_POST['d_num'] )){
		echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	}else{
		$sqlstr = "update con_drink set d_name = '".$_POST['d_name']."', d_price = '".$_POST['d_price']."', d_num = '".$_POST['d_num']."',d_content = '".$_POST['d_content']."' where d_id = ".$_POST['d_id'];//定义更新语句
		$result = mysqli_query($conn,$sqlstr);//执行更新语句
		if($result){
			echo "修改成功,点击<a href='javascript:onclick=history.go(-2)'>这里</a>查看";
		}else{
			echo "修改失败.<br>$sqlstr";
		}
	}
}

if($_POST['lmbs']=="菜单管理-meat"){		
		if(!($_POST['m_name'] and $_POST['m_price']and $_POST['m_content'] )){
		echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	}else{
		$sqlstr = "update con_meat set m_name = '".$_POST['m_name']."', m_price = '".$_POST['m_price']."', m_content = '".$_POST['m_content']."' where m_id = ".$_POST['m_id'];//定义更新语句
		$result = mysqli_query($conn,$sqlstr);//执行更新语句
		if($result){
			echo "修改成功,点击<a href='javascript:onclick=history.go(-2)'>这里</a>查看";
		}else{
			echo "修改失败.<br>$sqlstr";
		}
	}
}

if($_POST['lmbs']=="菜单管理-special"){		
		if(!($_POST['s_name'] and $_POST['s_price'] and $_POST['s_content'])){
		echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	}else{
		$sqlstr = "update con_special set s_name = '".$_POST['s_name']."', s_price = '".$_POST['s_price']."', s_content = '".$_POST['s_content']."' where s_id = ".$_POST['s_id'];//定义更新语句
		$result = mysqli_query($conn,$sqlstr);//执行更新语句
		if($result){
			echo "修改成功,点击<a href='javascript:onclick=history.go(-2)'>这里</a>查看";
		}else{
			echo "修改失败.<br>$sqlstr";
		}
	}
}

if($_POST['lmbs']=="菜单管理-vegetable"){		
		if(!($_POST['v_name'] and $_POST['v_price'] and $_POST['v_content'] )){
		echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	}else{
		$sqlstr = "update con_vegetable set v_name = '".$_POST['v_name']."', v_price = '".$_POST['v_price']."', v_content = '".$_POST['v_content']."' where v_id = ".$_POST['v_id'];//定义更新语句
		$result = mysqli_query($conn,$sqlstr);//执行更新语句
		if($result){
			echo "修改成功,点击<a href='javascript:onclick=history.go(-2)'>这里</a>查看";
		}else{
			echo "修改失败.<br>$sqlstr";
		}
	}
}
?>