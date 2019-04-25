<?php
session_start();
if (!isset($_SESSION['login']) && !isset($_SESSION['pass'])) {
    header('Location: ../public/formAuth.php');
}
include '../templates/head.php';
?>

<body>
    <div class="container">
        <div class="row">
            <?php
        include '../templates/header.php';
        ?>
        <h1>
            <?php echo $_SESSION['name'].' '.$_SESSION['middleName']; ?>, вы находитесь в Личном кабинете.
        </h1>
        <?php
        include '../templates/footer.php';
        ?>
        </div>
    </div>
</body>