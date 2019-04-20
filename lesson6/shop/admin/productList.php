<?php

require_once '../blocks/sqlconnect.php';
$sql = 'SELECT * FROM `goods` ORDER BY `goods`.`id` ASC';
$result = mysqli_query($connection, $sql);
    if (!$result) {
        die(mysql_error($result));
    }
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li>';
            echo '<span class="idItem">'.$row['id'].'</span>';
            echo '<span class="authorItem">'.$row['author'].'</span>';
            echo '<span class="titleItem">"'.$row['title'].'"</span>';
            echo '</li>';
        }
    }
