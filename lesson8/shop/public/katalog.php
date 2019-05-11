<?php
session_start();
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
        ?>
            <h1>
                Каталог
            </h1>
            <div id="product-catalog">
                <?php include '../blocks/addkatalog.php'; ?>
            </div>
            <?php
      include '../templates/footer.php';
        ?>
        </div>
    </div>

</body>

</html>