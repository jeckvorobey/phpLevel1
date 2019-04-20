<?php
include_once '../blocks/db_request.php';
?>

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
    <h4>список товаров:</h4>
    <ul class="product-list">
        <li><span class="captionId">id</span><span class="captionAuthor">автор</span
                class="captionTitle"><span>название</span></li>
        <?php include '../admin/productList.php'; ?>
    </ul>
</body>

</html>