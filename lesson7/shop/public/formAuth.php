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
         <h1 style="text-align:right; margin-right:145px;">Вход:</h1>
         <form class="form-auth" action="../blocks/server.php" method="POST">
             <label for="login">Введите ваш логин:</label>
             <input type="text" name="login" value="">
             <label for="pass">Введите ваш пароль:</label>
             <input type="password" name="pass" value="">
             <input type="button" name="button" value="Вход">
         </form>

         <?php
        $footer = file_get_contents('../templates/footer.tpl');
        echo $footer;
        ?>
     </div>
 </body>