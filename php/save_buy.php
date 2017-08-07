<?php 
	// echo "<pre>";
	//根据点击对应的立即购买，获取图书信息，构建购物车数据库
	include_once('common.php');
	// $no = $_POST['no'];
	$no = $_POST['no'];

	//根据获取的no，从数据库提取相应的数据
	$sql = "SELECT * FROM bk_list where id = $no";
	$con = mysql_query($sql);
	$arr = mysql_fetch_assoc($con);
	// print_r($arr);
	//获取相应的购物车数量
	$num = $arr['num'];
	$num = $num+1;
	//将购物车数量更新到数据库中
	$sql = "UPDATE bk_list SET num = $num where id = $no";
	$con = mysql_query($sql);
	// echo $num;
	
	//将获取的数据存储到购物车数据库中
	$src = $arr['src'];
	$bname = $arr['bkname'];
	$price = $arr['price'];
	// $num = $arr['num'];
	$cost = $arr['price']*$num;
	$a = 0;
	echo $cost;
	// print_r($cost);

	//购物车数据库中不存放数据完全相同的图书信息
	$sql = "SELECT * FROM shopcart";
	$con = mysql_query($sql);

	// $row = mysql_num_rows($con);
	while($row=mysql_fetch_assoc($con)){
		
		if($row['uid'] != $no){
			$a++;
			if($a == mysql_num_rows($con)){
				$sql = "INSERT INTO shopcart (id,src,bname,num,price,cost,is_delete,uid) values (null,'$src','$bname','$num','$price','$cost','1','$no')";
				$con2 = mysql_query($sql);
				echo $cost;
			}
		}else if($row['uid'] == $no){
			//只更新num的数据
			$sql = "UPDATE shopcart set num = '$num' where uid = '$no' ";
			mysql_query($sql);
			$cost = $arr['price']*$num;
			$sql = "UPDATE shopcart set cost = '$cost' where uid = '$no' ";
			mysql_query($sql);
		}
	}

 ?>
