$(document).ready(function(){

    //Horizontal scroll models
    $('.models').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        arrows: false
    }).on('wheel', (function(e) {
    e.preventDefault();
    if (e.originalEvent.deltaY < 0) {
      $(this).slick('slickNext');
    } else {
      $(this).slick('slickPrev');
    }
    }));

    //Map toggle
    $('#idf').click(function() {
        $('#idf').addClass('selected');
        $('#paris').removeClass('selected');
        $('#map-idf').css("display", "unset");
        $('#map-paris').css("display", "none");
        $('#logo-map').css({top: "57%", left: "66%"});
    });

    $('#paris').click(function() {
        $('#paris').addClass('selected');
        $('#idf').removeClass('selected');
        $('#map-paris').css("display", "unset");
        $('#map-idf').css("display", "none");
        $('#logo-map').css({top: "38%", left: "31%"});
    });


    //Tippy tooltips
    tippy('[data-tippy-content]', {
        placement: 'right-start',
        animation: 'scale',
        duration: [300,0],
        followCursor: true,
        arrow: false,
        theme: 'socials-tippy',
    });
})