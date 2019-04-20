<?php

require_once '../blocks/sqlconnect.php';
//получаем продукт из БД
function goods_get($connection, $id)
{
    $query = sprintf('SELECT * FROM `goods` WHERE id=%d', (int) $id); //форматируем строку, защита от инъекций
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die(mysqli_error($connection)); //если нет результата выводим ошибку
    }
    $good = mysqli_fetch_assoc($result);

    return $good;
}
