<?php

require_once '../blocks/sqlconnect.php';
$sql = 'SELECT * FROM `goods` ORDER BY `goods`.`id` ASC';
$result = mysqli_query($connection, $sql);
    if (!$result) {
        die(mysql_error($result));
    }
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td><a class="del" href="#"><img src="../admin/img/rubbish-bin.png"></a></td>';
            echo '<td><a class="edit" href="../admin/edit_goods.php?id='.$row['id'].'"><img src="../admin/img/edit.png"></a></td>';
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['author'].'</td>';
            echo '<td>"'.$row['title'].'"</td>';
            echo '</tr>';
        }
    }