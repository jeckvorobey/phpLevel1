<?php

// print_r($_GET);
if (isset($_GET['btn'])) {
    $num1 = (isset($_GET['num1'])) ? (int) $_GET['num1'] : 0;
    $num2 = (isset($_GET['num2'])) ? (int) $_GET['num2'] : 0;
    $operation = $_GET['operation'];
    // echo $num1, $num2, $operation;
    $res = mathOperation($num1, $num2, $operation);
    session_start();
    $_SESSION['res'] = $res;
}

//калькулятор задание 2
if (isset($_POST['operation'])) {
    $number1 = (isset($_POST['number1'])) ? (int) $_POST['number1'] : 0;
    $number2 = (isset($_POST['number2'])) ? (int) $_POST['number2'] : 0;
    $op = $_POST['operation'];
    $res = mathOperation($number1, $number2, $op);
    session_start();
    $_SESSION['res1'] = $res;
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

header('Location: http://lesson6.php1/');
