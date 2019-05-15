<?php

include_once '../models/model.php';
include_once '../models/modelOrder.php';

if (isset($_GET['idDelivery'])) {
    $idDelivery = (int) $_GET['idDelivery'];
    $delivery = delivery($connection, $idDelivery);
    echo $data = json_encode($delivery);
}