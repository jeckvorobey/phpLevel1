<?php

//блок обработки загруженных фото
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
