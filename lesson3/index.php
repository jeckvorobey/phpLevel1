<?php
//задание 1
echo "<h4> Task 1 </h4>";

$i = 1; //Счетчик
$result = null; //переменная куда заносим результат выполнения условия
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
    $result = null;
    do {
        if ($i === 0) {
            $result .= $i . " - Это ноль.<br>";
        } elseif ($i % 2 !== 0) {
            $result .= $i . " - Это нечётное число.<br>";
        } else {
            $result .= $i . " - Это чётное число.<br>";
        }
        $i++;
    } while ($i <= 10);
    return $result;
}

echo number();

//Задание 3
echo "<h4> Task 3 </h4>";

$regions = [
    'Московская область' => ['Клин,', 'Зеленоград,', 'Солнечногорск'],
    'Смоленская область' => ['Гагарин,', 'Вязьма, ', 'Рославль'],
    'Тверская область' => ['Ржев,', 'Торжок,', 'Вышний Волочек']
];
foreach ($regions as $region => $sity) {
    $res .= "<p>" . $region . ": ";
    foreach ($sity as $item) {
        $res .= $item . " ";
    }
    $res .= "</p>";
}
echo $res;

//Задание 4
echo "<h4> Task 4 </h4>";

$alphabet = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e',
    'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'i', 'к' => 'k',
    'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r',
    'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
    'ч' => 'ch', 'ь' => '', 'ы' => 'y', 'ъ' => '', 'ш' => 'sh', 'щ' => 'shch',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'А' => 'A', 'Б' => 'B', 'В' => 'V',
    'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
    'И' => 'I', 'Й' => 'I', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N',
    'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U',
    'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Shch',
    'Ь' => '', 'Ы' => 'Y', 'Ъ' => '', 'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
];
function str_split_unicode($str, $length = 1) {
    $tmp = preg_split('~~u', $str, -1, PREG_SPLIT_NO_EMPTY);
    if ($length > 1) {
        $chunks = array_chunk($tmp, $length);
        foreach ($chunks as $i => $chunk) {
            $chunks[$i] = join('', (array) $chunk);
        }
        $tmp = $chunks;
    }
    return $tmp;
}

function transliteration($str, $alphabet)
{
    $arr = str_split_unicode($str);
//    print_r($arr);
    foreach ($arr as $value) {
        foreach ($alphabet as $key => $item) {
            if ($value === $key) {
                $arr1[$value] = $item;
                print_r($arr1) ;
            }
        }
    }
}

$str = "Выполнил третье задание";
//var_dump($str);
//echo transliteration($str, $alphabet);