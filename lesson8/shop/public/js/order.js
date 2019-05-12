class TableGoods {
    constructor(container) {
        this.container = container;
        this.countGoods = 0; //общее количество товаров в корзине
        this.amount = 0; //общее стоимость товаров
        this.cartItems = [] //массив товаров
        this.authorized = Boolean; //проверка на авторизацию
        this.init();
    }
    _render() {

    }
}