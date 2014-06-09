
$(document).ready(function () {
    $(".anyClass").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
        auto: 800,
        speed: 1000,
        visible: 3
    });
})
$(function () {
    $('#slideshow').hover(
        function () {
            $('#slideshow .screen').trigger('pause');
        }, function () {
            $('#slideshow .screen').trigger('play');
        }
    );

    $('#slideshow .thumbnails').carouFredSel({
        direction: 'down',
        auto: false,
        items: {
            visible: 2,
            start: 0
        },
        scroll: {
            onBefore: function (data) {
                data.items.old.eq(0).removeClass('selected');
                data.items.visible.eq(0).addClass('selected');
            }
        }
    });

    $('#slideshow .screen').carouFredSel({
        auto: true,
        items: 1,
        prev: "#slideshow .prev",
        next: "#slideshow .next",
        scroll: {
            fx : "crossfade",
            onBefore: function (data) {
                $('#slideshow .thumbnails').trigger('slideTo', [$('#slideshow .thumbnails li[class=' + data.items.visible.attr('id') + ']'), 0]);
            }
        }
    });

    $('#slideshow .thumbnails li').click(function () {
        $('#slideshow .screen').trigger('slideTo', [$('#slideshow .screen .slide[id=' + $(this).attr('class') + ']')]);
    });
    $('#slideshow .thumbnails li:eq(0)').addClass('selected');
});


