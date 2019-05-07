class Cart {
    constructor(container) {
        this.container = container;
        this.countGoods = 0; //общее количество товаров в корзине
        this.amount = 0; //общее стоимость товаров
        this.cartItems = [] //массив товаров
        this.init(); //инициализация корзины
    }

    _render() {
        let $cartItemsDiv = $('<div/>', {
            class: 'cart-items-wrap'
        }); //блок обертка
        let $totalCount = $('<div/>', {
            class: 'cart-summary sum-count'
        }); //общая стоимость и количество
        let $totalPrice = $('<div/>', {
            class: 'cart-summary sum-price'
        }); //общая стоимость корзины
        $(this.container).append(`<h4>Корзина</h4>`)
        $cartItemsDiv.appendTo($(this.container));
        $totalCount.appendTo($(this.container));
        $totalPrice.appendTo($(this.container));
        // console.log('TCL: Cart -> _render -> container', this.container);
    }

    init() {
        this._render();
        $.post('../controllers/basket.php', 'renderBasket', data => {
                if (data === 0) {
                    this._renderEmpty()
                } else {
                    for (let product of data.contents) {
                        this.cartItems.push(product);
                        this._renderProduct(product);
                    }
                    this.amount = data.amount;
                    this.countGoods = data.totalCount;
                    this._renderSum();
                    this._renderCount()
                }
            },
            "json"
        );

    }
    //рендер нового товара на странице
    _renderProduct(product) {
        let $product = $('<div/>', {
            class: 'cart-item',
            'data-product': product.id //присваиваем индитификатор через data атрибут
        });
        $product.append($(`<p class="product-author">${product.author}</p>`));
        $product.append($(`<p class="product-title">${product.title}</p>`));
        $product.append($(`<button type="button" class="action-unit" onclick="unit(${product.id}, 'rem')" ><img src="../public/img/icon/pacman.png" alt="pacman.png" title="уменьшить"></button>`))
        $product.append($(`<p class="product-count">${product.count}</p>`));
        $product.append($(`<button type="button" class="action-unit" onclick="unit(${product.id}, 'add')" ><img src="../public/img/icon/plus.png" alt="plus.png" title="увеличить"></button>`))
        $product.append($(`<p class="product-price">${product.price}</p>`));
        $product.append($(`<p class="product-amount">${product.amount}</p>`));
        $product.append($(`<button type="button" class="action-unit" onclick="unit(${product.id}, 'del')" ><img src="../public/img/icon/garbage.png" alt="garbage.png" title="удалить"></button>`))
        $product.appendTo($('.cart-items-wrap'));
        // console.log('TCL: Cart -> _renderProduct -> containerProduct', $containerProduct)
        //
    }
    //Выводим итоговую сумму
    _renderSum() {
        $('.sum-count').text(`Всего товаров в корзине: ${this.countGoods}`);
        $('.sum-price').text(`Сумма товаров в корзине: ${this.amount} руб.`);
    }
    _renderEmpty() {
        $(this.container).append(`<h4>В корзине нет товаров</h4>`)
    }
    _renderCount() {
        $('#go').text(`${this.countGoods}`);
    }
}