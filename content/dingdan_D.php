<?php 
//session_start();
include("../config.php");
header("content-type:text/html;charset=utf-8");
?>
<html>
<head>
<meta charset="utf-8">
<link href="../css/dingdan.css" rel="stylesheet">

</head>

<body>
	<div class="main">
    	<h3>请填写订单信息</h3>
    <form name="form1" method="post" enctype="multipart/form-data" action="dd_ok.php">
    请选择物品：<select name="j_name" >
    
          <?php
                    $result=mysqli_query($conn,"select * from con_drink");
              
                    while($myrow=mysqli_fetch_array($result))
                    {                                    
                    
                ?> 
                     <option   value="<?php echo $myrow['d_name'];?>">
                    <?php echo $myrow['d_name'];?></option>
              <?php
                }
             
                ?>
                   
               

            </select>
        <div class="number">    
            请输入数量： 
             <select name="j_num">
                  <?php
                      for($i=1;$i<=20;$i++){
                        echo "<option value='".$i."'".($i==1?" selected":"").">".$i."</option>";
                      }
                  ?>
            </select>
       </div>
       <div class="submit">       
            <input type="submit" name="Submit" value="提交" />&nbsp;&nbsp;&nbsp;
            <input type="reset" name="Submit2" value="重置" />
       </div>     
            
            </form>
</div>
</body>
</html>