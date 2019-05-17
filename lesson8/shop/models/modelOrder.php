<?php

require_once '../blocks/sqlconnect.php';

function delivery($connection, $idDelivery)
{
    $sql = "SELECT * FROM `delivery` WHERE `id`='%d'";
    $query = sprintf($sql, mysqli_escape_string($connection, (int) $idDelivery));
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    $delivery = mysqli_fetch_assoc($result);

    return $delivery;
}

function add_order($connection, $idUser, $idStatus, $idDelivery, $index, $region, $regionArea, $city, $str, $house, $corps, $flat, $phone)
{
    $idUser = (int) $idUser;
    $idStatus = (int) $idStatus;
    $idDelivery = (int) $idDelivery;
    $phone = (int) $phone;
    $sql = "INSERT INTO `orders`(`id_user`, `id_status`, `id_delivery`, `index`, `region`, `regionArea`, `city`, `str`, `house`, `corps`, `flat`, `phone`) VALUES (%d, %d, %d, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s',%d)";
    $query = sprintf($sql, $idUser, $idStatus, $idDelivery, mysqli_escape_string($connection, $index), mysqli_escape_string($connection, $region), mysqli_escape_string($connection, $regionArea), mysqli_escape_string($connection, $city), mysqli_escape_string($connection, $str), mysqli_escape_string($connection, $house), mysqli_escape_string($connection, $corps), mysqli_escape_string($connection, $flat), $phone);
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    return true;
}

function user_order($connection, $idUser)
{
    $idUser = (int) $idUser;
    $sql = 'SELECT * FROM `orders` WHERE `id_user`= %d and `id_status`=1';
    $query = sprintf($sql, $idUser);
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    $order = mysqli_fetch_assoc($result);

    return $order;
}

function add_good_order($connection, $idOrder, $idGood, $goodCount)
{
    
}