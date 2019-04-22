<?php

session_start();
include_once '../blocks/db_request.php';

$login = (!empty($_POST['login'])) ? strip_tags($_POST['login']) : '';
$pass = (!empty($_POST['pass'])) ? strip_tags($_POST['pass']) : '';
$user = auth($connection, $login, $pass);
if (!$user) {
    header('Location: ../public/formAuth.php?error');
    exit;
}
$_SESSION['login'] = $user['login'];
$_SESSION['pass'] = $user['pass'];
$_SESSION['id'] = $user['id'];
$_SESSION['role'] = $user['role'];
$_SESSION['surname'] = $user['surname'];
$_SESSION['name'] = $user['name'];
$_SESSION['middleName'] = $user['middleName'];
header('Location: ../public/personalArea.php');