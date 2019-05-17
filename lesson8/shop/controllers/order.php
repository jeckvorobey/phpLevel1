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

      // $data = add_order($connection, $idUser, $idStatus, $idDelivery, $index, $region, $regionArea, $city, $str, $house, $corps, $flat, $phone);
        $goods = table_goods($connection, $idUser);
        //print_r($goods);
        $userOrder = user_order($connection, $idUser);
        foreach ($goods as $key => $val) {
            $idGood = $goods[$key]['id'];
            $goodCount = $goods[$key]['count'];
            $idOrder = $userOrder['id'];
            add_good_order($connection, $idOrder, $idGood, $goodCount);
        }

        //print_r($userOrder);
      // if (!$data) {
      //     echo 'ошибка в оформлении заказа!';
      // } else {
      //     echo 'Ваш заказ поступил в обработку!';
      // }
        break;
    case 2:
        echo 'курьером';
        break;
    case 3:
        echo 'почта';
        break;
    }
}
