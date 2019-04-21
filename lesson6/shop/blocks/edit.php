<?php

include_once '../blocks/db_request.php';
if (isset($_POST['submit'])) {
    $price = (int) trim(strip_tags($_POST['price']));
    $id = (int) trim(strip_tags($_POST['id']));
    $yearPublishing = (int) trim(strip_tags($_POST['yearPublishing']));
    $author = trim(strip_tags($_POST['author']));
    $title = trim(strip_tags($_POST['title']));
    $pubHouse = trim(strip_tags($_POST['pubHouse']));
    $series = trim(strip_tags($_POST['series']));
    $isbn = trim(strip_tags($_POST['isbn']));
    $description = trim(strip_tags($_POST['description']));
    $annotation = trim(strip_tags($_POST['annotation']));
    $imgName = trim(strip_tags($_POST['imgName']));
    good_edit($connection, $id, $author, $title, $imgName, $description, $annotation, $pubHouse, $series, $yearPublishing, $isbn, $price);
    header('Location: ../admin/index.php');
}