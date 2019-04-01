<?php

//Task 1
echo "<h4>Task 1:</h4>";

function funC($a, $b)
{
    if ($a >= 0 && $b >= 0) {
        $x = $a - $b;
        echo "<p>a и b положительные: $x</p>";
    } else if ($a < 0 && $b < 0) {
        $x = $a * $b;
        echo "<p>a и b отрицательные: $x</p>";
    } else {
        $x = $a + $b;
        echo "<p>a и b разныз знаков: $x </p>";
    }
}

;

funC(16, 10);
funC(-2, -5);
FunC(6, -5);

//Task 2
echo "<h4>Task 2:</h4>";
$a = rand(0, 15);
echo "<p> \$a = $a</p>";
switch ($a) {
    case 0:
        echo "<p>0</p>";
    case 1:
        echo "<p>1</p>";
    case 2:
        echo "<p>2</p>";
    case 3:
        echo "<p>3</p>";
    case 4:
        echo "<p>4</p>";
    case 5:
        echo "<p>5</p>";
    case 6:
        echo "<p>6</p>";
    case 7:
        echo "<p>7</p>";
    case 8:
        echo "<p>8</p>";
    case 9:
        echo "<p>9</p>";
    case 10:
        echo "<p>10</p>";
    case 11:
        echo "<p>11</p>";
    case 12:
        echo "<p>12</p>";
    case 13:
        echo "<p>13</p>";
    case 14:
        echo "<p>14</p>";
    case 15:
        echo "<p>15</p>";
}

//Task 3
function sum($x, $y)
{
    return $z = $x + $y;
}

function sub($x, $y)
{
    return $z = $x - $y;
}

function mult($x, $y)
{
    return $z = $x * $y;
}

function division($x, $y)
{
    return $z = $x / $y;
}

//Task 4
echo "<h4>Task 4:</h4>";

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case '+':
            return sum($arg1, $arg2);
            break;
        case '-':
            return sub($arg1, $arg2);
            break;

        case '*':
            return mult($arg1, $arg2);
            break;

        case '/':
            return division($arg1, $arg2);
            break;

    }
}

echo "<p>" . mathOperation(5, 5, '+') . "</p>";
echo "<p>" . mathOperation(15, 12, '-') . "</p>";
echo "<p>" . mathOperation(2, 16, '*') . "</p>";
echo "<p>" . mathOperation(18, 3, '/') . "</p>";

//Task 6
echo "<h4>Task 6:</h4>";
function power($val, $pow)
{
    if ($pow == 0) {
        return 1;
    }
    if ($pow < 0) {
        return power(1 / $val, -$pow);
    }
    if ($pow > 0) {
        return $val * power($val, $pow - 1);
    }
}

$pow = power(3, 5);
echo "<p>" . $pow . "</p>";

//Task 7
echo "<h4>Task 7:</h4>";

function currentTime ($d, $arr)
{
    $result = $d . ' '; // формируем начало строки
    //условие склонения
    switch (($d >= 20) ? $d % 10 : $d) {
        case 1:
            $result .= $arr[0];
            break;
        case 2:
            $result .= $arr[1];
            break;
        case 3:
            $result .= $arr[1];
            break;
        case 4:
            $result .= $arr[1];
            break;
        default:
            $result .= $arr[2];
    }
    return $result;//Возвращаем результат
}

$hours = ['час ', 'часа ', 'часов ']; //массив со склонениями часов
$minutes = [' минута', ' минуты', ' минут']; //массив со склонениями минут

echo "<p>" . currentTime(date('H'), $hours) . currentTime(date('i'), $minutes) . "</p>"; //рендерим в DOM