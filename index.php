<?
include('data_base.php');
include('ex.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shop: Главная</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://internet-shop.tmweb.ru">Все товары</a></li>
                <li ><a href="/asd.php">Категории</a>
                </li>
                <li ><a href="/korzina.php">В корзину</a></li>

                <li class="dropdown">
                  
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
  <li><a href="/html/form_enter.php">Войти</a></li>
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
    </form>
    <div class="row">
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
                    </div>
                    <?
$result=$mysql->query("SELECT * FROM `tovar` WHERE `name`='Степпер'");
while($row=mysqli_fetch_assoc($result)):
?>
<img src = "<?=$row['image']; ?>" / alt="iPhone X 64GB">

        <div class="caption">
   
            <h3>
                <?=$row['name'];
                ?>
            </h3>
            <p>
            <?=$row['price']. ' СОМ';?>
            </p>
<? endwhile; ?> 
            <p>
            <form action="" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="/tovar/stepper.php"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="69emV3ZGNcrFZ9zYl9Cjq1dg0iAKv9FneWezXS3k">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
                    </head> 
 <body> 
  <ul>
   <li>Lorem ipsum dolor sit amet</li>
   <li>Consectetuer adipiscing elit</li>
   <li>Sed diem nonummy nibh euismod</li>
   <li>Tincidunt ut lacreet dolore magna aliguam erat volutpat. Ut wisis 
    enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis 
    nisl ut aliquip ex ea commodo consequat.</li>
  </ul>
 </body>
                
                    <?
$result=$mysql->query("SELECT * FROM `tovar` WHERE `name`='Airpods'");
while($row=mysqli_fetch_assoc($result)):
?>
	<img src = "<?=$row['image']; ?>" / alt="Iphone 11">
       
       <div class="caption">
     
           <h3>
           <?=$row['name'];
         ?>
           </h3>
           <p><?=$row['price']. ' СОМ';?></p>
           <? endwhile; ?> 
           <p>
           <form action="http://internet-shop.tmweb.ru/basket/add/3" method="POST">
                                   <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                               <a href="http://internet-shop.tmweb.ru/mobiles/htc_one_s"
                  class="btn btn-default"
                  role="button">Подробнее</a>
               <input type="hidden" name="_token" value="69emV3ZGNcrFZ9zYl9Cjq1dg0iAKv9FneWezXS3k">            </form>
           </p>
       </div>
   </div>
</div>
                   <div class="col-sm-6 col-md-4">
   <div class="thumbnail">
       <div class="labels">
           
           
                   </div>
                    <?
$result=$mysql->query("SELECT * FROM `tovar` WHERE `name`='Iphone 11'");
while($row=mysqli_fetch_assoc($result)):
?> 
<img src = "<?=$row['image']; ?>" / alt="Iphone 11">
       
        <div class="caption">
      
            <h3>
            <?=$row['name'];
          ?>
            </h3>
            <p><?=$row['price']. ' СОМ';?></p>
            <? endwhile; ?> 
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/3" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://internet-shop.tmweb.ru/mobiles/htc_one_s"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="69emV3ZGNcrFZ9zYl9Cjq1dg0iAKv9FneWezXS3k">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
                    <? $result=$mysql->query("SELECT * FROM `tovar` WHERE `name`='iPhone 5SE'");
while($row=mysqli_fetch_assoc($result)):
?> 
<img src = "<?=$row['image']; ?>" / alt="Iphone 5s">
        <div class="caption">
       

            <h3><?=$row['name'];
          ?></h3>
            <p><?=$row['price']. ' СОМ';?></p>
            <? endwhile; ?> 
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/4" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://internet-shop.tmweb.ru/mobiles/iphone_5se"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="69emV3ZGNcrFZ9zYl9Cjq1dg0iAKv9FneWezXS3k">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
                    <?
$result=$mysql->query("SELECT * FROM `tovar` WHERE `name`='Apple Watch Series 5'");
while($row=mysqli_fetch_assoc($result)):
?> 
<img src = "<?=$row['image']; ?>" / alt="Apple Watch Series 5">
        <div class="caption">
     
            <h3><?=$row['name'];
          ?></h3>
            <p><?=$row['price']. ' СОМ';?></p>
            <? endwhile; ?> 
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/5" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://internet-shop.tmweb.ru/portable/beats_audio"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="69emV3ZGNcrFZ9zYl9Cjq1dg0iAKv9FneWezXS3k">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
                    <?
$result=$mysql->query("SELECT * FROM `tovar` WHERE `name`='GoPro Camera'");
while($row=mysqli_fetch_assoc($result)):
?> 
<img src = "<?=$row['image']; ?>" / alt="GoPro Camera">
        <div class="caption">
        
            <h3><?=$row['name'];
          ?></h3>
            <p><?=$row['price']. ' СОМ';?></p>
            <? endwhile; ?> 
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/6" method="POST">
                <a class="btn-ens-action btn-ens-style" data-rel="3e89302d173787">В корзину</a>
                <input type="hidden" name="_token" value="69emV3ZGNcrFZ9zYl9Cjq1dg0iAKv9FneWezXS3k">            </form>
            </p>
        </div>
    </div>
</div>
            </div>
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
</div>
</body>
</html>
<!--Библиотека jQuery-->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!--Готовый скрипт корзины-->
<script defer src="https://lk.easynetshop.ru/frontend/v5/ens-3e89302d.js"></script>

<!--Стили элементов для корзины-->
<link href="https://lk.easynetshop.ru/frontend/v5/ens-3e89302d.css" rel="stylesheet">