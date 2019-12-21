$('.nav-itemss, .nav-item0').hover(function(){
    $(this).children('.mega-menu').animate({opacity: '1'});
}, function(){
    $(this).children('.mega-menu').animate({opacity: '0.8'});
});