<?php

//скрипт подключения к БД

$sqlserver = 'localhost';
$sqluser = 'root';
$sqlpass = '123Qw!';
$sqlbase = 'shopbooks';

$connection = mysqli_connect($sqlserver, $sqluser, $sqlpass, $sqlbase);
mysqli_set_charset($connection, 'utf8');

if (!$connection) {
    echo 'Ошибка: Невозможно установить соединение с MySQL<br>';
    echo '<br>Код ошибки errno: '.mysqli_connect_errno();
    echo '<br>Текст ошибки error: '.mysqli_connect_error();
    exit;
}
