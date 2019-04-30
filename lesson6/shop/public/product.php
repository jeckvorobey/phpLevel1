<?php

//приводим id к цислу во избежание инъекций
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
}
include_once '../blocks/db_request.php'; //импортируем файл с функциями
$good = goods_get($connection, $id); //запрашиваем функцию получения товара из БД
// print_r($good);
?>
<!doctype html>
<html lang="ru">
<?php
$head = file_get_contents('../templates/head.tpl');
echo $head;
?>

<body>
    <div class="container">
        <?php
        $header = file_get_contents('../templates/header.tpl');
        echo $header;
        ?>
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
                <a href="#" class="buy">Купить</a>
            </div>
        </div>
        <h2>
            Аннотация к книге <?=$good['title']; ?>:
        </h2>
        <p class="Anotaciya">
            <?=$good['annotation']; ?>
        </p>
        <?php
        $footer = file_get_contents('../templates/footer.tpl');
        echo $footer;
        ?>
    </div>
</body>

</html>