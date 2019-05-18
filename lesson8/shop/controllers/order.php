<?php

session_start();
include_once '../models/model.php';
include_once '../models/modelBasket.php';
include_once '../models/modelOrder.php';

if (isset($_GET['idDelivery'])) {
    $idDelivery = (int) $_GET['idDelivery'];
    $delivery = delivery($connection, $idDelivery);
    echo $data = json_encode($delivery);
}

if (isset($_POST['orderUserId'])) {
    switch ($_POST['delivery']) {
    case 1:
        $idUser = (int) $_POST['orderUserId'];
        $idDelivery = (int) $_POST['delivery'];
        $phone = (int) $_POST['phone'];
        $idStatus = 1;
        $index = '';
        $region = '';
        $regionArea = '';
        $city = '';
        $str = '';
        $house = '';
        $corps = '';
        $flat = '';
        $flat = '';
        $data = add_order($connection, $idUser, $idStatus, $idDelivery, $index, $region, $regionArea, $city, $str, $house, $corps, $flat, $phone);

       if (!$data) {
           echo 'ошибка в оформлении заказа!';
       } else {
           $goods = table_goods($connection, $idUser);
           $userOrder = user_order($connection, $idUser);
           foreach ($goods as $key => $val) {
               $idGood = $goods[$key]['id'];
               $idUser = $userOrder['id_user'];
               $goodCount = $goods[$key]['count'];
               $idOrder = $userOrder['id'];
               $goodOrder = add_good_order($connection, $idOrder, $idGood, $goodCount);
               if ($goodOrder) {
                   $delBasket = del_row_basket($connection, $idGood, $idUser);
               }
           }
           $upStatusOrder = up_status_order($connection, $userOrder['id'], $newStatus = 2);
           header('Location: ../public/personalArea.php?successfulOrder');
       }
        break;
    case 2:
        $idUser = (int) $_POST['orderUserId'];
        $idDelivery = (int) $_POST['delivery'];
        $phone = $_POST['phone'];
        $idStatus = 1;
        $index = '';
        $region = '';
        $regionArea = '';
        $city = $_POST['city'];
        $str = $_POST['str'];
        $house = $_POST['house'];
        $corps = $_POST['corps'];
        $flat = $_POST['flat'];
        $data = add_order($connection, $idUser, $idStatus, $idDelivery, $index, $region, $regionArea, $city, $str, $house, $corps, $flat, $phone);

       if (!$data) {
           echo 'ошибка в оформлении заказа!';
       } else {
           $goods = table_goods($connection, $idUser);
           $userOrder = user_order($connection, $idUser);
           foreach ($goods as $key => $val) {
               $idGood = $goods[$key]['id'];
               $idUser = $userOrder['id_user'];
               $goodCount = $goods[$key]['count'];
               $idOrder = $userOrder['id'];
               $goodOrder = add_good_order($connection, $idOrder, $idGood, $goodCount);
               if ($goodOrder) {
                   $delBasket = del_row_basket($connection, $idGood, $idUser);
               }
           }
           $upStatusOrder = up_status_order($connection, $userOrder['id'], $newStatus = 2);
           header('Location: ../public/personalArea.php?successfulOrder');
       }
        break;
    case 3:
    print_r($_POST);
        $idUser = (int) $_POST['orderUserId'];
        $idDelivery = (int) $_POST['delivery'];
        $phone = $_POST['phone'];
        $idStatus = 1;
        $index = $_POST['index'];
        $region = $_POST['region'];
        $regionArea = $_POST['regionArea'];
        $city = $_POST['city'];
        $str = $_POST['str'];
        $house = $_POST['house'];
        $corps = $_POST['corps'];
        $flat = $_POST['flat'];
        $data = add_order($connection, $idUser, $idStatus, $idDelivery, $index, $region, $regionArea, $city, $str, $house, $corps, $flat, $phone);

       if (!$data) {
           echo 'ошибка в оформлении заказа!';
       } else {
           $goods = table_goods($connection, $idUser);
           $userOrder = user_order($connection, $idUser);
           foreach ($goods as $key => $val) {
               $idGood = $goods[$key]['id'];
               $idUser = $userOrder['id_user'];
               $goodCount = $goods[$key]['count'];
               $idOrder = $userOrder['id'];
               $goodOrder = add_good_order($connection, $idOrder, $idGood, $goodCount);
               if ($goodOrder) {
                   $delBasket = del_row_basket($connection, $idGood, $idUser);
               }
           }
           $upStatusOrder = up_status_order($connection, $userOrder['id'], $newStatus = 2);
           header('Location: ../public/personalArea.php?successfulOrder');
       }
        break;
    }
}