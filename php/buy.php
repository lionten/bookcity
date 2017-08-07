<?php 
	// echo "<pre>";
	//根据点击对应的立即购买，获取图书信息，构建购物车数据库
	include_once('common.php');
	$arr = [];
	$sql = "SELECT * FROM shopcart ";
	$con = mysql_query($sql);
	while($row = mysql_fetch_assoc($con)){
		array_push($arr,$row);
	}
	
	echo json_encode($arr);
 ?>
