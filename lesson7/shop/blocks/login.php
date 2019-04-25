<?php

include_once '../blocks/db_request.php';

if (isset($_POST['entry'])) {
    $login = (!empty($_POST['login'])) ? trim(strip_tags($_POST['login'])) : '';
    $pass = (!empty($_POST['pass'])) ? trim(strip_tags($_POST['pass'])) : '';
    $pass = hashPass($pass);
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
    $_SESSION['email'] = $user['email'];
    $_SESSION['phone'] = $user['phone'];
    // print_r($_SESSION);
    header('Location: ../public/personalArea.php');
}

if (isset($_POST['registration'])) {
    $login = (!empty($_POST['login'])) ? trim(strip_tags($_POST['login'])) : '';
    $pass = (!empty($_POST['pass'])) ? trim(strip_tags($_POST['pass'])) : '';
    $pass = hashPass($pass);
    $surname = (!empty($_POST['surname'])) ? trim(strip_tags($_POST['surname'])) : '';
    $name = (!empty($_POST['name'])) ? trim(strip_tags($_POST['name'])) : '';
    $middleName = (!empty($_POST['middleName'])) ? trim(strip_tags($_POST['middleName'])) : '';
    $email = (!empty($_POST['email'])) ? trim(strip_tags($_POST['email'])) : '';
    $phone = (!empty($_POST['phone'])) ? trim(strip_tags($_POST['phone'])) : '';
    $newUser = newUser($connection, $login, $pass, $surname, $name, $middleName, $phone, $email);
    if (!$newUser) {
        header('Location: ../public/formAuth.php?errorReg');
        exit;
    }
    $_SESSION['login'] = $user['login'];
    $_SESSION['pass'] = $user['pass'];
    $_SESSION['id'] = $user['id'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['surname'] = $user['surname'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['middleName'] = $user['middleName'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['phone'] = $user['phone'];
    header('Location: ../public/formAuth.php?success');
}

if (isset($_GET['action']) == 'logout') {
    unset($_SESSION['login']);
    unset($_SESSION['pass']);
    unset($_SESSION['id']);
    unset($_SESSION['role']);
    unset($_SESSION['surname']);
    unset($_SESSION['name']);
    unset($_SESSION['middleName']);
    unset($_SESSION['email']);
    unset($_SESSION['phone']);
    session_destroy();
    header('Location: ../public/index.php');
}
