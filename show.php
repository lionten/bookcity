<?php 
	// echo "<pre>";
	//商品详情页
	include_once("php/common.php");
	session_start();
	$user = $_SESSION['user'];
	$time = date("y-m-d h:i:s",time());
	$arr['user'] = $user.'书吧欢迎您！'.$time;

	//获取点击传递的src
	$src = $_GET['src'];
	// echo $src;
	// echo $src;

	//查询该连接的图书相关信息
	$sql = "SELECT * FROM bk_list where src = '$src'";
	$con = mysql_query($sql);
	if(!$con){
		echo "失败";
		exit;
	}
	$res = mysql_fetch_assoc($con);

	// print_r($res);
	// $arr['info'][]=$res;

	//获取图书相关信息
	$src = $res['src'];
	$price = $res['price'];
	$bkname = $res['bkname'];
	$intro = $res['intro'];
	$auth = $res['auth'];
	$publi = $res['publi'];
	$pubdate = $res['pubdate'];
	$isbn = $res['isbn'];
	$user = $arr['user'];

	echo "<div></div>";

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>头部导航条</title>
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/show.css">
	<script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
	<!-- 导航条 -->
	<div class="header_nav">
		<p>
			<a href="###">书吧</a>
			<a href="homepage3.html">网站首页</a>
			<a href="###">关于我们</a>
			<a href="homepage3.html" class="focus">图片展示</a>
			<a href="###">联系我们</a>
			<a href="###">购物车</a>
			<a href="add_book.html">添加图书</a>
			<a href="login.html">退出</a>
		</p>
	</div>
<?php 

	echo "<div class='con'><div class='left'><img src=".$src."></div>
	<div class='rig'><h2>".$bkname."</h2>
	<p>".$intro."</p><div class='other'>
	<p><span>作者：</span>".$auth."</p>
	<p><span>出版社：</span>".$publi."</p>
	<p><span>出版日期：</span>".$pubdate."</p>
	<p><span>国际标准书号ISBN：</span>".$isbn."</p>
	<p><span>友情价格：</span>".$price."</p></div>
	<a href=''>加入购物车</a><a href=''>立即购买</a></div></div>";
	echo "<div id='nav'><span>{$user}</span></div>";

?>
</body>
</html>



