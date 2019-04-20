<!DOCTYPE html>
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
        <h1>
            Главная
        </h1>
        <p>
            В&nbsp;книжном интернет магазине Вы&nbsp;можете выбрать любые книги на&nbsp;Ваш вкус, мы&nbsp;доставим все
            в&nbsp;сроки и&nbsp;в&nbsp;целостности. Также можно оформить книги под заказ и&nbsp;в&nbsp;аудиоформате.
            В&nbsp;книжном интернет магазине Вы&nbsp;можете выбрать любые книги на&nbsp;Ваш вкус, мы&nbsp;доставим все
            в&nbsp;сроки и&nbsp;в&nbsp;целостности. Также можно оформить книги под заказ и&nbsp;в&nbsp;аудиоформате.
            В&nbsp;книжном интернет магазине Вы&nbsp;можете выбрать любые книги на&nbsp;Ваш вкус, мы&nbsp;доставим все
            в&nbsp;сроки и&nbsp;в&nbsp;целостности. Также можно оформить книги под заказ и&nbsp;в&nbsp;аудиоформате.
            В&nbsp;книжном интернет магазине Вы&nbsp;можете выбрать любые книги на&nbsp;Ваш вкус, мы&nbsp;доставим все
            в&nbsp;сроки и&nbsp;в&nbsp;целостности. Также можно оформить книги под заказ и&nbsp;в&nbsp;аудиоформате.
        </p>
        <?php
        $footer = file_get_contents('../templates/footer.tpl');
        echo $footer;
        ?>
    </div>
</body>

</html>