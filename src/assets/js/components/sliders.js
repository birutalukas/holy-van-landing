$ = jQuery;
$(document).on("ready", function () {
    $(".hero__slider").slick({
        autoplay: true,
        arrows: false,
        useTransform: false,
    });
    $(".gallery__slider").slick({
        autoplay: false,
        arrows: false,
        slidesToShow: 3.5,
        slidesToScroll: 1,
        infinite: false,
        responsive: [
            {
                breakpoint: 1920,
                settings: {
                    slidesToShow: 3.3,
                },
            },
            {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 2.5,
                },
            },
            {
                breakpoint: 920,
                settings: {
                    slidesToShow: 1.6,
                    slidesToScroll: 1,
                },
            },
        ],
    });
});
