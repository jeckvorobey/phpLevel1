<?php

session_start();
include_once '../models/model.php';
include_once '../models/modelOrder.php';

if (isset($_GET['idDelivery'])) {
    $idDelivery = (int) $_GET['idDelivery'];
    $delivery = delivery($connection, $idDelivery);
    echo $data = json_encode($delivery);
}

if (isset($_POST['orderUserId'])) {
    // print_r($_POST);
    switch ($_POST['delivery']) {
    case 1:
        // print_r($_POST);
        $addOrder = add_Order($connection, )
        break;
    case 2:
        echo 'курьером';
        break;
    case 3:
        echo 'почта';
        break;
    }
}