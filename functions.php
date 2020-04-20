<?php
function get_categories($link){
    $sql = "SELECT * FROM categories";
    $result=mysqli_query($link, $sql);
    $categories=mysqli_fetch_all($result, 1);
    return $categories;
}

?>