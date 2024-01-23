const ls = require('local-storage');

export function addProduct(product){
    let cartProducts = ls.get('cart') || [];
    cartProducts.push(product)
    ls.set('cart', cartProducts)
}

export function showCart(){
    let cartProducts = ls.get('cart') || [];
    $('.minicart-product-list').empty();

    cartProducts.map((product) => {
        console.log(product);
        let name = product.title;
        let price = product.unit_price;
        let image = product.image_path.substring(6);
        $('.minicart-product-list').append(`<li>
                    <a href="single-product.html" class="image"><img src="${image}"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">${name}</a>
                        <span class="quantity-price"><span class="amount">${price}</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>`)
    })
}
