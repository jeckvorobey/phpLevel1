<?php

include_once '../blocks/db_request.php';
include_once '../blocks/translit.php';
include_once '../blocks/resizeImg.php';

if (isset($_POST['addGood'])) {
    $price = (int) trim(strip_tags($_POST['price']));
    $yearPublishing = (int) trim(strip_tags($_POST['yearPublishing']));
    $author = trim(strip_tags($_POST['author']));
    $title = trim(strip_tags($_POST['title']));
    $pubHouse = trim(strip_tags($_POST['pubHouse']));
    $series = trim(strip_tags($_POST['series']));
    $isbn = trim(strip_tags($_POST['isbn']));
    $description = trim(strip_tags($_POST['description']));
    $annotation = trim(strip_tags($_POST['annotation']));
    // получаем название изображения и делаем транслитерацию
    $pictureName = $_FILES['imgName']['name'];
    $imgName = transliteration($pictureName, $alphabet);
    //сохраняем и обрезаем полученный файл
    $file = $_FILES['imgName']['tmp_name'];
    if ($_FILES['imgName']['type'] == 'image/jpeg') {
        $img = resize_imagejpg($file, 220, 340);
        imagejpeg($img, '../public/img/products/'.$imgName);
    } else {
        $img = resize_imagepng($file, 220, 340);
        imagepng($img, '../public/img/products/'.$imgName);
    }
    Good_add($connection, $author, $title, $imgName, $description, $annotation, $pubHouse, $series, $yearPublishing, $isbn, $price);
    header('Location: ../admin/index.php');
}
