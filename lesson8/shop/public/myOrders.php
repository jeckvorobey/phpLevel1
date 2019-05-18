<?php
include_once '../controllers/myOrders.php';
?>
<!DOCTYPE html>
<html lang="RU">
<?php
include '../templates/head.php';
?>

<body>
    <div class="container">
        <div class="row">
            <?php include '../templates/header.php'; ?>

            <div class="row col-12">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Номер заказа</th>
                            <th scope="col">Дата заказа</th>
                            <th scope="col">Заказ на сумму</th>
                            <th scope="col">Доставка</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Статус заказа</th>
                            <th scope="col">Список товаров</th>
                            <th scope="col">Отмена заказа</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>29-05-2019</td>
                            <td>500 руб.</td>
                            <td>самовывоз</td>
                            <td>55184561654</td>
                            <td>Новый</td>
                            <td>Кнопка товаров</td>
                            <td>Кнопка отмены</td>
                        </tr>
                    </tbody>
                </table>
                <?php print_r($orderGoods); ?>
            </div>

            <?php include '../templates/footer.php'; ?>
        </div>
    </div>
</body>

</html>