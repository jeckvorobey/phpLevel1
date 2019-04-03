<?php
//задание 1
echo "<h4> Task 1 </h4>";

$i = 1; //Счетчик
$result; //переменная куда заносим результат выполнения условия
while ($i <= 100) {
    if ($i % 3 === 0) {
        $result .= $i . " ";
    }
    $i++;
}
echo "<p>" . $result . "</p>";

//задание 2
echo "<h4> Task 2 </h4>";

function number()
{
    $i = 0;
    $result;
    do {
        if ($i === 0) {
           $result .= $i . " - Это ноль.<br>";
        } elseif ($i % 2 !== 0) {
            $result .= $i ." - Это нечётное число.<br>";
        } else {
            $result .= $i ." - Это чётное число.<br>";
        }
        $i++;
    }
     while ($i <= 10);
     return $result;
}
echo number();
