$(document).ready(function () {
    $('#psikologCarousel').owlCarousel({
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

    $('#testimoniCarousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 2,
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

    $('.customNextBtnTestimoni').click(function() {
        $('#testimoniCarousel').trigger('next.owl.carousel');
    });
    $('.customPreviousBtnTestimoni').click(function() {
        $('#testimoniCarousel').trigger('prev.owl.carousel');
    });
});

