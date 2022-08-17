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