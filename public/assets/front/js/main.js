$(function () {

    $('.open-search').click(function (e) {
        e.preventDefault();
        $('#search').addClass('active');
    });

    $('.close-search').click(function () {
        $('#search').removeClass('active');
    });

    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 200) {
            $("#top").fadeIn();
        } else {
            $("#top").fadeOut();
        }
    });

    $("#top").click(function () {
        $("html").animate({ scrollTop: 0 }, 10)
    });

});
function showCart(cart) {
    $('#cart-modal .modal-body').html(cart);
    $('#cart-modal').modal();
    let cartQty = $('#modal-cart-qty').text() ? $('#modal-cart-qty').text() : 0;
    $('.mini-cart-qty').text(cartQty);

    if (cartQty) {
        $('#cart-modal .modal-footer button.btn-cart').removeClass('d-none');
    } else {
        $('#cart-modal .modal-footer button.btn-cart').addClass('d-none');
    }
}


function getCart(action) {
    $.ajax({
        url: action,
        type: 'get',
        success: function (result) {
            showCart(result);
        },
        error: function () {
            alert('Error!');
        }
    });
}


$(function () {
    $('.addtocart').on('submit', function () {
        let form = $(this);
        $.ajax({
            url: form.attr('action'),
            data: form.serialize(),
            type: 'post',
            success: function (result) {
                showCart(result);
            },
            error: function (msg) {
                alert('Error!');
                console.log(msg.responseJSON);
                form[0].reset();
            }
        });
        return false;
    });

    $('#cart-modal .modal-body').on('click', '.del-item', function () {
        $.ajax({
            url: $(this).data('action'),
            type: 'get',
            success: function (result) {
                showCart(result);
            },
            error: function () {
                alert('Error!');
            }
        });
    });
});

function clearCart(action) {
    $.ajax({
        url: action,
        type: 'get',
        success: function (result) {
            showCart(result);
        },
        error: function () {
            alert('Error!');
        }
    });
}
