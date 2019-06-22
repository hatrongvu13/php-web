
var mMenu = function(){
    $('.btn-menu').click(function(){
        if($('.menu > ul').is(':hidden')){
            $(this).addClass('active');
            $('.menu>ul').slideDown(200);
        }else{
            $(this).removeClass('active');
            $('.menu>ul').slideUp(200);
        }
    });
    $('.menu').find("ul li").each(function(){
        if($(this).find('ul>li').length > 0){
            $(this).prepend('<i class="fa fa-chevron-down"></i>');
        }
    });
    $('.menu>ul').find('li i').click(function(){
        if ($(this).next().next().is(':hidden')) {
            $(this).removeClass('fa-chevron-down');
            $(this).addClass('fa-chevron-up');
            $(this).next().next().slideDown(200);
        }else{
            $(this).removeClass('fa-chevron-up');
            $(this).addClass('fa-chevron-down');
            $(this).next().next().slideUp(200);
        }
    });
}


$(function(){
    mMenu();
})