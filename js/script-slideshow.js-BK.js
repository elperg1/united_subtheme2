$(document).ready(function () {
		
	//jCarousel Plugin
	$('.slideshow').jcarousel({
		vertical: true,	//display vertical carousel
		scroll: 1,	//auto scroll
		auto: 2,	//the speed of scrolling
		wrap: 'last',	//go back to top when reach last item
		initCallback: mycarousel_initCallback	//extra called back function
	});

	//Front page Carousel - Initial Setup
	//set all the item to full opacity
   	$('div#slideshow-carousel a img').css({'opacity': '0.5'});
   	
   	//readjust the first item to 50% opacity
   	$('div#slideshow-carousel a img:first').css({'opacity': '1.0'});
   	
   	//append the arrow to the first item
   	$('div#slideshow-carousel li a:first').append('')

 
  	//Add hover and click event to each of the item in the carousel
    $('div#slideshow-carousel li a').hover(
       	function () {
        	
        	//check to make sure the item is not selected
       		if (!$(this).has('span').length) {
       			//reset all the item's opacity to 50%
        		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '0.5'});
        		
        		//adust the current selected item to full opacity
   	    		$(this).stop(true, true).children('img').css({'opacity': '1.0'});
       		}		
       	},
       	function () {
        		
        	//on mouse out, reset all the item back to 50% opacity
       		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '0.5'});
       		
       		//reactivate the selected item by loop through them and look for the one
       		//that has the span arrow
       		$('div#slideshow-carousel li a').each(function () {
				//found the span and reset the opacity back to full opacity
       			if ($(this).has('span').length) $(this).children('img').css({'opacity': '1.0'});

       		});
        		
       	}
	).click(function () {

		//remove the span.arrow
	    $('span.arrow').remove();
	    
	    //append it to the current item        
		$(this).append('');
		
		//remove the active class from the slideshow main
		$('div#slideshow-main li').removeClass('active');
		
		//display the main image by appending active class to it.        
       	$('div#slideshow-main li.' + $(this).attr('rel')).addClass('active');	
        	
       	return false;
	});


});


//Carousel Tweaking
function mycarousel_initCallback(carousel) {
	
	// Pause autoscrolling if the user moves with the cursor over the clip.
	// resume otherwise
	carousel.clip.hover(function() {
		carousel.stopAuto();
	}, function() {
		carousel.startAuto();
	});
}
	