<?php
$host="localhost";
$userName="root";
$password="root";
$dbName="db_database";
$conn=mysqli_connect($host,$userName,$password,$dbName);
header("content-type:text/html;charset=utf-8");
mysqli_query($conn,"set names utf8");

/*if($conn)
{
	echo "数据库连接成功!";
	}
	else
	{
		echo "数据库连接失败!";
		}*/

$data['j_num']=strval($_POST['j_num']);
$data['j_name']=strval($_POST['j_name']);

	$sqlstr="insert into jyjl(j_name,j_num) values('$data[j_name]','$data[j_num]')";	
	$result=mysqli_query($conn,$sqlstr);
	
	/*if($result)
	{
		echo "添加成功！";
	}
	else
	{
		echo "添加失败！";
		}*/
?>
<?php	

	$sqlstr1= "select * from con_drink where d_name='".$_POST['j_name']."'"; 
	$result1=mysqli_query($conn,$sqlstr1);
	$myrow= mysqli_fetch_array($result1);
		
			$count=$myrow['d_num'] - $_POST['j_num'];
			//echo "订购成功!!";
			
			if($count >= 0){			
				$query1="update con_drink set d_num = '".$count."' where d_name ='".$_POST['j_name']."'";	
				
				$result2=mysqli_query($conn,$query1);
				if($result1 && $result2){
					echo "订购成功!!";
					echo "<meta http-equiv=\"Refresh\" content=\"2;url=con_Drink.php\">";
				}else{
					echo "订购失败!";
				}
			
			}
			
?>	
<?php 
	$sqlstr1= "select * from con_meat where m_name='".$_POST['j_name']."'"; 
	$result1=mysqli_query($conn,$sqlstr1);
	$myrow= mysqli_fetch_array($result1);
		
			$count=$myrow['m_num'] - $_POST['j_num'];
			//echo "订购成功!!";
			//echo $count;
			if($count >= 0){			
				$query1="update con_meat set m_num = '".$count."' where m_name ='".$_POST['j_name']."'";	
				
				$result2=mysqli_query($conn,$query1);
				if($result1 && $result2){
					echo "订购成功!!";
					echo "<meta http-equiv=\"Refresh\" content=\"2;url=con_Meat.php\">";
				}else{
					echo "订购失败!";
				}
			
			}
			
?>
<?php 
	$sqlstr1= "select * from con_vegetable where v_name='".$_POST['j_name']."'"; 
	$result1=mysqli_query($conn,$sqlstr1);
	$myrow= mysqli_fetch_array($result1);
		
			$count=$myrow['v_num'] - $_POST['j_num'];
			//echo "订购成功!!";
			
			if($count >= 0){			
				$query1="update con_vegetable set v_num = '".$count."' where v_name ='".$_POST['j_name']."'";	
				
				$result2=mysqli_query($conn,$query1);
				if($result1 && $result2){
					echo "订购成功!!";
					echo "<meta http-equiv=\"Refresh\" content=\"2;url=con_Vegetable.php\">";
				}else{
					echo "订购失败!";
				}
			
			}
			
?>
<?php 
	$sqlstr1= "select * from con_special where s_name='".$_POST['j_name']."'"; 
	$result1=mysqli_query($conn,$sqlstr1);
	$myrow= mysqli_fetch_array($result1);
		
			$count=$myrow['s_num'] - $_POST['j_num'];
			//echo "订购成功!!";
			
			if($count >= 0){			
				$query1="update con_special set s_num = '".$count."' where s_name ='".$_POST['j_name']."'";	
				
				$result2=mysqli_query($conn,$query1);
				if($result1 && $result2){
					echo "订购成功!!";
					echo "<meta http-equiv=\"Refresh\" content=\"2;url=con_Special.php\">";
				}else{
					echo "订购失败!";
				}
			
			}
			
?>