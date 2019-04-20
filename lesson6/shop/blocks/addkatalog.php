<?php

include 'blocks/sqlconnect.php';
$sql = 'SELECT * FROM `goods`';
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $way = 'img/products/'.$row['imgName']; //путь к картинке
        $head = $row['author'].': '.$row['title']; //заголовок продукта
        $href = 'blocks/product.php?id='.$row['id']; //путь к скрипту товара
        echo '<div class="product">';
        echo '<h4>'.$head.'</h4>';
        echo '<img src="'.$way.'" alt="'.$row['title'].'" title="'.$head.'">';
        echo '<p> Цена: '.$row['price'].' руб.</p>';
        echo '<a href="'.$href.'" target="blank">Подробне...</a>';
        echo '</div>';
    }
}