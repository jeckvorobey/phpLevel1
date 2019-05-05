<?php
session_start();
//приводим id к цислу во избежание инъекций
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
}
include_once '../blocks/db_request.php'; //импортируем файл с функциями
$good = goods_get($connection, $id); //запрашиваем функцию получения товара из БД
// print_r($good);
include '../templates/head.php';
?>

<body>
    <div class="container">
        <div class="row">
            <?php
        include '../templates/header.php';
        ?>
            <h1><?=$good['author'].': '.$good['title']; ?></h1>
            <div class="product-block">
                <div class="product-pic">
                    <img class="pic" src="<?='../public/img/products/'.$good['imgName']; ?>"
                        alt="<?=$good['title']; ?>">
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
                    <button type="button" class="add-to-cart btn btn-warning" value="<?=$good['id']; ?>">В корзину</button>
                </div>
            </div>
            <h2>
                Аннотация к книге <?=$good['title']; ?>:
            </h2>
            <p class="Anotaciya">
                <?=$good['annotation']; ?>
            </p>
            <?php
        include '../templates/footer.php';
        ?>
        </div>
    </div>
</body>

</html>