
    // -- nav bar fixed on scroll - header -- //

    //number of pixels before modifying styles
    var num = 64;

    // get modal


$(document).ready(function() {
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > num) {
            $('.menu-item-wrapper').addClass('fixed');
        } else {
            $('.menu-item-wrapper').removeClass('fixed');
        }
    });

    // -- Popup box - work with us-- //

    $(function() {
        //----- OPEN
        $('[data-popup-open]').on('click', function(e)  {
            var targeted_popup_class = jQuery(this).attr('data-popup-open');
            $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

            e.preventDefault();
        });

        //----- CLOSE
        $('[data-popup-close]').on('click', function(e)  {
            var targeted_popup_class = jQuery(this).attr('data-popup-close');
            $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

            e.preventDefault();
        });
    });

    // -- light box gallery - our range -- //

    $(document).ready(function() {
        $(".lightgallery").lightGallery();
    });

    $(".carousel").carousel({
        interval: 1000 * 3
    });

    $(".header").click(function () {

        $header = $(this);
        //getting the next element
        $content = $header.next();
        //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
        $content.slideToggle(500, function () {
            //execute this after slideToggle is done
        });
    });

    $("#show-catalogue").hover(function() {
        $(".hidden-menu").css("display", "block");
    }, function() {
        $(".hidden-menu").css("display", "none");
    });

    $(".hidden-menu").hover(function() {
       $(".hidden-menu").css("display", "block");
    }, function() {
        $(".hidden-menu").css("display", "none");
    });
});








