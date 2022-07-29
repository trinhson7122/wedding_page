$(document).ready(function () {
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
            },
            error: function (response) {
                //hideModal(modal);
                $.NotificationApp.send("Thông báo", "Có lỗi sảy ra hoặc bạn chưa nhập đúng các trường dữ liệu", "top-center", "#fa6767", "error");
            }
        });
    });
    //hide modal
    function hideModal(ModalObj) {
        ModalObj.hide();
        $('.modal-backdrop').remove();
    }
});