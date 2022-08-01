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
                //update modal
                load.load(location.href + " #load-page");
            },
            error: function (response) {
                //hideModal(modal);
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
                //hideModal(modal);
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
                //hideModal(modal);
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
                    //location.reload();
                    load.load(location.href + " #load-page");
                },
                error: function (response) {
                    $.NotificationApp.send("Thông báo", "Có lỗi sảy ra", "top-center", "#fa6767", "error");
                }
            });
        }
    });
    //
    $('.btn-edit-product1').click(function (e) { 
        let form = $(this).parents('form');
        $.ajax({
            type: "get",
            url: form.attr('action'),
            success: function (response) {
                loadmodal.load(location.href + " #load-modal");
            }
        });
    });
    //hide modal
    function hideModal(ModalObj) {
        ModalObj.click();
    }
});