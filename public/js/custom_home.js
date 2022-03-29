$(document).ready(function() {
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    });

    $('.product-select-color').click(function() {
        $('.product-select-color').removeClass('selected');
        $('.product-select-color').removeClass('selected-this-id-color');
        $(this).addClass('selected');
        $(this).addClass('selected-this-id-color');
    });
    $('.product-select-size').click(function() {
        $('.product-select-size').removeClass('selected');
        $('.product-select-size').removeClass('selected-this-id-size');
        $(this).addClass('selected');
        $(this).addClass('selected-this-id-size');
    });
    $('#add-to-cart').click(function() {
        let user_id = $('#user-id').attr('user_id');
        let pr_id = $('#id-product').attr('id-pr');
        let qty = $('#qty').val();
        let size = $('.selected-this-id-size').attr('id-size');
        let color = $('.selected-this-id-color').attr('id-color');

        $.ajax({

            url: "http://127.0.0.1:8000/cart/addToCart",
            type: "post",
            data: {
                'user_id': user_id,
                'pr_id': pr_id,
                'qty': qty,
                'size': size,
                'color': color,
            },
            success: function(data) {
                console.log(data);

            },
        });
    });
});