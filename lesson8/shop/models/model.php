<?php

require_once '../blocks/sqlconnect.php';

//получаем данные для таблицы товаров
function table_goods($connection, $userId)
{
    $sql = "SELECT goods.id, `author`, `title`, `price`, basket.count, goods.price*basket.count AS amount FROM `goods` INNER JOIN `basket` ON goods.id = basket.id_good WHERE basket.id_user = '%s'";

    $query = sprintf($sql, mysqli_escape_string($connection, $userId));
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }
    $goods = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $goods[] = $row;
    }

    return $goods;
}
