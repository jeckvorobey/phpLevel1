<?php

include_once '../models/modelBasket.php';
include_once '../blocks/db_request.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $good = goods_get($connection, $id);
    print $data = json_encode($good);
};
