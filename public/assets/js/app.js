$(document).ready(function () {
    let owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 3,
            },
        },
    });

    // Custom Button
    $('.customNextBtn').click(function() {
        $('#psikologCarousel').trigger('next.owl.carousel');
    });
    $('.customPreviousBtn').click(function() {
        $('#psikologCarousel').trigger('prev.owl.carousel');
    });

    $('.customNextBtn').click(function() {
        $('#testimoniCarousel').trigger('next.owl.carousel');
    });
    $('.customPreviousBtnTestimoni').click(function() {
        $('#testimoniCarousel').trigger('prev.owl.carousel');
    });
});
