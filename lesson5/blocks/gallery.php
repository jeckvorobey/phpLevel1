<?php
include "blocks/config.php";
$mysqlGallery = mysqli_query($conn, 'SELECT * FROM `Picture` ORDER BY `Picture`.`views` DESC'); //сортируем по убыванию просмотров

//отрисовка галереии с маленькими изображениями
$img = "";
while ($date = mysqli_fetch_assoc($mysqlGallery)){
    $img .= "<img class='picture' id='".$date['id']."' src='".$date['src_small'] . $date['name']. "' alt='priroda" .$date['name']. "' data-count='".$date['views']."' >";
}
echo ($img);



