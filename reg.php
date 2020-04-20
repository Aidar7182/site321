<?php
session_start();
	include('data_base.php');
	include('numupdate.php');
	function errorFunc($i, $text){
		$msg = [
			'type' => 'error',
			'i' => $i,
			'text' => $text
		];
		exit(json_encode($msg, JSON_UNESCAPED_UNICODE));
	}

	function testData($data){
		$str = $data;
		$str = trim($str);
		$str = strip_tags($str);
		if(!isset($str) || $str  == "")
			errorFunc("0", "заполните все поля");

		return $str;
	}

	
	$login = testData($_POST['login']);
	$pass = testData($_POST['password']);
	$pass_two = testData($_POST['password_two']);
	$email = testData($_POST['email']);
	$num = testData($_POST['num']);
	$index = testData($_POST['index']);

	
	if($nums[(int)$index] != $num)
		errorFunc("1", "введите правильно цифры с картинки");


	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		errorFunc("2", "email адрес указан неверно");

	if($pass != $pass_two)
		errorFunc("3", "пароли не совподают");

	if(iconv_strlen($login) <= 3)
		errorFunc("4", "имя пользователя должно содержать больше 3 символов");

	else if(iconv_strlen($login) >= 25)
		errorFunc("11", "имя пользователя должно содержать меньше 11 символов");

	$login_test = $mysql->query("SELECT `login` FROM `users` WHERE `login` = '$login'");
	$login_test = $login_test->fetch_assoc();
	if(isset($login_test['login']))
		errorFunc("20", "логин уже занят");

	$password = md5($pass);

	$login_test = $mysql->query("SELECT `password` FROM `users` WHERE `password` = '$password'");
	$login_test = $login_test->fetch_assoc();
	if(isset($login_test['password']))
		errorFunc("21", "пароль уже занят");

	$login_test = $mysql->query("SELECT `email` FROM `users` WHERE `email` = '$email'");
	$login_test = $login_test->fetch_assoc();
	if(isset($login_test['email']))
		errorFunc("22", "email уже занят");

	$code = rand(1000, 9999);

	$r = $mysql->query("INSERT INTO `users` (`login`, `password`, `email`, `num`, `status`) VALUES ('$login', '$password', '$email', '$code', '0')");


	if($r == 'TRUE'){


		$msg = [
			'type' => 'msg',
			'i' => $i,
			'text' => "Вы успешно зарегистрированны!"
		];

		$res = $mysql->query("SELECT `id`, `num` FROM `users` WHERE `email` = '$email'");
		$res = $res->fetch_assoc();

		$_SESSION['id'] = $res['id'];
		$_SESSION['status'] = '0';

		$mMessage = "Ваш код активации акаунта: " . $res['num'];
		$to = $email;
		$subject = "Подверждение акаунта";

		$headers = "Content-type:text/html; charset = windows-1251 \r\n";

		mail($to, $subject, $mMessage, $headers);

		echo json_encode($msg, JSON_UNESCAPED_UNICODE);
	}
?>
