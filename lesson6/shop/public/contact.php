<!DOCTYPE html>
<html lang="ru">

<?php
$head = file_get_contents('../templates/head.tpl');
echo $head;
?>

<body>
    <div class="container">
        <?php
        $header = file_get_contents('../templates/header.tpl');
        echo $header;
        ?>
        <h1>
            Контакты
        </h1>
        <form>
            <fieldset id="forma">
                <legend>Связь с нами:</legend>
                <input type="text" placeholder="Введите свое Имя"><br>
                <input type="text" id="contakt-email" placeholder="Введите ваш e-mail "><br>
                <input type="text" placeholder="Тема сообщения"><br>

                <label for="Text">Текст Вашего письма:</label><br>
                <textarea id="Text" cols="30" rows="5" size="300" placeholder="Максимум 300 символов"></textarea>

            </fieldset>
            <fieldset id="login">
                <legend>для отправки сообщения авторизуйтесь</legend>
                <label for="imya">Ваш логин:</label>
                <input id="imya" type="text" placeholder="Ваш Email"><br>
                <label for="pass">Введите пароль:</label>
                <input id="pass" type="password" placeholder="Ваш пароль"><br>
                <i><input type="button" value="Вход"></i>
                <i><input type="reset" value="Очистить"></i>
                <i><input type="button" value="Регистрация"></i>
            </fieldset>
        </form>
        <h2>
            Адрес
        </h2>
        <p>
            <b>Телефон</b> +71234567878 <br>
            <b>Адрес:</b> г.Смоленск ул.Городок Коминтерна д.2 <br>
            <b>Email:</b> contact@bookshop.ru <br>
        </p>
        <script type="text/javascript" charset="utf-8" async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af63c54e5a30740b18356fc4c7504eea417cf8050ba1d2388b5a7ed3bfceaa054&amp;width=100%25&amp;height=374&amp;lang=ru_RU&amp;scroll=true">
        </script>
        <?php
        $footer = file_get_contents('../templates/footer.tpl');
        echo $footer;
        ?>
    </div>
</body>

</html>