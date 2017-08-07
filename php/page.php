<?php  

	include_once("common.php");
	session_start();
	$user = $_SESSION['user'];
	$time = date("y-m-d h:i:s",time());
	$arr['user'] = $user.'书吧欢迎您！'.$time;
	// echo $_SESSION['user'].' '.'书吧欢迎您！'.date("y-m-d h:i:s",time()).',';

	//分页
	//1、获取当前页码
	//2、根据页码取出数据
	//3、显示数据

	//获取当前页码
	$page = $_POST['p'];

	//设置每页显示的条数
	$pagesize = 6;
	$startpage = ($page-1)*$pagesize;
	// echo($pagesize);
	
	//获取数据库总数
	$total_sql = "SELECT count(*) FROM bk_list";
	$total_con= mysql_query($total_sql);
	$total = mysql_fetch_array($total_con)[0];
	
	//获取总页数
	$total_page = ceil($total/$pagesize);
	// echo $total_page;

	$arr['total'] = $total;
	$arr['pagesize'] = $pagesize;
	$arr['total_page'] = $total_page;

	//根据页码取出当前数据
	$sql = "SELECT * FROM bk_list limit $startpage,$pagesize";
	$con = mysql_query($sql);
	if(!$con){
		exit;
	}
	// while($row = mysql_fetch_assoc($con)){
	// 	$bkname = $row['bkname'];
	// 	$src = $row['src'];
	// 	$price = $row['price'];
	// 	if($row){
	// 		echo ','.$bkname,",'".$src."',",$price;
	// 	};	
	// }
	//把数据添加到数组中形成二维数组
	while ($row = mysql_fetch_array($con)) {
		$arr['list'][] = array(
				'no'=>$row['id'],
				'bkname' => $row['bkname'],
				'src' => $row['src'],
				'price' => $row['price']
			);
	}
	// print_r($arr);
	echo json_encode($arr);





















?>