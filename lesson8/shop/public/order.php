<?php
session_start();
?>
<!DOCTYPE html>
<html lang="RU">
<?php include_once '../templates/head.php'; ?>

<body>
    <div class="container">
        <div class="row">
            <?php include_once '../templates/header.php'; ?>
        </div>

        <div class="row">
            <h4 class="col-12">Оформление заказа: </h4>
            <?php include '../controllers/tableGoods.php'; ?>
            <form class="form-order" action="../controllers/order.php" method="post">
                <select name="delivery" id="delivery" required>
                    <option>Выберете способ доставки</option>
                    <option value="1" data-price="0">Самовывоз 0 руб.</option>
                    <option value="2" data-price="300">Курьером по городу 300 руб.</option>
                    <option value="3" data-price="500">Почтой России 500 руб.</option>
                </select>
                <button type="submit" class="btn btn-success">Подтвердить</button>
            </form>
        </div>

        <div class="row">
            <?php include_once '../templates/footer.php'; ?>
        </div>
    </div>
</body>

</html>