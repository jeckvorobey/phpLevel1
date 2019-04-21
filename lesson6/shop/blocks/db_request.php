<?php

require_once '../blocks/sqlconnect.php';
//получаем продукт из БД
function goods_get($connection, $id)
{
    $query = sprintf('SELECT * FROM `goods` WHERE id=%d', (int) $id); //форматируем строку, защита от инъекций
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die(mysqli_error($connection)); //если нет результата выводим ошибку
    }
    $good = mysqli_fetch_assoc($result);

    return $good;
}

function good_edit($connection, $id, $author, $title, $imgName, $description, $annotation, $pubHouse, $series, $yearPublishing, $isbn, $price)
{
    $id = (int) $id;

    $sql = "UPDATE `goods` SET ,`author`=$author,`title`=$title,`imgName`=$imgName,`description`=$description,`annotation`=$annotation,`pubHouse`=$pubHouse,`series`=$series,`yearPublishing`=$yearPublishing,`isbn`=$isbn,`price`=$price WHERE `id`=$id";

    // $query = sprintf($sql, mysqli_real_escape_string($connection, $author), mysqli_real_escape_string($connection, $title), mysqli_real_escape_string($connection, $imgName), mysqli_real_escape_string($connection, $description), mysqli_real_escape_string($connection, $annotation), mysqli_real_escape_string($connection, $pubHouse), mysqli_real_escape_string($connection, $series), mysqli_real_escape_string($connection, $yearPublishing), mysqli_real_escape_string($connection, $isbn), mysqli_real_escape_string($connection, $price), $id);

    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die(mysqli_error($connection));
    }

    return mysqli_affected_rows($connection);
}
