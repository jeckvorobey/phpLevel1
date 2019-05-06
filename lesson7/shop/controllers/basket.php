<?php
session_start();
include_once '../models/modelBasket.php';
include_once '../blocks/db_request.php';

if (isset($_POST['id'])) {
    $goodId = (int)$_POST['id'];
//получаем id user если авторизован и id его ссессии если не авторизован
    if(isset($_SESSION['login']) && isset($_SESSION['pass'])) {
        $userId = $_SESSION['id'];
    }else $userId = session_id();

    $good = goods_get($connection, $id); //получаем товар по id
    $goodRow = get_basket_row($connection, $userId, $goodId);//строка из карзины с id user и id good и количество в корзине
    if(!$goodRow){
        $addGood = add_basket($connection, $userId, $goodId); //если товара в корзине нет добавляем
        // echo $data = json_encode('успешно добавлен');
    } else {
        $count = (int)$goodRow['count'];
        $count++;
        $upCount = up_date_count($connection, $userId, $goodId, $count); //увеличиваем количество на 1
        // echo $data = json_encode($count);
    }

    // echo $data = json_encode($userId);
};

