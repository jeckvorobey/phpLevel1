 <?php
 session_start();
include_once '../blocks/login.php';
?>
 <!DOCTYPE html>
 <html lang="RU">
 <?php
include '../templates/head.php';
?>

 <body>
     <div class="container">
         <div class="row">
             <?php
            include '../templates/header.php';
            if (isset($_GET['error'])) {
                echo '<p style="color:red">Вы ввели неверно логин или пароль</p>';
            }
         ?>
         </div>
         <div class="row">
             <div class="col-3">
                 <h1 style="text-align:right; margin-right:145px;">Вход:</h1>
                 <form class="form-auth" method="POST">
                     <label for="login">Введите ваш логин:</label>
                     <input type="text" name="login" value="">
                     <label for="pass">Введите ваш пароль:</label>
                     <input type="password" name="pass" value="">
                     <input type="submit" name="entry" value="Войти">
                 </form>
             </div>
             <div class="col-9">
                 <h1>Регистрация:</h1>
                 <?php
                    if (isset($_GET['errorReg'])) {
                        echo '<p style="color:red">Логин не уникален</p>';
                    } elseif (isset($_GET['success'])) {
                        echo '<p style="color:green">Успешная регистрация. Вы можете войти на сайт!</p>';
                    }
                ?>

                 <form method="POST">
                     <div class="form-row col-5">
                         <div class="col-12">
                             <label for="login">Логин</label>
                             <input type="text" class="form-control" name="login" placeholder="Придумайте логин">
                             <div class="invalid-feedback">
                                 Логин не уникален.
                             </div>
                         </div>
                         <div class="col-12">
                             <label for="pass">Пароль</label>
                             <input type="password" class="form-control" name="pass" placeholder="Придумайте Пароль">
                         </div>
                         <div class="col-12">
                             <label for="surname">Фамилия</label>
                             <input type="text" class="form-control" name="surname" placeholder="Укажите вашу фамилию">
                         </div>
                         <div class="col-12">
                             <label for="name">Имя</label>
                             <input type="text" class="form-control" name="name" placeholder="Укажите ваше имя">
                         </div>
                         <div class="col-12">
                             <label for="middleName">Отчество</label>
                             <input type="text" class="form-control" name="middleName"
                                 placeholder="Укажите ваше Отчество">
                         </div>
                         <div class="col-12">
                             <label for="email">Email</label>
                             <input type="email" class="form-control" name="email" placeholder="Укажите Ваш Email">
                         </div>
                         <?php
                         if (isset($_GET['errorEmail'])) {
                             echo '<p style="color:red">Формат email дожен быть exemple@domain.com</p>';
                         }
                         ?>
                         <div class="col-12">
                             <label for="phone">Телефон</label>
                             <input type="phone" class="phoneReg form-control" name="phone"
                                 placeholder="Укажите Ваш Номер Телефона">
                         </div>
                     </div>
                     <button type="submit" class="btn btn-outline-success mt-2 mx-right"
                         name="registration">Регистрация</button>
                 </form>
             </div>
             <?php
            include '../templates/footer.php';
        ?>
 </body>

 </html>