$(document).ready(function () {
    var bar = $('.progress-bar ').length;
    if (bar > 0) {
        $('#progress1').css('width', '100%');
        $('#progress2').css('width', '90%');
        $('#progress3').css('width', '80%');
        $('#progress4').css('width', '70%');
    }
});
$(document).ready(function () {
    var owl = $("#owl-demos");
    owl.owlCarousel({
        items: 3,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            }
        },
        autoplay: true

    });



    $(".next").click(function () {
        owl.trigger('owl.next');
    })
    $(".prev").click(function () {
        owl.trigger('owl.prev');
    })

});