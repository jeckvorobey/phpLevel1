<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: ../public/formAuth.php');
}
if ($_SESSION['role'] != 1) {
    header('Location: ../public/personalArea.php?noadmin');
}

?>

<!DOCTYPE html>
<html lang="ru">
<?php
$head = file_get_contents('../admin/tpl/head.tpl');
echo $head;
?>

<body>
    <h1>администрирование магазина</h1>
    <div class="container">
        <table class="product-list">
            <caption>Список товаров:</caption>
            <tbody>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>ID</th>
                    <th>Автор</th>
                    <th>Название</th>
                </tr>
                <?php include '../admin/productList.php'; ?>
            </tbody>
        </table>
        <div class="add-block">
            <form class="form-add" action="../blocks/addGood.php" method="POST" enctype="multipart/form-data">
                <label for="author">Автор:</label>
                <input type="text" name="author" value="">
                <label for="title">Название:</label>
                <input type="text" name="title" value="">
                <label for="pubHouse">Издательство:</label>
                <input type="text" name="pubHouse" value="">
                <label for="yearPublishing">Год издания:</label>
                <input type="text" name="yearPublishing" value="">
                <label for="series">Серия:</label>
                <input type="text" name="series" value="">
                <label for="isbn">ISBN:</label>
                <input type="text" name="isbn" value="">
                <label for="price">Цена:</label>
                <input type="text" name="price" value="">
                <label for="description">Описание:</label>
                <textarea name="description" cols="30" rows="10"></textarea>
                <label for="annotation">Анотация:</label>
                <textarea name="annotation" cols="30" rows="10"></textarea>
                <label for="imgName">Загрузите картинку в формате *.jpeg или *.png</label>
                <input type="file" name="imgName" accept="image/jpeg,image/png" required>
                <input type="submit" name="addGood" value="Добавить товар">
            </form>
        </div>
    </div>
</body>

</html>