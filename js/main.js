$(function () {

    $('.video_btn').on('click', function (e) {
        setSrc($(this)); // setSrc($(this),{'autoplay':1});
    });



    $('#video_pop').popup({
        opacity: 0.9,
        transition: 'all 0.3s',
        onclose: function (e) {
            $('#yt').attr('src', '');
        }
    });

    function playerVars(src, option) {
        var def = {
            'autoplay': 1,
            'control': 0,
            'loop': 0,
            'rel': 0,
            'showinfo': 0,
            'modestbranding': 0,
        };
        if (option) $.extend(def, option);
        var s = '';
        $.each(def, function (p, v) {
            s = s + p + '=' + v + '&';
        });

        return src = src + '?' + s.replace(/&$/gi, '');
    }

    function setSrc($id, option) {
        var src = 'https://www.youtube.com/embed/' + $id.data('id');
        $('#yt').attr('src', playerVars(src, option));
    }
});

$(document).ready(function () {


    $('.menu').click(function () {
        $('.header').toggleClass('on');
    });
    
    $('.prjct_carousel').owlCarousel({
        center: true,
        items: 1,
        loop: true,
        responsive: {
            600: {
                items: 2
            }
        }
    })


});