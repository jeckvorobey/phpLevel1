<?php

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
}
include_once '../blocks/db_request.php';
$good = goods_get($connection, $id);
?>
<!DOCTYPE html>
<html lang="ru">
<?php
$head = file_get_contents('../admin/tpl/head.tpl');
echo $head;
?>

<body>
    <h1><?=$good['author'].': '.$good['title']; ?></h1>
    <div class="product-block">
        <div class="product-pic">
            <img class="pic" src="<?='../public/img/products/'.$good['imgName']; ?>" alt="<?=$good['title']; ?>">
        </div>
        <table class=product-info>
            <caption>
                Информация
            </caption>
            <tr class="table-stroka1">
                <td><img src="../public/img/spisoktovar.jpg" alt="kniga"></td>
                <td> <b>Автор:</b> </td>
                <td><?=$good['author']; ?></td>
            </tr>
            <tr>
                <td><img src="../public/img/spisoktovar.jpg" alt="kniga"></td>
                <td><b>Издательство:</b></td>
                <td><?=$good['pubHouse'].', '.$good['yearPublishing'].'г.'; ?></td>
            </tr>
            <tr>
                <td><img src="../public/img/spisoktovar.jpg" alt="kniga"></td>
                <td><b>Серия:</b></td>
                <td><?=$good['series']; ?></td>
            </tr>
            <tr>
                <td><img src="../public/img/spisoktovar.jpg" alt="kniga"></td>
                <td><b>ISBN:</b></td>
                <td><?=$good['isbn']; ?></td>
            </tr>
            <tr>
                <td><img src="../public/img/spisoktovar.jpg" alt="kniga"></td>
                <td><b>Стоимость:</b></td>
                <td><?=$good['price'].' Руб'; ?></td>
            </tr>
        </table>
        <div class="produck-opisanie">
            <h2>Описание:</h2>
            <p class="MalOpisanie">
                <?=$good['description']; ?>
            </p>
        </div>
    </div>
    <h2>
        Аннотация к книге <?=$good['title']; ?>:
    </h2>
    <p class="Anotaciya">
        <?=$good['annotation']; ?>
    </p>
</body>