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
            Каталог
        </h1>
        <div id="product-catalog">
            <?php include '../blocks/addkatalog.php'; ?>
        </div>
        <?php
        $footer = file_get_contents('../templates/footer.tpl');
        echo $footer;
        ?>
    </div>
</body>

</html>