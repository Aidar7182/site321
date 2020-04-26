<?
session_start();
include('data_base.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shop: Главная странница сайта</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template1.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="">Все товары</a></li>
                <li ><a href="">Категории</a>
                </li>
                <li ><a href="/korzina.php">В корзину</a></li>

                <li class="dropdown">
                  
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php
                if(!isset($_SESSION['id'])):
                ?>
  <li><a href="/html/form_enter.php">Войти</a></li>

   <?php
else:
    ?>
 <li><a href="ex.php">Выйти</a></li>
    <?php
endif;
    ?>
                            </ul>
        </div>
    </div>
    
</nav>
<div class="container">
    <div class="starter-template">
                            <h1>Все товары</h1>
    <form method="GET" action="">
        <div class="filters row">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">Цена от                    <input type="text" name="price_from" id="price_from" size="6" value="">
                </label>
                <label for="price_to">до                    <input type="text" name="price_to" id="price_to" size="6"  value="">
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="hit">
                    <input type="checkbox" name="hit" id="hit" > Хит                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="new">
                    <input type="checkbox" name="new" id="new" > Новинка                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="recommend">
                    <input type="checkbox" name="recommend" id="recommend" > Рекомендуем                </label>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary">Фильтр</button>
                <a href="" class="btn btn-warning">Сброс</a>
            </div>
        </div>
        </div>
    </form>
    <br>
    <ul class="products clearfix">
		<?php 
		$result = $mysql->query("SELECT * FROM `tovar`");
		while ($tovar = mysqli_fetch_assoc($result)):
     ?>
     <li class="product-wrapper">

<img src="<?=$tovar['image']; ?>" height="250px" class="imga"/> 

		<h3>	<?=$tovar['name']; ?></h3>
		
            <p><?=$tovar['price'] . ' COM'; ?></p>    
            
            <p>
            <form action="/modal_windows.php" method="POST">
                <a class="btn-ens-action btn-ens-style" data-rel="4a9f99dc105" onclick="addCar(<?=$tovar['id']; ?>, <?=$_SESSION['id']; ?>);">В корзину</a>                  
                
                                <a href="/modal_windows.php"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="69emV3ZGNcrFZ9zYl9Cjq1dg0iAKv9FneWezXS3k">      
                  </form>
            </p>
            </li>
    <?php endwhile; ?> 
    </ul>
               
    <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            
            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
         <li class="page-item"><a class="page-link" href="?&amp;page=2">2</a></li>
                                                                        
            
                            <li class="page-item">
         <a class="page-link" href="?&amp;page=2" rel="next" aria-label="pagination.next">&rsaquo;</a>
             </li>
            </ul>
    </nav>
    </div>
    <!--Библиотека jQuery-->
    

<!--Стили элементов для корзины-->
<link href="https://lk.easynetshop.ru/frontend/v5/ens-3e89302d.css" rel="stylesheet">
</body>
</html>

<script type="text/javascript">
    function ajaxData(str, url, method){
        var result = false;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                result = this.responseText;
            }
        };
        xhttp.open(method, url, false);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(str);
        return result;
    }

    function addCar(tovarId, userId){
        //alert(tovarId + " " + userId);
        var data = "tovarId=" + tovarId + "&" + "userId=" + userId;
        var res = ajaxData(data, "addInCar.php", "POST");
        alert(res);
    }
</script>