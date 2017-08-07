<?php 
	include_once("common.php");
	$uid = $_GET['uid'];
	$sql = "UPDATE bk_list set num = '0' where id = '$uid'";
	mysql_query($sql);
	$sql = "DELETE  FROM shopcart WHERE uid = '$uid'";
	$con = mysql_query($sql);

 ?>