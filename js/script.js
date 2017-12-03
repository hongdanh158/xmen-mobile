cateResize();
$(document).ready(function(){
    $(window).on('load resize',function(){
        cateResize();
    });
});
$(document).ready(function() {
	// Initialize Slidebars
	var controller = new slidebars();
	controller.init();
	$( '.trigger-menu' ).on( 'click', function ( event ) {

		if ($('.three-bars-icon').hasClass('close')) {
			$('.three-bars-icon').removeClass('close');
		}
		else {
			$('.three-bars-icon').addClass('close');
		}
		// Stop default action and bubbling
		event.stopPropagation();
		event.preventDefault();

		// Toggle the Slidebar with id 'id-2'
		controller.toggle( 'id-2');
	});
	$('.body').click(function(event) {
		if ($('.three-bars-icon').hasClass('close')) {
			$('.three-bars-icon').removeClass('close');
			controller.toggle( 'id-2');
		}
	});
	if($('.slider-product-group').length) {
		$('.slider-product-group .slider').bxSlider({
			slideWidth: 200,
		    minSlides: 3,
		    maxSlides: 3,
		    slideMargin: 10,
		    pager : false,
		});
	}
});

$('.o-brand-mobile > ul > li').click(function(event) {
	$(this).find('ul').eq(0).addClass('active')
});
if ($('.navbar-mobile').length) {
    $.each($(".navbar-mobile li"), function (index, obj) {
	    if ($(obj).has("ul").length) {
	        $(obj).has("ul").find("a:first").attr('href', 'javascript:void(0)');
	    }
	});
    $(".navbar-mobile li").click(function(event) {
    	$.each($(".navbar-mobile ul"), function (index, obj) {
		    $(".navbar-mobile li").removeClass('active');
		});
    	
    	$(this).find('ul:first').addClass('active');
    });
}
$(".navbar-mobile ul li").each(function(){
  if ($(this).has("ul").length) {
    $(this).find('a').eq(0).append('<i class="fa fa-caret-down"></i>');
  };
});
$.each($(".navbar-mobile ul li"), function (index, obj) {
  if ($(obj).has("ul").length) {
      $(obj).has("ul").find("a:first").attr('href', 'javascript:void(0)');
  }
});
function cateResize() {
	if ($('.all-cate').length) {
		var a = $('.all-cate .cate').width();
		$('.all-cate .cate').height(a * 319 / 369)
	}
}