<?php

include 'blocks/sqlconnect.php';
$sql = 'SELECT * FROM `goods`';
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    print_r($row);
}
