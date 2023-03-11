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

    //Account sidebar toggle
    $('#favs').click(function() {
        $('.favs-content').css("display", "unset");
        $('.settings-content').css("display", "none");
        $('.reservations-content').css("display", "none");
        $('#favs').addClass('acc-active');
        $('#settings').removeClass('acc-active');
        $('#reservations').removeClass('acc-active');
    });

    $('#settings').click(function() {
        $('.settings-content').css("display", "unset");
        $('.favs-content').css("display", "none");
        $('.reservations-content').css("display", "none");
        $('#settings').addClass('acc-active');
        $('#favs').removeClass('acc-active');
        $('#reservations').removeClass('acc-active');
    });
    
    $('#reservations').click(function() {
        $('.reservations-content').css("display", "unset");
        $('.favs-content').css("display", "none");
        $('.settings-content').css("display", "none");
        $('#reservations').addClass('acc-active');
        $('#favs').removeClass('acc-active');
        $('#settings').removeClass('acc-active');
    });
})