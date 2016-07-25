$(document).ready(function(){

var menu_open = false,
    winWidth = window.innerWidth,
    winPadding  = window.innerHeight * 1;

var openMenu = function() {
    if (!menu_open)
    {
       $('.mobile-menu').css({
            'z-index':'200',
            'opacity':'1'
        });

       $('.moving-cont').css({
            'transform':'translate3d(-56px, 0, 0)',
            '-webkit-transform':'translate3d(-56px, 0, 0)'
        });

       menu_open = true;
    }
    else
    {
        $('.mobile-menu').css({
            'z-index':'-1',
            'opacity':'0'
        });

        $('.moving-cont').css({
            'transform':'translate3d(0, 0, 0)',
            '-webkit-transform':'translate3d(0, 0, 0)'
        });

        menu_open = false;
    }
};

var scrollTime = function() {

    var scrolled = $(window).scrollTop();

    $(".scrollTime:not(.animated)").each(function () {

        var $this = $(this);

        var offsetTop = '';

        if( winWidth <= 1024 ){
            offsetTop = $this.offset().top;
        } else {
            offsetTop = $this.offset().top + 150;
        }

        // console.log(scrolled + ' ' + winPadding + ' ' + offsetTop);

        if ( scrolled + winPadding > offsetTop ) {

            if ( $this.data('timeout') ) {

                window.setTimeout(function(){
                    $this.addClass('animated ' + $this.data('animation'));
                }, parseInt($this.data('timeout'),10));

            } else {

                $this.addClass('animated ' + $this.data('animation'));

            }

        }
    });
};

$(window).resize(function(){
    winWidth = window.innerWidth;
});

$('.cidea-burger').on('click', function(){
    openMenu();
});

$( document ).on( "scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", scrollTime );

scrollTime();

});