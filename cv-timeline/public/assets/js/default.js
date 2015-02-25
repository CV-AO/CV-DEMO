$(function() {
	if (typeof $.fn.textfill == 'function') {
		$('.header .company').textfill();
	}



	var tab_click = function(e, tab_num) {
		var start =  (tab_num === 'init' ? true : false);
		tab_num = null;

		var tab_num = (typeof tab_num === 'undefined' && tab_num !== null ? $(this).parent('li').index() : tab_num);
		console.log(tab_num);
		var tab_container = $(this).parents('.tabs').first().children('.tab-content');

		tab_container.children('.tab').eq(tab_num).addClass('active').siblings().removeClass('active');

		$(this).parent('li').addClass('active').siblings().removeClass('active');

/* 		if ($(this).hasClass('link') === false && start === false) { */
			e.preventDefault();
/* 		} */
	};

	$('.tabs .tab-links a').on('click', tab_click);

	$('.tab-links').each(function() {
		if ($(this).children('.active').length === 0) {
			$(this).children().first().children('a').trigger("click", "init");
		} else {
			$(this).children('.active').first().children('a').trigger("click", "init");
		}
	});




	$('.toggle').on('click', function() {
		if ($('body').hasClass('sidebar_open')) {
			$('body').removeClass('sidebar_open');
		} else {
			$('body').addClass('sidebar_open');
		}
	});

	$('body').bind('touchmove', function(e) {
		if ($(this).hasClass('sidebar_open')) {
			e.preventDefault();
		}
	});
	$('.slide').attr("data-bottom-top", "background-position: 50% -200px").attr("data-top-bottom", "background-position: 50% 0px");
});

$(window).on('scroll', function() {
	if ($(window).scrollTop() === 0) {
		$('.header').removeClass('inactive');
	} else {
		$('.header').addClass('inactive');
	}
});
if (typeof FB !== 'undefined') {
	FB.init({
		appId: '219388501582266',
		xfbml: true,
		version: 'v2.0'
	});
}