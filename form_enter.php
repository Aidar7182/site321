<?
session_start();
include('data_base.php');
//include('ex.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Авторизация</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="/index.php">
                Вернуться на сайт
            </a>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                                    </ul>

                                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="http://internet-shop.tmweb.ru/login">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/my_site/index.php">Зарегистрироваться</a>
                        </li>
                    </ul>
                
                            </div>
        </div>
    </nav>

    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Авторизация</div>

            <div class="card-body">
                <form method="POST" action="" aria-label="Login">
                    <input type="hidden" name="_token" value="p7h24ZALmCDwNMVq6sBogUPpP1nA9QYVKubKSrws">                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">Логин</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control"
                                   name="email" value="" required autofocus>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control"
                                   name="password" required>

                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Войти
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


            </div>
        </div>
    </div>
</div>
</body>
</html>
<?
$email = $_POST['email'];
$pass = $_POST['password'];

$pass = md5($pass);

$result = $mysql->query("SELECT * FROM users WHERE email = '$email' AND password = '$pass'");

$user = $result->fetch_assoc();

if(count($user) > 0){
   
    echo "<script>alert(\"Пользователь успешно авторизован\");</script>"; 
   $_SESSION['id'] = $user['id'];
   $_SESSION['status'] = $user['status'];
   exit("<meta http-equiv='refresh' content='0; url= /test.php'>");
//echo "пользователь успешно авторизован";
}
?>