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
                            <th scope="col">Адрес доставки</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Статус заказа</th>
                            <th scope="col">Список товаров</th>
                            <th scope="col">Отмена заказа</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($myOrders as $key => $val) {
    echo '<tr>';
    echo '<td>'.$myOrders[$key]['id'].'</td>';
    echo '<td>'.$myOrders[$key]['date'].'</td>';
    echo '<td>500 rub</td>';
    echo '<td>'.$myOrders[$key]['name'].'</td>';
    echo '<td>'.$myOrders[$key]['index'].' '.$myOrders[$key]['region'].' '.$myOrders[$key]['regionArea'].' '.$myOrders[$key]['city'].' '.$myOrders[$key]['str'].' '.$myOrders[$key]['house'].' '.$myOrders[$key]['corps'].' '.$myOrders[$key]['flat'].'</td>';
    echo '<td>'.$myOrders[$key]['phone'].'</td>';
    echo '<td>'.$myOrders[$key]['nameStatus'].'</td>';
    echo '<td>Кнопка товаров</td>';
    echo '<td>Кнопка отмены</td>';
    echo '</tr>';
}?>
                        <!--<tr>
                            <td>1</td>
                            <td>29-05-2019</td>
                            <td>500 руб.</td>
                            <td>самовывоз</td>
                            <td>55184561654</td>
                            <td>Новый</td>
                            <td>Кнопка товаров</td>
                            <td>Кнопка отмены</td>
                        </tr>-->
                    </tbody>
                </table>
                <?php //print_r($myOrders);?>
            </div>

            <?php include '../templates/footer.php'; ?>
        </div>
    </div>
</body>

</html>