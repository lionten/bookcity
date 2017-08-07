<?php 
	include_once("php/common.php");
	header("Content-Type:text/html;charset=utf-8");

	print_r($_FILES);//二维数组

	$file = $_FILES['upfile'];

	//设置上传图片最大尺寸
	$max_file_size=2000000;

	//设置文件上传类型
	$uptypes = array('image/jpg','image/jpeg','image/png','image/gif','image/bmp');

	//限制上传文件大小
	if($max_file_size < $file['size']){
		echo "文件太大！";
		exit;
	}
	//检查文件类型
	if(!in_array($file['type'], $uptypes)){
		echo "文件类型不符！".$file['type'];
		exit;
	}

	// 文件名称获取:时间当作用作名称
	$name = date("ymshis",time());

	//文件格式获取
	$arr_type = explode("/", $file['type']);
	$type = $arr_type[1];

	//图片临时存放路径
	$filename = $file['tmp_name'];
	$destination = "img/".$name.'.'.$type;

	//判断图片路径是否移动成功
	if(!move_uploaded_file($filename, $destination)){
		echo "文件移动出错";
		exit;
	}

	//把文件上传至数据库中
	//获取上传图片相关信息
	$bname = $_POST['bname'];
	$intro = $_POST['intro'];
	$auth = $_POST['auth'];
	$publi = $_POST['publi'];
	$pubdate = $_POST['pubdate'];
	$price = $_POST['price'];
	$isbn = $_POST['isbn'];
	// if(!($bname && $intro&&$auth&&$publi&&$pubdate&&$price&&$isbn)){
	// 	echo "请将信息填写完整";
	// 	exit;
	// }else{
		
	// }
	$id = 5;
	$id2 = $id++;
	echo $id2;
	$sql = "INSERT INTO bk_list (id,src,price,bkname,intro,auth,publi,pubdate,isbn) values (NULL,'$destination','$price','$bname','$intro','$auth','$publi','$pubdate','$isbn')";
	$con = mysql_query($sql);

	if($con){
		echo "<script>window.location.href='homepage3.html'</script>";
	}else{
		echo "上传失败";
	}
 ?>

