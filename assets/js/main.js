jQuery(document).ready(function($){
	
	$('.drawer .headline').on('click', function(){
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('.drawer').removeClass('active');
			onResize()
		} else {
			$('.drawer .headline').removeClass('active');
			$('.drawer').removeClass('active');
			$(this).addClass('active');	
			$(this).parents('.drawer').addClass('active');
			onResize()
		}
	});
	
	$('.navicon').on('click', function(){
		if($('html').hasClass('open-mobile-nav')){
			$('html').removeClass('open-mobile-nav');
			$('.menu-item-has-children').removeClass('active');
		} else {
			$('html').addClass('open-mobile-nav');
		}
	})
	
	$('<span class="more"></span>').insertBefore( "li.menu-item-has-children > .sub-menu" );
	
	$('.menu .more').on('click', function(){
		
		if($(this).parent().hasClass('active')) {
			$(this).parent().removeClass('active');
		} else {
			$('.menu-item-has-children').removeClass('active');
			$(this).parent().toggleClass('active');	
		}
		
	});
	
	$(".c-page").find("h2:contains('Executive & Management Leadership')").attr('id', 'leadership');
	
	if(window.location.hash) {
    $('html, body').animate({
        scrollTop: $(window.location.hash).offset().top - 120
    }, 750);
	}
	
	$( window ).resize(function() {
		
		
		if ($(window).width() >= 1200) {
			$('html').removeClass('open-mobile-nav');
		} 
		
	});
	
	
	$(window).imagesLoaded(function () {
    
    $('.shape-shifter').slick({
	    autoplay: true,
			arrows: false,
	    fade: true,
	    focusOnSelect: true,
	    speed: 1000
	    
   	});
	
	});
	
	
});