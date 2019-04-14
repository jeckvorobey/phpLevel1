<?php
include "blocks/config.php";
$mysqlGallery = mysqli_query($conn, 'SELECT * FROM `SmallPic` ORDER BY `SmallPic`.`views` DESC');

//отрисовка галереии с маленькими изображениями
$img = "";
while ($date = mysqli_fetch_assoc($mysqlGallery)){
    $img .= "<img class='picture' id='".$date['id']."' src='".$date['src_small'] . $date['name']. "' alt='priroda" .$date['name']. "'>";
}
echo ($img);



