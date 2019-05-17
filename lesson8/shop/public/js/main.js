$(document).ready(() => {
    $('.phoneReg').mask('+7(999)999-99-99');
    renderFormDelivery(0);

    let cart = new Cart('#cart');

    $('.add-to-cart').click(e => {
        addCart(e.target.value);
        location.reload();
    });

    //обработчик выбора способо доставки
    $('#delivery').change(e => {
        e.preventDefault();
        // console.log(e.target.value);
        renderFormDelivery(e.target.value);
        if (e.target.value !== 0) {
            $.ajax({
                type: 'GET',
                url: '../controllers/order.php',
                data: {
                    idDelivery: e.target.value
                },
                dataType: 'json',
                error: (text, error) => {
                    alert(`Ошибка: ${text} | ${error}`);
                },
                success: data => {
                    totalPrice(data.price);

                }
            });
        }
    });

    //модальное окно
    $('a#go').click(function (event) { // лoвим клик пo ссылки с id="go"
        event.preventDefault(); // выключaем стaндaртную рoль элементa
        $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
            function () { // пoсле выпoлнения предъидущей aнимaции
                $('#modal_form')
                    .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
                    .animate({
                        opacity: 1,
                    }, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
            });
    });
    /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
    $('#modal_close, #overlay').click(function () { // лoвим клик пo крестику или пoдлoжке
        $('#modal_form')
            .animate({
                    opacity: 0,
                }, 200, // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                function () { // пoсле aнимaции
                    $(this).css('display', 'none'); // делaем ему display: none;
                    $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                }
            );
    });
});

//добавляем товар в корзину
addCart = (id) => {
    $.ajax({
        type: 'POST',
        url: '../controllers/basket.php',
        data: {
            id: id
        },
        dataType: 'json',
        error: (text, error) => {
            alert(`Ошибка: ${text} | ${error}`);
        },
        success: data => {
            // alert('Товар добавлен в корзину')
        }
    });


}

unit = (id, action) => {
    $.ajax({
        type: 'POST',
        url: '../controllers/basket.php',
        data: {
            idGood: id,
            action: action
        },
        error: (text, error) => {
            alert(`Ошибка: ${text} | ${error}`);
        },
        success: data => {
            location.reload();
        }
    });
}

auth = () => {
    location = '../public/formAuth.php';
}

byOrder = () => {
    location = '../public/order.php';
}

renderFormDelivery = id => {
    switch (+(id)) {
        case 0:
            $('.form-delivery').remove();
            $('.order').prop('disabled', true);
            break;
        case 1:
            $('.form-delivery').remove();
            let $formS = $('<div/>', {
                class: 'form-delivery'
            });
            $formS.append($('<label for="phone">Телефон для уточнения деталей</label>'));
            $formS.append($('<input class="form-control" class="phoneReg" type="phone" name="phone" placeholder="Укажите Ваш Номер Телефона" required>'));
            $('#delivery').after($formS);
            $('.order').prop('disabled', false);
            break;
        case 2:
            $('.form-delivery').remove();
            let $form = $('<div/>', {
                class: 'form-delivery'
            });
            $form.append($('<label for="city">Город:</label>'));
            $form.append($('<input class="form-control" type="text" name="city" value="Смоленск" readonly>'));
            $form.append($('<label for="str" >Улица, Пр-т, Проезд и т.д:</label>'));
            $form.append($('<input class="form-control" type="text" name="str" value="" placeholder="пр.Ленина" autofocus required>'));
            $form.append($('<label for="house" >Дом:</label>'));
            $form.append($('<input class="form-control" type="text" name="house" value="" required>'));
            $form.append($('<label for="corps" >Корпус:</label>'));
            $form.append($('<input class="form-control" type="text" name="corps" value="">'));
            $form.append($('<label for="flat" >Квартира:</label>'));
            $form.append($('<input class="form-control" type="text" name="flat" value="">'));
            $form.append($('<label for="phone">Телефон для уточнения деталей</label>'));
            $form.append($('<input class="form-control" class="phoneReg" type="phone" name="phone" placeholder="Укажите Ваш Номер Телефона" required>'));
            $('#delivery').after($form);
            $('.order').prop('disabled', false);
            break;
        case 3:
            $('.form-delivery').remove();
            let $formP = $('<div/>', {
                class: 'form-delivery'
            });
            $formP.append($('<label for="index">Почтовый индекс:</label>'));
            $formP.append($('<input class="form-control" type="text" name="index" value="" autofocus required>'));
            $formP.append($('<label for="region">Область:</label>'));
            $formP.append($('<input class="form-control" type="text" name="region" value="" required>'));
            $formP.append($('<label for="regionArea">Район:</label>'));
            $formP.append($('<input class="form-control" type="text" name="regionArea" value="" required>'));
            $formP.append($('<label for="city">Город:</label>'));
            $formP.append($('<input class="form-control" type="text" name="city" value="" required>'));
            $formP.append($('<label for="str" >Улица, Пр-т, Проезд и т.д:</label>'));
            $formP.append($('<input class="form-control" type="text" name="str" value="" placeholder="" required>'));
            $formP.append($('<label for="house" >Дом:</label>'));
            $formP.append($('<input class="form-control" type="text" name="house" value="" required>'));
            $formP.append($('<label for="corps" >Корпус:</label>'));
            $formP.append($('<input class="form-control" type="text" name="corps" value="">'));
            $formP.append($('<label for="flat" >Квартира:</label>'));
            $formP.append($('<input class="form-control" type="text" name="flat" value="">'));
            $formP.append($('<label for="phone">Телефон для уточнения деталей</label>'));
            $formP.append($('<input class="form-control" class="phoneReg" type="phone" name="phone" placeholder="Укажите Ваш Номер Телефона" required>'));
            $('#delivery').after($formP);
            $('.order').prop('disabled', false);
            break;

    }

    totalPrice = deliveryPrice => {
        // console.log(deliveryPrice);
        let $totalSum = +($('.sumGoods').data('sum')) + +(deliveryPrice);

        $('.delivery').text(`Доставка: ${deliveryPrice} руб.`);
        $('.total').text(`Итого к оплате: ${$totalSum}руб.`);
    }
}