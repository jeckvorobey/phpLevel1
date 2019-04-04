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
    'Московская область' => ['Клин', 'Зеленоград', 'Солнечногорск'],
    'Смоленская область' => ['Гагарин', 'Вязьма', 'Рославль'],
    'Тверская область' => ['Ржев', 'Торжок', 'Кимры']
];
foreach ($regions as $region => $sity) {
    $res .= "<p>" . $region . ": ";
    foreach ($sity as $item) {
        $res .= $item . ", ";
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

//функция правильной кодировки при преобразованиии строки в массив
function str_split_unicode($str, $length = 1)
{
    $tmp = preg_split('~~u', $str, -1, PREG_SPLIT_NO_EMPTY);
    if ($length > 1) {
        $chunks = array_chunk($tmp, $length);
        foreach ($chunks as $i => $chunk) {
            $chunks[$i] = join('', (array)$chunk);
        }
        $tmp = $chunks;
    }
    return $tmp;
}

//Функция транслитерации
function transliteration($str, $alphabet)
{
    $strArr = str_split_unicode($str); //Преобразуем строку в массив
//    print_r($arr);
    $str = ''; //инициализируем пустую строку
    foreach ($strArr as $val) {
        $str .= (isset($alphabet[$val])) ? $alphabet[$val] : $val; //Перебираем массив полученной строки и если значение совпадает с ключем массива алфавита, то присваиваем значение алфавита, иначе возвращаем значение массива строки
    }
    return $str;
}

$str = "PHP мой самый любимый язык программирования";
//var_dump($str);
echo transliteration($str, $alphabet);

//Задание 5
echo "<h4> Task 5 </h4>";

$specifiedStr = "Функция, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.";
$modifiedStr = str_replace(" ", "_", $specifiedStr);
echo "<p>" . $modifiedStr . "</p>";

//Задание 6
echo "<h4> Task 6 </h4>";
//решение задания 6 находиться по адресу lesson3/task6/index.php
$menu = [
    'home' => ['submenu', 'submenu1', 'submenu2'],
    'archive' => ['submenu', 'submenu1', 'submenu2'],
    'contact' => ['submenu', 'submenu1', 'submenu2']
];
$menuRender = "<ul id=\"menu\">";
foreach ($menu as $menuItem => $subItem) {
    $menuRender .= "<li><a href=\"#\">" . $menuItem . "</a><ul class=\"sub-menu\">";
    foreach ($subItem as $value) {
        $menuRender .= "<li><a href=\"#\">" . $value . "</a></li>";
    }
    $menuRender .= "</ul></li>";
}
$menuRender .= "</ul>";
echo $menuRender;

//Задание 7*
echo "<h4> Task 7* </h4>";

for ($n = 0; $n < 10; print $n++) {
}

//Задание 8*
echo "<h4> Task 8* </h4>";

foreach ($regions as $region => $sity) {
    foreach ($sity as $val) {
        if (mb_substr($val, 0, 1) == "К") {
            echo "<p>" . $val . "</p>";
        }
    }
}