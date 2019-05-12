<?php

session_start();
include_once '../models/model.php';

if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {
    $userId = $_SESSION['id'];
} else {
    $userId = session_id();
}

$goods = table_goods($connection, $userId);
// print_r($goods);

echo '<table class="col-12 table-goods">';
echo '<tr><th>Автор</th><th>Название</th><th>Количество</th><th>Цена</th><th>Стоимость</th></tr>';

foreach ($goods as $good) {
    echo '<tr>';
    echo '<td>'.$good['author'].'</td>';
    echo '<td>'.$good['title'].'</td>';
    echo '<td>'.$good['count'].'</td>';
    echo '<td>'.$good['price'].' руб.</td>';
    echo '<td>'.$good['amount'].' руб.</td>';
    echo '</tr>';
}

echo '</table>';