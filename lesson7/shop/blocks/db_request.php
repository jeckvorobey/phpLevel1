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
//редактируем товар
function good_edit($connection, $id, $author, $title, $imgName, $description, $annotation, $pubHouse, $series, $yearPublishing, $isbn, $price)
{
    $id = (int) $id;

    $sql = "UPDATE `goods` SET `author`='%s',`title`='%s',`imgName`='%s',`description`='%s',`annotation`='%s',`pubHouse`='%s',`series`='%s',`yearPublishing`='%d',`isbn`='%s',`price`='%d' WHERE `id`='%d'";

    $query = sprintf($sql, mysqli_real_escape_string($connection, $author), mysqli_real_escape_string($connection, $title), mysqli_real_escape_string($connection, $imgName), mysqli_real_escape_string($connection, $description), mysqli_real_escape_string($connection, $annotation), mysqli_real_escape_string($connection, $pubHouse), mysqli_real_escape_string($connection, $series), mysqli_real_escape_string($connection, $yearPublishing), mysqli_real_escape_string($connection, $isbn), mysqli_real_escape_string($connection, $price), $id);

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    return mysqli_affected_rows($connection);
}
//добавление товара
function Good_add($connection, $author, $title, $imgName, $description, $annotation, $pubHouse, $series, $yearPublishing, $isbn, $price)
{
    $sql = "INSERT INTO `goods`(`author`, `title`, `imgName`, `description`, `annotation`, `pubHouse`, `series`, `yearPublishing`, `isbn`, `price`) VALUES ('%s', '%s', '%s','%s', '%s', '%s', '%s', '%d', '%s', '%d')";

    $query = sprintf($sql, mysqli_real_escape_string($connection, $author), mysqli_real_escape_string($connection, $title), mysqli_real_escape_string($connection, $imgName), mysqli_real_escape_string($connection, $description), mysqli_real_escape_string($connection, $annotation), mysqli_real_escape_string($connection, $pubHouse), mysqli_real_escape_string($connection, $series), mysqli_real_escape_string($connection, $yearPublishing), mysqli_real_escape_string($connection, $isbn), mysqli_real_escape_string($connection, $price));

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    return true;
}
//удаление товара
function good_del($connection, $id)
{
    $id = (int) $id;

    if ($id == 0) {
        return false;
    }

    $query = sprintf("DELETE FROM `goods` WHERE id='%d'", $id);
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die(mysqli_error($connection));
    }

    return mysqli_affected_rows($connection);
}
//авторизация пользователя(получаем пользователя из базы)
function auth($connection, $login, $pass)
{
    $sql = "SELECT * FROM users WHERE login='$login' and pass='$pass'";

    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die(mysqli_error($connection));
    }
    $user = mysqli_fetch_assoc($result);

    return $user;
}
//Добавление нового пользователя
function newUser($connection, $login, $pass, $surname, $name, $middleName, $phone, $email)
{
    $sql = "INSERT INTO `users`(`login`, `pass`, `surname`, `name`, `middleName`, `phone`, `email`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')";
    $query = sprintf($sql, mysqli_real_escape_string($connection, $login), mysqli_real_escape_string($connection, $pass), mysqli_real_escape_string($connection, $surname), mysqli_real_escape_string($connection, $name), mysqli_real_escape_string($connection, $middleName), mysqli_real_escape_string($connection, $phone), mysqli_real_escape_string($connection, $email));
    $result = mysqli_query($connection, $query);
    if (!$result) {
        return false;
        exit;
    }

    return true;
}
//шифрование пароля
function hashPass($pass)
{
    $salt = 'jhfdkjdhfTyhdh3365@jdh69kkshhQAAAiyeg'; //соль для паролей
    $pass .= $salt;
    $result = hash('sha256', $pass); //шифруем в кодировке sha256
    return $result;
}
