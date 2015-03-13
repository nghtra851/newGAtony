$(document).ready(function() {

    $('.lightbox').click(function() {
        $('.backdrop').animate({'opacity': '.50'}, 300, 'linear');
        $('.pbox').animate({'opacity': '1.00'}, 300, 'linear');
        $('.backdrop, .pbox').css('display', 'block');
    });

    $('.close').click(function() {
        close_box();
    });

    $('.backdrop').click(function() {
        close_box();
    });

});

function close_box()
{
    $('.backdrop').animate({'opacity': '0'}, 300, 'linear', function() {
        $('.backdrop, .pbox').css('display', 'none');
    });
}


$(document).ready(function() {

    $('.sharelightbox').click(function() {
        $('.sharebackdrop').animate({'opacity': '.50'}, 300, 'linear');
        $('.sharepbox').animate({'opacity': '1.00'}, 300, 'linear');
        $('.sharebackdrop, .sharepbox').css('display', 'block');
    });

    $('.closeshare').click(function() {
        close_share();
    });

    $('.sharebackdrop').click(function() {
        close_share();
    });

});

function close_share()
{
    $('.sharebackdrop, .sharepbox').animate({'opacity': '0'}, 300, 'linear', function() {
        $('.sharebackdrop, .sharepbox').css('display', 'none');
    });
}




$(document).ready(function() {

    $('.cartlightbox').click(function() {
        $('.cartpbox').animate({'opacity': '1.00'}, 300, 'linear');
        $('.cartpbox').css('display', 'block');
    });

    $('.closecart').click(function() {
        close_cart();
    });



});

function close_cart()
{
    $('.cartpbox').animate({'opacity': '0'}, 300, 'linear', function() {
        $('.cartpbox').css('display', 'none');
    });
}







$(document).ready(function() {
    $('.lightbox-slider').flexslider({
        animation: 'fade',
        controlsContainer: '.lightbox-slider'
    });
});
