<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta lang="ru" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Lesson 6</title>
</head>
<body>
<?php
if (isset($_GET['btn'])) {
    $num1 = (isset($_GET['num1'])) ? (int) $_GET['num1'] : 0;
    $num2 = (isset($_GET['num2'])) ? (int) $_GET['num2'] : 0;
    $operation = $_GET['operation'];
    $res = mathOperation($num1, $num2, $operation);
}
//калькулятор задание 2
if (isset($_POST['operation'])) {
    $number1 = (isset($_POST['number1'])) ? (int) $_POST['number1'] : 0;
    $number2 = (isset($_POST['number2'])) ? (int) $_POST['number2'] : 0;
    $op = $_POST['operation'];
    $result = mathOperation($number1, $number2, $op);
}
//функция калькуляции
function mathOperation($num1, $num2, $operation)
{
    switch ($operation) {
        case '+':
            return $num1 + $num2;
            break;
        case '-':
            return  $num1 - $num2;
            break;

        case '*':
           return $num1 * $num2;
            break;

        case '/':
        if ($num2 === 0) {
            return 'на ноль делить нельзя!';
            break;
        }

        return $num1 / $num2;
        break;
        default: return 'выберете операцию';
    }
}
?>
    <p>Калькулятор задание 1</p>
    <form action="#" method="get">
        <input class="num" type="text" name="num1" value="<?=$_GET['num1']; ?>">
        <select name="operation" required>
            <option value="operation">Выберите операцию</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input class="num" type="text" name="num2" value="<?=$_GET['num2']; ?>">
        <input type="submit" name='btn' value="=">
        <span><?=$res; ?> </span>
    </form>
    <hr>
    <p>Калькулятор задание 2</p>
    <form action="#" method="post">
        <input class="num" type="text" name="number1" value="<?=$_POST['number1']; ?>">
        <input class="num" type="text" name="number2" value="<?=$_POST['number2']; ?>">
        <span>=</span>
        <span><?=$result; ?></span>
        <br>
        <br>
        <input type="submit" name='operation' value="+">
        <input type="submit" name='operation' value="-">
        <input type="submit" name='operation' value="*">
        <input type="submit" name='operation' value="/">
    </form>
</body>