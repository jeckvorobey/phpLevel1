<?php
if ($_GET['id']) {
    $id = (int) ($_GET['id']);
}
include_once '../blocks/db_request.php';
$good = goods_get($connection, $id);
?>
<!DOCTYPE html>
<html lang="ru">
<?php
$head = file_get_contents('../admin/tpl/head.tpl');
echo $head;
?>

<body>
    <h1>редактирование товара</h1>
    <form class="form-edit" action="../blocks/edit.php" method="POST">
        <label for="author">Автор:</label>
        <input type="text" name="author" value="<?=$good['author']; ?>">
        <label for="title">Название:</label>
        <input type="text" name="title" value="<?=$good['title']; ?>">
        <label for="pubHouse">Издательство:</label>
        <input type="text" name="pubHouse" value="<?=$good['pubHouse']; ?>">
        <label for="yearPublishing">Год издания:</label>
        <input type="text" name="yearPublishing" value="<?=$good['yearPublishing']; ?>">
        <label for="series">Серия:</label>
        <input type="text" name="series" value="<?=$good['series']; ?>">
        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" value="<?=$good['isbn']; ?>">
        <label for="price">Цена:</label>
        <input type="text" name="price" value="<?=$good['price']; ?>">
        <label for="description">Описание:</label>
        <textarea name="description" cols="30" rows="10"><?=$good['description']; ?></textarea>
        <label for="annotation">Анотация:</label>
        <textarea name="annotation" cols="30" rows="10"><?=$good['annotation']; ?></textarea>
        <input type="hidden" name="id" value="<?=$good['id']; ?>">
        <input type="hidden" name="imgName" value="<?=$good['imgName']; ?>">
        <input type="submit" name="submit" value="Cохранить">
    </form>
    <a href="../admin/index.php">Отменить и вернуться на главную</a>
</body>