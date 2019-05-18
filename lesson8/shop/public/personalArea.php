<?php
session_start();
if (!isset($_SESSION['login']) && !isset($_SESSION['pass'])) {
    header('Location: ../public/formAuth.php');
}
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
            <div class="row col-12">
                <h3>
                    <?php echo $_SESSION['name'].' '.$_SESSION['middleName']; ?>, вы находитесь в Личном кабинете.
                </h3>
            </div>
            <?php if (isset($_GET['successfulOrder'])) {
            echo '<div class="row col-3">';
            echo '<div class="col">';
            echo '<p>Ваш заказ принят!</p>';
            echo '<a href="../public/myOrders.php" class="btn btn-outline-success">Узнать статус</a>';
            echo '</div></div>';
        }?>

            <?php
        include '../templates/footer.php';
        ?>
        </div>
    </div>
</body>

</html>