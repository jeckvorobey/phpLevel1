<?php

require_once '../blocks/sqlconnect.php';

function my_orders($connection, $idUser)
{
    $idUser = (int) $idUser;
    $sql = 'SELECT orders.id, orders.date, delivery.name, orders.index, orders.region, orders.regionArea, orders.city, orders.str,orders.house, orders.flat, orders.phone, stat.nameStatus FROM `orders` INNER JOIN `delivery` ON orders.id_delivery = delivery.id INNER JOIN `stat`ON orders.id_status = stat.id WHERE orders.id_user = %d ORDER BY orders.date DESC';
    $query = sprintf($sql, $idUser);
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die(mysqli_error($connection));
    }
     $orders = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $orders[] = $row;
    }

    return $orders;
}