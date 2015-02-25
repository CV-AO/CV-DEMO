$(function() {
    var resize_scroll = function() {
        $('.body').css('padding-top', $('.header.fixed').height());
    };
    resize_scroll();
    $(window).on('resize', resize_scroll);
    $(window).on('scroll', resize_scroll);
    
    if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        $('.bcg.slide').attr("data-bottom-top", "margin-top: -50px").attr("data-top-bottom", "margin-top: 0");
		$('.bcg.slide.no-margin').attr("data-bottom-top", "margin-top: 0px").attr("data-top-bottom", "margin-top: 0");
		$('.bcg').attr("data-bottom-top", "background-position: 50% -200px").attr("data-top-bottom", "background-position: 50% 0px");
    }
/*     $("button:not(.no-arrow)").append("<i class='fa fa-chevron-right'></i>"); */
});