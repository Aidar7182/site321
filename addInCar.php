<?php
	include('bd.php');

	$userId = $_POST['userId'];
	$tovarId = $_POST['tovarId'];

	$result = $mysqli->query("INSERT INTO `korzina`(`user_id`, `tovar_id`) VALUES('$userId', '$tovarId')");

	if($result == 'TRUE'){
		echo "товар успешно добавлен!";
	}else {
		echo "не удалось добавить товар";
	}

?>