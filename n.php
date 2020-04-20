<?php
session_start();
	include('data_base.php');

	$code = $_POST['code'];
	$id = $_POST['id'];

	if(!isset($code))
		exit();

	$res = $mysql->query("SELECT `num` FROM `users` WHERE `id` = '$id'");
	$res = $res->fetch_assoc();

	if($res['num'] == $code){
		$mysql->query("UPDATE `users` SET `status` = '1' WHERE `id` = '$id'");
		$_SESSION['status'] = '1';
	}


?>
