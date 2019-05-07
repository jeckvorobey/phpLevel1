<?php
header("Location: http://lesson5.php1/");
//print_r($_FILES);
$file = "../images/big/" . $_FILES['image']['name'];
//print_r($file);
move_uploaded_file($_FILES['image']['tmp_name'], $file);
if ($_FILES['image']['type'] == 'image/jpeg') {
    $img = resize_imagejpg($file, 300, 169);
    imagejpeg($img, "../images/small/" . $_FILES['image']['name']);
} else {
    $img = resize_imagepng($file, 300, 169);
    imagepng($img, "../images/small/" . $_FILES['image']['name']);
}

//функция для изменения размера jpeg
function resize_imagejpg($file, $w, $h)
{
    list($width, $height) = getimagesize($file);
    $src = imagecreatefromjpeg($file);
    $dst = imagecreatetruecolor($w, $h);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $width, $height);
    return $dst;
}

//функция для изменения размера png
function resize_imagepng($file, $w, $h)
{
    list($width, $height) = getimagesize($file);
    $src = imagecreatefrompng($file);
    $dst = imagecreatetruecolor($w, $h);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $width, $height);
    return $dst;
}



