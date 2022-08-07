$(document).ready(function () {
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
            error: function (response)
            {
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
    //hide modal
    function hideModal(ModalObj) {
        ModalObj.click();
    }
});