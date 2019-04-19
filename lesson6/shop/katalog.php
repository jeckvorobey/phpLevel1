<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Книжный магазин</title>
    <link rel="stylesheet" href="./Style.css">
</head>

<body>
    <div class="container">
        <header>
            <div id="logo">
                <img src="./img/book-logo.jpg" alt="book-logo"> Книжный магазин.
            </div>
            <ul class="menu">
                <li><a href="index.php">Главная</a></li>
                <li><a href="katalog.php">Каталог</a></li>
                <li><a href="contact.php">Контакты</a></li>
            </ul>
        </header>
        <hr>
        <h1>
            Каталог
        </h1>
        <div id="product-catalog">
            <?=include 'blocks/addkatalog.php'; ?>

          <!--  <div class="product">
                <h4>
                    Федор Достоевский: Идиот
                </h4>
                <img src="../ShopBooks/img/products/idiot.png" alt="Идиот" title="Федор Достоевский: Идиот">
                <p>Цена: 100 руб.</p>

                <a href="../ShopBooks/products/idiot.html">Подробнее...</a>
            </div>
            <div class="product">
                <h4>
                    Наталья Жарова: Невеста по приказу
                </h4>
                <img src="../ShopBooks/img/products/NevestaPoPrikazu.png" alt="Невеста по приказу" title="Наталья Жарова: Невеста по приказу">
                <p>Цена: 150 руб.</p>

                <a href="../ShopBooks/products/NevestaPoPrikazu.html">Подробнее...</a>
            </div>
            <div class="product">
                <h4>
                    Джек Лондон: Сердца трех
                </h4>
                <img src="../ShopBooks/img/products/serdcatreh.jpg" alt="Сердца трех" title="Джек Лондон: Сердца трех">
                <p>Цена: 100 руб.</p>

                <a href="../ShopBooks/products/serdcatreh.html">Подробнее...</a>
            </div>
            <div class="product">
                <h4>
                    ФМэт Фицджеральд: Как сильно ты этого хочешь?
                </h4>
                <img src="../ShopBooks/img/products/KakSilnoTiEtogoHochesh.png" alt="Как сильно ты этого хочешь?" title="Мэт Фицджеральд: Как сильно ты этого хочешь?">
                <p>Цена: 200 руб.</p>

                <a href="../ShopBooks/products/KakSilnoTiEtogoHochesh.html">Подробнее...</a>
            </div>
            <div class="product">
                <h4>
                    Мелинда Солсбери Дочь Пожирательницы Грехов
                </h4>
                <img src="../ShopBooks/img/products/DochPosgiratelniciGrehov.jpg" alt="Дочь Пожирательницы Грехов" title="Мелинда Солсбери: Дочь Пожирательницы Грехов">
                <p>Цена: 200 руб.</p>
                <a href="../ShopBooks/products/DochPosgiratelniciGrehov.html">Подробнее...</a>
            </div> -->

        </div>
        <footer>
            <p>
                &copy;"Все права защищены"
            </p>
        </footer>
    </div>
</body>

</html>
