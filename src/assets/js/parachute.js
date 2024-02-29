.fix {
	position: fixed;
	width: 100%;
	height: 100%;
}

#scrollContainer {
  width: 100%;
  position: absolute; 
}




;(function($){
			$(window).ready(function(){
				
				
					
					Parachute.page({
						scrollContainer: '#scrollContainer',
						heightContainer: '#fakeScrollContainer'
					});
					Parachute.parallax({
						element: '.js-parallax-1',
						pxToMove: -100
						// topTriggerOffset: 200
					});
					
					Parachute.parallax({
						element: '.js-parallax-2',
						pxToMove: -50
					});
					
				
				Parachute.sequence({
					element: '.js-parallax-1',
					offset: 0,
					callback: function(active) {
						if (active) {
							$(this.$element).addClass('test');
						} else {
							$(this.$element).removeClass('test');
						}
					}
				});
				Parachute.init();
								
			});
		})(jQuery);