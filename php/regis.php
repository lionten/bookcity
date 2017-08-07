<?php 
	include_once("common.php");

	//获取输入的用户名和密码
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$a = 0;

	//插入之前判断是否存在相相同的用户名
	$sql = "SELECT * from regis";
	$con = mysql_query($sql);

	//数据库中存在数据时,插入数据前判断有无相同的用户名
	//首先，当第一次循环用户名相同时，直接跳出；
	//其次，当第一次循环用户名不同时，直接进行第二个循环（即遍历完所有的数据还没有发现相同的用户名才能进行插入新的数据）
	while ($con2 = mysql_fetch_assoc($con)){
		$a++;
		if($user == $con2['user']){
				echo '{"err":"1","msg":"用户名已注册"}';
				break;		
		}else if($a == mysql_num_rows($con)){
			$sql_1 = "INSERT into regis(id,user,pass) values (NULL,'$user','$pass')";
			$con_1 = mysql_query($sql_1);
			if($con_1){
				echo '{"err":"0","msg":"注册成功"}';
				break;
			}
		}	
	}

	//数据库中不存在数据时
	if(mysql_num_rows($con) == 0){
		$sql_1 = "INSERT into regis(id,user,pass) values (NULL,'$user','$pass')";
		$con_1 = mysql_query($sql_1);
			if($con_1){
				echo '{"err":"0","msg":"注册成功"}';
			}
	}
	
 ?>