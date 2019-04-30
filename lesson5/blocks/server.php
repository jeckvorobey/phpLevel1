<?php
include "config.php";
$views = $_GET['views']; //счетчик просмотров
$id = $_GET['id']; //id картинки
$sqlViewsUp = "UPDATE `Picture` SET `views` = $views WHERE `Picture`.`id` = $id";
$sql = "SELECT * FROM `Picture` WHERE `id` = $id";
$up = mysqli_query($conn, $sqlViewsUp); //обновляем счетчик просмотров по ID картинке
$result = mysqli_query($conn, $sql); //получаем данные по ID картинке
while ($row = mysqli_fetch_assoc($result)){
  print  $date = json_encode($row); //отправляем json c data
}