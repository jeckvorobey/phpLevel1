<?php
//Блок с алфавитом и функтиями транслитерации
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
            $chunks[$i] = join('', (array) $chunk);
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