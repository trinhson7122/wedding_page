
$(document).ready(function () {
    let allowRequest = true;
    const load = $('#load-page');
    const loadmodal = $('load-modal');
    // add type
    $(document).on('click', '#add-type', function () {
        let form = $(this).parents('form');
        let modal = $(this).parents('.modal');
        $.ajax({
            type: "post",
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'json',
            success: function (response) {
                hideModal(modal);
                $.NotificationApp.send("Thông báo", response.message, "top-center", "#42d29d", "success");
                load.load(location.href + " #load-page");
            },
            error: function (response) {
                hideModal(modal);
                $.NotificationApp.send("Thông báo", "Có lỗi sảy ra hoặc bạn chưa nhập đúng các trường dữ liệu", "top-center", "#fa6767", "error");
            }
        });
    });
    //add category
    $(document).on('click', '#add-category', function () {
        let form = $(this).parents('form');
        let modal = $(this).parents('.modal');
        $.ajax({
            type: "post",
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'json',
            success: function (response) {
                hideModal(modal);
                $.NotificationApp.send("Thông báo", response.message, "top-center", "#42d29d", "success");
                load.load(location.href + " #load-page");
            },
            error: function (response) {
                hideModal(modal);
                $.NotificationApp.send("Thông báo", "Có lỗi sảy ra hoặc bạn chưa nhập đúng các trường dữ liệu", "top-center", "#fa6767", "error");
            }
        });
    });
    //add product
    $(document).on('click', '#add-product', function () {
        let form = $(this).parents('form');
        let modal = $(this).parents('.modal');
        $.ajax({
            type: "post",
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'json',
            success: function (response) {
                hideModal(modal);
                $.NotificationApp.send("Thông báo", response.message, "top-center", "#42d29d", "success");
                load.load(location.href + " #load-page");
            },
            error: function (response) {
                hideModal(modal);
                $.NotificationApp.send("Thông báo", "Có lỗi sảy ra hoặc bạn chưa nhập đúng các trường dữ liệu", "top-center", "#fa6767", "error");
            }
        });
    });
    //delete product
    $(document).on('click', '.destroy-product', function () {
        let check = confirm('Bạn có chắc muốn xóa không?');
        if (check) {
            let form = $(this).parents('form');
            $.ajax({
                type: "post",
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function (response) {
                    $.NotificationApp.send("Thông báo", response.message, "top-center", "#42d29d", "success");
                    load.load(location.href + " #load-page");
                },
                error: function (response) {
                    $.NotificationApp.send("Thông báo", "Có lỗi sảy ra", "top-center", "#fa6767", "error");
                }
            });
        }
    });
    //show modal edit product
    $(document).on('click', '.btn-edit-product', function (e) {
        let action = $(this).parents('form').attr('action');
        $.ajax({
            type: "get",
            url: action,
            dataType: 'json',
            success: function (response) {
                $('#update-product-modal form').attr('action', action);
                $('#update-product-modal .product-name').val(response.message.name);
                $('#update-product-modal .form-type select').val(response.message.id_type).change();
                $('#update-product-modal .form-category select').val(response.message.id_category).change();
                $('#update-product-modal .product-price').val(response.message.price);
                $('#update-product-modal .product-note').val(response.message.note);
            },
            error: function (response) {
                $.NotificationApp.send("Thông báo", "Có lỗi sảy ra", "top-center", "#fa6767", "error");
            }
        });
    });
    //update product
    $(document).on('click', '.update-product', function () {
        let form = $(this).parents('form');
        let modal = $(this).parents('.modal');
        let action = form.attr('action').replace('edit', 'update');
        $.ajax({
            type: "post",
            url: action,
            data: form.serialize(),
            dataType: 'json',
            success: function (response) {
                hideModal(modal);
                $.NotificationApp.send("Thông báo", response.message, "top-center", "#42d29d", "success");
                load.load(location.href + " #load-page");
            },
            error: function (response) {
                hideModal(modal);
                $.NotificationApp.send("Thông báo", "Có lỗi sảy ra", "top-center", "#fa6767", "error");
            }
        });
    });
    //add account/customer
    $(document).on('click', '#add-account', function () {
        let form = $(this).parents('form');
        let modal = $(this).parents('.modal');
        $.ajax({
            type: "post",
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'json',
            success: function (response) {
                hideModal(modal);
                $.NotificationApp.send("Thông báo", response.message, "top-center", "#42d29d", "success");
                load.load(location.href + " #load-page");
            },
            error: function (response) {
                hideModal(modal);
                $.NotificationApp.send("Thông báo", "Có lỗi sảy ra", "top-center", "#fa6767", "error");
            }
        });
    });
    //destroy account/customer
    $(document).on('click', '.destroy-account', function () {
        let check = confirm('Bạn có chắc muốn xóa không?');
        if (check) {
            let form = $(this).parents('form');
            let modal = $(this).parents('.modal');
            $.ajax({
                type: "post",
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function (response) {
                    hideModal(modal);
                    $.NotificationApp.send("Thông báo", response.message, "top-center", "#42d29d", "success");
                    load.load(location.href + " #load-page");
                },
                error: function (response) {
                    hideModal(modal);
                    $.NotificationApp.send("Thông báo", "Có lỗi sảy ra", "top-center", "#fa6767", "error");
                }
            });
        }
    });
    //show modal edit account
    $(document).on('click', '.btn-edit-account', function (e) {
        let action = $(this).parents('form').attr('action');
        $.ajax({
            type: "get",
            url: action,
            dataType: 'json',
            success: function (response) {
                $('#update-customer-modal form').attr('action', action);
                $('#update-customer-modal .account-name input').val(response.message.name);
                $('#update-customer-modal .account-phone input').val(response.message.phone);
                $('#update-customer-modal .account-address input').val(response.message.address);
                $('#update-customer-modal .account-username input').val(response.message.username);
                $('#update-customer-modal .account-password input').val(response.message.password);
            },
            error: function (response) {
                $.NotificationApp.send("Thông báo", "Có lỗi sảy ra", "top-center", "#fa6767", "error");
            }
        });
    });
    //update account
    $(document).on('click', '#update-account', function () {
        let form = $(this).parents('form');
        let modal = $(this).parents('.modal');
        let action = form.attr('action').replace('edit', 'update');
        $.ajax({
            type: "post",
            url: action,
            data: form.serialize(),
            dataType: 'json',
            success: function (response) {
                hideModal(modal);
                $.NotificationApp.send("Thông báo", response.message, "top-center", "#42d29d", "success");
                load.load(location.href + " #load-page");
            },
            error: function (response) {
                hideModal(modal);
                $.NotificationApp.send("Thông báo", "Có lỗi sảy ra", "top-center", "#fa6767", "error");
            }
        });
    });
    //add cart on account
    $(document).on('click', '.btn-add-cart', function () {
        if (!allowRequest) {
            $.NotificationApp.send("Thông báo", "Vui lòng không nhấn quá nhiều", "top-center", "#fa6767", "error");
        }
        else {
            allowRequest = false;
            let form = $(this).parents('form');
            $.ajax({
                type: "post",
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function (response) {
                    $.NotificationApp.send("Thông báo", response.message, "top-center", "#42d29d", "success");
                    load.load(location.href + " #load-page");
                    antiSpam();
                },
                error: function (response) {
                    $.NotificationApp.send("Thông báo", "Có lỗi sảy ra hoặc bạn chưa nhập đúng các trường dữ liệu", "top-center", "#fa6767", "error");
                    antiSpam();
                }
            });
        }
    });
    //destroy cart
    $(document).on('click', '.destroy-cart', function () {
        let check = confirm('Bạn có chắc muốn xóa không?');
        if (check) {
            let form = $(this).parents('form');
            let modal = $(this).parents('.modal');
            $.ajax({
                type: "post",
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function (response) {
                    hideModal(modal);
                    $.NotificationApp.send("Thông báo", response.message, "top-center", "#42d29d", "success");
                    load.load(location.href + " #load-page");
                },
                error: function (response) {
                    hideModal(modal);
                    $.NotificationApp.send("Thông báo", "Có lỗi sảy ra", "top-center", "#fa6767", "error");
                }
            });
        }
    });
    //add product to cart detail
    $(document).on('click', '.check-product', function(){
        let form = $(this).parents('form');
        if($(this).is(':checked'))
        {
            $.ajax({
                type: "post",
                url: form.attr('action'),
                data: form.serialize(),
                dataType: "json",
                success: function (response) {
                    let sum = $('#sum_price_cart');
                    sum.load(sum.data('load') + ' #sum_price_cart');
                    load.load(location.href + " #load-page");
                    $.NotificationApp.send("Thông báo", response.message, "top-center", "#42d29d", "success");
                },
                error: function (response) {
                    $.NotificationApp.send("Thông báo", "Có lỗi sảy ra", "top-center", "#fa6767", "error");
                }
            });
        }
        // else
        // {
        //     //delete
        //     let action = form.attr('action').replace('store', 'destroy');
        //     let cartid = $(this).data('cartid');
        //     $.ajax({
        //         type: "post",
        //         url: action + '/' + cartid,
        //         data: form.serial,
        //         dataType: "json",
        //         success: function (response) {
        //             $('#sum_price_cart').load(location.href + " #sum_price_cart");
        //             $.NotificationApp.send("Thông báo", response.message, "top-center", "#42d29d", "success");
        //         },
        //         error: function (response) {
        //             $.NotificationApp.send("Thông báo", "Có lỗi sảy ra", "top-center", "#fa6767", "error");
        //         }
        //     });
        // }
    });
    //show modal cart detail
    $(document).on('click', '.show-cart-detail', function(){
        let form = $(this).parents('form');
        $.ajax({
            type: "get",
            url: form.attr('action'),
            dataType: "html",
            success: function (response) {
                $('#show-cart-detail-modal .modal-body').html(response);
            }
        });
    });
    //hide modal
    function hideModal(ModalObj) {
        ModalObj.click();
    }
    function antiSpam()
    {
        setTimeout(() => {
            allowRequest = true;
        }, 3000);
    }
});