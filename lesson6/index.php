<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta lang="ru" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Lesson 6</title>
</head>
<body>
    <p>Калькулятор задание 1</p>
    <form action="server.php" method="get">
        <input class="num" type="text" name="num1">
        <select name="operation" required>
            <option value="operation">Выберите операцию</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input class="num" type="text" name="num2">
        <input type="submit" name='btn' value="=">
        <span>
            <?php
                session_start();
                echo $_SESSION['res'];
            ?>
        </span>
    </form>
    <hr>
    <p>Калькулятор задание 2</p>
    <form action="server.php" method="post">
        <input class="num" type="text" name="number1">
        <input class="num" type="text" name="number2">
        <span>=</span>
        <span>
            <?php
                echo $_SESSION['res1'];
            ?>
        </span>
        <br>
        <br>
        <input type="submit" name='operation' value="+">
        <input type="submit" name='operation' value="-">
        <input type="submit" name='operation' value="*">
        <input type="submit" name='operation' value="/">
    </form>
</body>