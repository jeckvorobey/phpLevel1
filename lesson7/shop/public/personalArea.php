<!DOCTYPE html>
<html lang="ru">
<?php
$head = file_get_contents('../templates/head.tpl');
echo $head;
?>

<body>
    <div class="conteiner">
        <?php
        $header = file_get_contents('../templates/header.tpl');
        echo $header;
        ?>
        <h1>
            Вы находитесь в Личном кабинете.
        </h1>
        <p><a href="../admin">в админку</a></p>
        <?php
        $footer = file_get_contents('../templates/footer.tpl');
        echo $footer;
        ?>
    </div>
</body>