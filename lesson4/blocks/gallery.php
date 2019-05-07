<?php
$smImg = scandir('images/small');

function gallery($dir, $arrImg){
    for($i = 2; $i < count($arrImg); $i++) {
        $imgCollection .= "<img class='picture' src='$dir/$arrImg[$i]' alt='priroda$arrImg[$i]'>";

    }
return $imgCollection;
}
echo gallery('images/small', $smImg);

