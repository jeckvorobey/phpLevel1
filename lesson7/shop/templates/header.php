 <header>
     <div id="logo">
         <img src="../public/img/book-logo.jpg" alt="book-logo"> Книжный магазин.
     </div>
     <ul class="menu">
        <li><a href="../public/basket.php">корзина</a></li>
        <li><a href="../public/index.php">Главная</a></li>
        <li><a href="../public/katalog.php">Каталог</a></li>
        <li><a href="../public/contact.php">Контакты</a></li>
        <?php
            if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {
                echo '<li><a href="../public/personalArea.php">Личный кабинет</a></li>';
                if ($_SESSION['role'] == 1) {
                    echo '<li><a href="../admin/index.php">Админка</a></li>';
                }
                echo '<li><a href="../public/formAuth.php?action=logout">Выход</a></li>';
            } else {
                echo '<li><a href="formAuth.php">Вход</a></li>';
            }
        ?>
     </ul>
 </header>