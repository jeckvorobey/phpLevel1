<?php

include_once '../blocks/db_request.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $imgName = trim(strip_tags($_GET['imgName']));
    good_del($connection, $id);
    unlink('../public/img/products/'.$imgName);
    header('Location: ../admin/index.php');
}