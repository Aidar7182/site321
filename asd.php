<!Doctype html>
<html>
    <meta charset="utf-8">
<head>
<title>
    dobavlenie
</title>
</head>
<body>
    <form action="test.php" method="post">
    <label for="name" class="col-md-4 col-form-label text-md-right">Название</label>
       <p>
       <input  type="text" class="form-control"
                               name="name" required></p> 
    <label for="category" class="col-md-4 col-form-label text-md-right">Категория</label>                       
       <p>
       <input  type="text" class="form-control"
                               name="category" required></p>
<label for="price" class="col-md-4 col-form-label text-md-right">Цена</label>
<p>
<input  type="text" class="form-control"
                               name="price" required></p>
    <label for="description" class="col-md-4 col-form-label text-md-right">Подробности</label>                           
       <p>
       <input  type="text" class="form-control"
                               name="description" required>       </p>
 <label for="img" class="col-md-4 col-form-label text-md-right">Фотография</label>
                    <P>
                    <input type="text" class="form-control"
                               name="img" required>
                    </P>
       </form>    
       <p><input type="submit" /></p>
</body>
</html>
<?php
include ('bd.php');
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_POST['img'];
$mysqli->query("INSERT INTO tovar(`name`,`category`,`price`,`description`,`image`)VALUES ('$name','$category','$price','$description','$image')");
$mysqli->close();
?>
