<?php

session_start();
include_once '../models/modelMyOrders.php'; if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {
    $idUser = $_SESSION['id'];
} else {
    header('Location: ../public/formAuth.php');
}

$myOrders = my_orders($connection, $idUser);

if (isset($_POST['idOrder'])) {
    $idOrder = $_POST['idOrder'];
    $data = up_status($connection, $idOrder);
    echo $data;
}