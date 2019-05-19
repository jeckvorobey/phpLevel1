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
    echo '<tr class="table-row">';
    echo '<td>'.$myOrders[$key]['id'].'</td>';
    echo '<td>'.$myOrders[$key]['date'].'</td>';
    echo '<td>'.$myOrders[$key]['sumOrder'].' руб.</td>';
    echo '<td>'.$myOrders[$key]['name'].'</td>';
    echo '<td>'.$myOrders[$key]['index'].' '.$myOrders[$key]['region'].' '.$myOrders[$key]['regionArea'].' '.$myOrders[$key]['city'].' '.$myOrders[$key]['str'].' '.$myOrders[$key]['house'].' '.$myOrders[$key]['corps'].' '.$myOrders[$key]['flat'].'</td>';
    echo '<td>'.$myOrders[$key]['phone'].'</td>';
    echo '<td class="status-name">'.$myOrders[$key]['nameStatus'].'</td>';
    echo '<td><button type="button" class="details btn btn-outline-primary" value="'.$myOrders[$key]['id'].'">Детали</button></td>';
    if ($myOrders[$key]['nameStatus'] == 'Новый' || $myOrders[$key]['nameStatus'] == 'В обработке') {
        echo '<td><button type="button" class="cancel btn btn-outline-danger"  value="'.$myOrders[$key]['id'].'">Отменить</button></td>';
    } else {
        echo '<td class="status-name" >Отменить нельзя</td>';
    }
    echo '</tr>';
    //cancelOrder('.$myOrders[$key]['id'].'); onclick="cancelOrder('.$myOrders[$key]['id'].');"
}?>
                    </tbody>
                </table>
                <?php //print_r($myOrders);?>
            </div>

            <?php include '../templates/footer.php'; ?>
        </div>
    </div>
    <div id="modal-order">
        <!-- Сaмo oкнo -->
        <span id="close-order">X</span> <!-- Кнoпкa зaкрыть -->
        <div id="cart-order"></div>
    </div>
    <div id="overlay-order"></div><!-- Пoдлoжкa -->
</body>

</html>