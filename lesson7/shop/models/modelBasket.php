<?php 

require_once '../blocks/sqlconnect.php';

function get_basket_row ($connection, $userId, $goodId) 
{
    $idGood = (int)$goodId;
    $sql = "SELECT * FROM `basket` WHERE `id_good`='%d' and `id_user`='%s'";
    $query = sprintf($sql, $idGood, mysqli_escape_string($connection, $userId));
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die(mysqli_error($connection));
    }

    return $result;
}

function up_date_count ($connection, $userId, $goodId) 
{
    $idGood = (int)$goodId;
    $sql = "UPDATE `basket` SET `count`='count++' WHERE `id_good`='%d' and `id_user`='%s'";
    $query = sprintf($sql, $idGood, mysqli_escape_string($connection, $userId));
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    return mysqli_affected_rows($connection);
}

function add_basket ($connection, $userId, $goodId)
{
    $idGood = (int)$goodId;
    $sql = "INSERT INTO `basket`(`id_good`, `count`, `id_user`) VALUES ('%d', 1, '%s')";
    $query = sprintf($sql, $idGood, mysqli_escape_string($connection, $userId));
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    return true;
}