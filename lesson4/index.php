<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <?php echo "<title> Gallery </title>"; ?>
</head>
<body>
<div class="gallery">
    <h1>Галерея</h1>
    <div class="box-img">
        <? include "blocks/gallery.php" ?>
    </div>
</div>
<div id="modal_form"><!-- Сaмo oкнo -->
    <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть -->
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->

<form action="blocks/addImg.php" method="post" enctype="multipart/form-data">
    <strong>Добавить фото в галерею:</strong>
    <input type="file" name="image" accept="image/jpeg, image/png">
    <input type="submit" value="Сохранить">
</form>

<script src="script/jquery-3.3.1.min.js"></script>
<script src="script/main.js"></script>
</body>
</html>
