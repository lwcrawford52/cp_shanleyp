(function($) {
    $('.cases-inner').slick({
        arrows: true,
        speed: 500,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.areas-slider',
        prevArrow:'<i class="red cases-arrow fal fa-angle-left fa-2x"></i>',
        nextArrow:'<i class="red cases-arrow arrow-right fal fa-angle-right fa-2x"></i>',
        autoplay: true,
        autoplaySpeed: 6000
    });
    $('.areas-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.cases-inner',
        dots: false,
        speed: 800,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
              breakpoint: 1400,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true,
                centerMode: true,
          focusOnSelect: true
                      }
            },
            {
              breakpoint: 1000,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                centerMode: true,
          focusOnSelect: true
                      }
            },
            {
              breakpoint: 640,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                centerMode: true,
                  focusOnSelect: true
                      }
            }
            ]
    });
    
})( jQuery );

