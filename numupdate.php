<?php
	
	$nums = [
		0 => '23410',
		1 => '21001',
		2 => '70523'
	];


	$ind = rand(0, 2);
	$arr = [
		'index' => $ind,
		'number' => $nums[$ind],
		'img' => 'img0' . ($ind + 1)
	];

	if($_POST['get'] == 'new')
		echo json_encode($arr);
?>