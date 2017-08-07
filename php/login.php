<?php 

	include_once("common.php");
	
	 $user = $_POST['user'];
	 $pass = $_POST['pass'];
	 $a = 0;

	 //判断输入的用户名与密码是否与数据库中的用户名、密码相同
	 //找到唯一的用户名，在用户名下判断密码是否相同
	 $sql = "SELECT * FROM regis";
	 $con = mysql_query($sql);
	 while ($con2 = mysql_fetch_assoc($con)) {
	 	$a++;
		 if( $user == $con2['user'] ){
		 	//用户名存在，判断密码是否相同
		 	if($pass == $con2['pass']){
		 		session_start();
		 		$_SESSION['id'] = $con2['id'];
		 		$_SESSION['user'] = $con2['user'];
		 		$data['err'] = 0;
		 		$data['msg'] = "登录成功";
		 	}else{
		 		$data['err'] = 1;
		 		$data['msg'] = '密码错误';
		 	}
		 	break;
		 }else if($a == mysql_num_rows($con)){
		 	//遍历完所有的数据发现没有相同的用户名之后
		 	$data['err'] = 2;
		 	$data['msg'] = '用户名不存在';
		 }
	 }

	 //数值转换成json格式
	echo json_encode($data);












 ?>