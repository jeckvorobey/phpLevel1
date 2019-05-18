<?php

session_start();
include_once '../models/modelMyOrders.php'; if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {
    $idUser = $_SESSION['id'];
} else {
    header('Location: ../public/formAuth.php');
}

$myOrders = my_orders($connection, $idUser);
$orderGoods = [];
foreach ($myOrders as $key => $val) {
    $orderGoods = order_goods($connection, $myOrders[$key]['id']);
}

/* <?php foreach ($myOrders as $key => $val) {
    echo '<tr>';
    echo '<td>'.$myOrders[$key]['id'].'</td>';
    echo '<td>'.$myOrders[$key]['date'].'</td>';
    echo '<td>500 rub</td>';
    echo '<td>'.$myOrders[$key]['name'].'</td>';
    echo '<td>'.$myOrders[$key]['phone'].'</td>';
    echo '<td>'.$myOrders[$key]['nameStatus'].'</td>';
    echo '<td>Кнопка товаров</td>';
    echo '<td>Кнопка отмены</td>';
    echo '</tr>';
}?>*/
