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

        <div class="row no-gutters">
            <h4 class="col-12">Оформление заказа: </h4>
            <?php include '../controllers/tableGoods.php'; ?>
            <div class="row no-gutters col-12">
                <form class="form-order form-group col-4" action="../controllers/order.php" method="post">
                    <select class="custom-select mt-2" name="delivery" id="delivery" required>
                        <option value="0">Выберете способ доставки</option>
                        <option value="1" data-price="0">Самовывоз 0 руб.</option>
                        <option value="2" data-price="300">Курьером по городу 300 руб.</option>
                        <option value="3" data-price="500">Почтой России 500 руб.</option>
                    </select>

                    <button type="submit" class="order btn btn-success mt-2">Подтвердить</button>
                </form>
                <div class="col-5">
                    <p>Итого товаров: <?=$totalCount; ?> шт.</p>
                    <p class="sumGoods" data-sum="<?=$totalAmount; ?>">на сумму: <?=$totalAmount; ?> руб.</p>
                    <p class="delivery">Доставка:</p>
                    <p class="total">Итого к оплате:</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php include_once '../templates/footer.php'; ?>
        </div>
    </div>
</body>

</html>