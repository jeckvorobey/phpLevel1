<?php
$location = "localhost";
$user = "root";
$pass = "123Qw!";
$db = "gallery";

$conn = mysqli_connect($location, $user, $pass, $db);
if (!$conn) {
    die ("Error" .mysqli_error($conn));
}
