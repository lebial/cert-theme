jQuery(document).ready(function($){
	
	var settings = {	
		
		shapes: [
		
			'<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" style="enable-background:new 0 0 120 120;" xml:space="preserve"><g id="Symbols"><g transform="translate(-1540.000000, -199.000000)"><circle id="Oval" class="st0" cx="1600" cy="259" r="60"/></g></g></svg>',
			
			'<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 76 76" style="enable-background:new 0 0 76 76;" xml:space="preserve"><g id="Symbols"><g transform="translate(-1563.000000, -773.000000)"><g><rect id="Rectangle" x="1563" y="773" class="st0" width="76" height="76"/></g></g></g></svg>',
				
			'<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122 107" style="enable-background:new 0 0 122 107;" xml:space="preserve"> <g id="Symbols"> <g transform="translate(-1537.000000, -199.000000)"><polygon id="Triangle-Copy-3" class="st0" points="1598,199 1659,306 1537,306 		"/></g></g></svg>',
			
			'<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122 107" style="enable-background:new 0 0 122 107;" xml:space="preserve"><g id="Symbols"><g transform="translate(-1537.000000, -199.000000)"><polygon id="Triangle-Copy-3" class="st0" points="1598,306 1537,199 1659,199 		"/></g></g></svg>',
		
		],
		
		colors: [
			
			'#1D54DD', '#F4695B', '#011B3A'
			
		]
	}
	
	// global tracking variables
	var last_shape;
	var last_color;
	
	// random number generator
	function pickRandomNumber(min,max,previous){
	
  // pick a random number
  rand = Math.floor(Math.random() * (max - min + 1)) + min;

  // if that's the same number as last time, call the function again to pick a new one
   
	return rand;

}

	$(function () {
	
	 // pick random shape and set it as our new last_shape
	  last_shape = pickRandomNumber( 0, settings.shapes.length - 1);
	
	  // pick random color and set it as our new last_color
	  last_color = pickRandomNumber( 0, settings.colors.length - 1);
	  
		 var shape = settings.shapes[last_shape];
		 var color = settings.colors[last_color];
	  
	  $('.page-header .shapes .top').append('<div style="fill:' + color + ';">' + shape + '</div>');
	  
	  settings.shapes.splice(last_shape,1);
		settings.colors.splice(last_color,1);
	  
		last_shape = pickRandomNumber( 0, settings.shapes.length - 1);
	
	  // pick random color and set it as our new last_color
	  last_color = pickRandomNumber( 0, settings.colors.length - 1);
	  
		 var shape = settings.shapes[last_shape];
		 var color = settings.colors[last_color];
	  
	  $('.page-header .shapes .bottom .shape-1').append('<div style="fill:' + color + ';">' + shape + '</div>');
	  
	  settings.shapes.splice(last_shape,1);
		 settings.colors.splice(last_color,1);

		 var color = settings.colors[0];
	  
	  $('.page-header .shapes .bottom .shape-2').append('<div style="fill:' + color + ';">' + shape + '</div>');
	
	});

	
});