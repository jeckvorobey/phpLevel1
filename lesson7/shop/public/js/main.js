$(document).ready(function () {
    $('#phoneReg').mask('+7(999)999-99-99');

    $('.add-to-cart').click(e => {
        addCart(e.target);
    });
});

addCart = (id) => {
    $.ajax({
        type: 'post',
        url: '../../controllers/basket.php',
        data: id,
        dataType: 'json',
        error: (text, error) => {
            alert(`Ошибка: ${text} | ${error}`);
        },
        success: data => {
            console.log(data);
        }
    });
}