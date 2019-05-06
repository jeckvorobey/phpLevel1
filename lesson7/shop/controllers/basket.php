<?php
session_start();
include_once '../models/modelBasket.php';
include_once '../blocks/db_request.php';

if (isset($_POST['id'])) {
    $goodId = (int)$_POST['id'];

    if(isset($_SESSION['login']) && isset($_SESSION['pass'])) {
        $userId = $_SESSION['id'];
    }else $userId = session_id();
    $good = goods_get($connection, $id);
    $goodRow = get_basket_row($connection, $userId, $goodId);
    if(mysqli_num_rows($goodRow) > 0){
        $upCount = up_date_count($connection, $userId, $goodId);
        echo $data = json_encode($goodRow['count']);
    } else {
        $addGood = add_basket($connection, $userId, $goodId);
        echo $data = json_encode($good['author']. ' : ' .$good['title']. 'успешно добавлен');
    
    }

    
    // echo $data = json_encode($userId);
};

