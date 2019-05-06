$(document).ready(() => {
    $('#phoneReg').mask('+7(999)999-99-99');

    $('.add-to-cart').click(e => {
        addCart(e.target.value);
    });

    
});

//добавляем товар в корзину
addCart = (id) => {
    $.ajax({
        type: 'POST',
        url: '../controllers/basket.php',
        data: {id:id},
        dataType: 'json',
        error: (text, error) => {
            alert(`Ошибка: ${text} | ${error}`);
        },
        success: data => {
            // console.log(data);
        }
    });
}