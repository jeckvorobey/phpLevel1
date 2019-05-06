<?php 

require_once '../blocks/sqlconnect.php';
//получаем строку с товаром из корзины (если такая есть)
function get_basket_row ($connection, $userId, $goodId) 
{
    $idGood = (int)$goodId;
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
function up_date_count ($connection, $userId, $goodId, $count) 
{
    $idGood = (int)$goodId;
    $counter = (int)$count;
    $sql = "UPDATE `basket` SET `count`='%d' WHERE `id_good`='%d' and `id_user`='%s'";
    $query = sprintf($sql, $counter, $idGood, mysqli_escape_string($connection, $userId));
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    return mysqli_affected_rows($connection);
}
//добавляем товар в корзину
function add_basket ($connection, $userId, $goodId)
{
    $idGood = (int)$goodId;
    $sql = "INSERT INTO `basket`(`id_good`, `count`, `id_user`) VALUES ('%d', 1, '%s')";
    $query = sprintf($sql, $idGood, mysqli_escape_string($connection, $userId));
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    return true;
}