$(document).ready(function(){

var menu_open = false;

$('.cidea-burger').on('click', function(){
    openMenu();
});

var openMenu = function() {
    if (!menu_open)
    {
       $('.mobile-menu').css({
            'z-index':'0',
            'opacity':'0'
        });

       menu_open = true;
    }
    else
    {
        $('.mobile-menu').css({
            'z-index':'200',
            'opacity':'1'
        }); 

        menu_open = false;
    }
};




});