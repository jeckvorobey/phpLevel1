<?php

require_once '../blocks/sqlconnect.php';
//получаем строку с товаром из корзины (если такая есть)
function get_basket_row($connection, $userId, $goodId)
{
    $idGood = (int) $goodId;
    $sql = "SELECT * FROM `basket` WHERE `id_good`='%d' and `id_user`='%s'";
    $query = sprintf($sql, $idGood, mysqli_escape_string($connection, $userId));
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    $good = mysqli_fetch_assoc($result);

    return $good;
}
//обновляем количество в корзине
function update_count($connection, $userId, $goodId)
{
    $idGood = (int) $goodId;
    $sql = "UPDATE `basket` SET `count`=count+1 WHERE `id_good`='%d' and `id_user`='%s'";
    $query = sprintf($sql, $idGood, mysqli_escape_string($connection, $userId));
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    return mysqli_affected_rows($connection);
}
//добавляем товар в корзину
function add_basket($connection, $userId, $goodId)
{
    $idGood = (int) $goodId;
    $sql = "INSERT INTO `basket`(`id_good`, `count`, `id_user`) VALUES ('%d', 1, '%s')";
    $query = sprintf($sql, $idGood, mysqli_escape_string($connection, $userId));
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    return true;
}

function basket_all($connection, $userId)
{
    $sql = "SELECT * FROM `basket` WHERE `id_user`='%s'";
    $query = sprintf($sql, mysqli_escape_string($connection, $userId));
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }
    $basket = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $basket[] = $row;
    }

    return $basket;
}
//получаем данные о товаре для рендера корзины
function good_get($connection, $id, $count)
{
    $sql = 'SELECT `author`, `title`, `price` FROM `goods` WHERE `id`=%d';
    $query = sprintf($sql, (int) $id);
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die(mysqli_error($connection));
    }
    $good = mysqli_fetch_assoc($result);
    $good['count'] = $count;

    return $good;
}