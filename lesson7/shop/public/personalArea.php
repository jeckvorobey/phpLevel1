<!DOCTYPE html>
<html lang="ru">
<?php
session_start();
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
            <?=$_SESSION['name'].' '.$_SESSION['middleName']; ?>, вы находитесь в Личном кабинете.
        </h1>
        <p><a href="../admin">в админку</a></p>
         <?php
        if (isset($_GET['noadmin'])) {
            echo '<p style="color:red">'.$_SESSION['name'].' '.$_SESSION['middleName'].', вы не являетесь Администратором сайта</p>';
        }
        $footer = file_get_contents('../templates/footer.tpl');
        echo $footer;
        ?>
    </div>
</body>