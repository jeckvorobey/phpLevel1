<?php

require_once '../blocks/sqlconnect.php';

function delivery($connection, $idDelivery)
{
    $sql = "SELECT * FROM `delivery` WHERE `id`='%d'";
    $query = sprintf($sql, mysqli_escape_string($connection, (int) $idDelivery));
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    $delivery = mysqli_fetch_assoc($result);

    return $delivery;
}
