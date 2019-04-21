<!DOCTYPE html>
<html lang="ru">
<?php
$head = file_get_contents('../admin/tpl/head.tpl');
echo $head;
?>

<body>
    <div class="container">
        <h1>администрирование магазина</h1>
    </div>
    <table class="product-list">
        <caption>Список товаров:</caption>
        <tbody>
            <tr>
                <th></th>
                <th></th>
                <th>ID</th>
                <th>Автор</th>
                <th>Название</th>
            </tr>
            <?php include '../admin/productList.php'; ?>
        </tbody>
    </table>
</body>

</html>