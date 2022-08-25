$(document).ready(function () {
    $('.year').html((new Date).getFullYear());
});
$(document).on('click', '.plus-product', function(){
    let amount = $('.amount-product-' + $(this).data('id'));
    amount.html(parseInt(amount.html()) + 1);
    $('.amount-product-input-' + $(this).data('id')).val(amount.html());
});
$(document).on('click', '.minus-product', function(){
    let amount = $('.amount-product-' + $(this).data('id'));
    if(parseInt(amount.html()) === 1)
        return;
    amount.html(parseInt(amount.html()) - 1);
    $('.amount-product-input-' + $(this).data('id')).val(amount.html());
});
$(document).on('click', '.edit-price', function(){
    let td = $(this).parents('td');
    let price = $('.price_product').val();
    let output = `
        <input class="form-control price_new" type="number" value="` + price + `">
        <button class="btn btn-success update-price" type="button">Lưu</button>
    `;
    td.html(output);
});
$(document).on('click', '.update-price', function(){
    let td = $(this).parents('td');
    let price_new = $('.price_new').val();
    $('.price_product').val(price_new);
    let output = `
        <button class="btn btn-warning edit-price">Sửa</button>
    `;
    td.html(output);
});