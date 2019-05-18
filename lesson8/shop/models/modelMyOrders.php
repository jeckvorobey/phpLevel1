<?php

require_once '../blocks/sqlconnect.php';

function my_orders($connection, $idUser)
{
    $idUser = (int) $idUser;
    $sql = 'SELECT orders.id, orders.date, delivery.name, delivery.price, orders.index, orders.region, orders.regionArea, orders.city, orders.str,orders.house, orders.flat, orders.phone, stat.nameStatus FROM `orders` INNER JOIN `delivery` ON orders.id_delivery = delivery.id INNER JOIN `stat`ON orders.id_status = stat.id WHERE orders.id_user = %d ORDER BY orders.date DESC';
    $query = sprintf($sql, $idUser);
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die(mysqli_error($connection));
    }
    $orders = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $orders[] = $row;
    }
    foreach ($orders as $key => $val) {
        $orders[$key]['goods'] = order_goods($connection, $orders[$key]['id']);
    }

    return $orders;
}

function order_goods($connection, $idOrder)
{
    $idOrder = (int) $idOrder;
    $sql = 'SELECT goods.author, goods.title, order_goods.count, goods.price, goods.price * order_goods.count AS amount FROM `goods` INNER JOIN `order_goods` ON goods.id = order_goods.id_good INNER JOIN `orders`ON order_goods.id_orders = orders.id WHERE orders.id = %d';
    $query = sprintf($sql, $idOrder);
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die(mysqli_error($connection));
    }
    $orderGoods = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $orderGoods[] = $row;
    }

    return $orderGoods;
}