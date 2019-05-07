<?php

session_start();
include_once '../models/modelBasket.php';
include_once '../blocks/db_request.php';

//получаем id user если авторизован и id его ссессии если не авторизован
if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {
    $userId = $_SESSION['id'];
} else {
    $userId = session_id();
}

if (isset($_POST['renderBasket'])) {
    $basket = basket_all($connection, $userId);
    if (!$basket) {
        echo $data = 0;
    } else {
        $totalCount = array_sum(array_column($basket, 'count'));
        $amount = array_sum(array_column($basket, 'amount'));
        $result['totalCount'] = $totalCount;
        $result['amount'] = $amount;
        $result['contents'] = $basket;
        echo $data = json_encode($result);
    }
}

if (isset($_POST['id'])) {
    $goodId = (int) $_POST['id'];

    $goodRow = get_basket_row($connection, $userId, $goodId); //строка из карзины с id user и id good и количество в корзине
    if (!$goodRow) {
        $addGood = add_basket($connection, $userId, $goodId); //если товара в корзине нет добавляем
        echo $data = true;
    } else {
        $upCount = update_count($connection, $userId, $goodId); //увеличиваем количество на 1
        echo $data = true;
    }
}

if (isset($_POST['idGood']) && isset($_POST['action'])) {
    $idGood = (int) $_POST['idGood'];
    $action = $_POST['action'];
    switch ($action) {
        case 'del':
        $del = del_row_basket($connection, $idGood, $userId);
        echo $data = $del;
    }
}
