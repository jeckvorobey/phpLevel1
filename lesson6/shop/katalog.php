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
        </div>
        <footer>
            <p>
                &copy;"Все права защищены"
            </p>
        </footer>
    </div>
</body>

</html>