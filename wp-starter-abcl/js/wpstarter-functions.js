/*!
 * This is where you can add all of your functions to make things like sliders, lightboxes and any cool java scripts to work.
 * By adding them here, they will not be lost when updating WP-Forge
 *
 * @since WP-Starter 2.0
 */

(function($) { // Add java script to footer so all Foundation scripts will work
jQuery(document).foundation()

	// Joyride
	.foundation('joyride', 'start');

	// Add button class to all submit buttons
	jQuery('input[type="submit"]').addClass('tiny button');
	
	// Adds flex video to embeded video: http://foundation.zurb.com/docs/components/flex-video.html
	jQuery('iframe[src*="vimeo.com"]').wrap('<div class="flex-video widescreen vimeo" />');
	jQuery('iframe[src*="dailymotion.com"]').wrap('<div class="flex-video widescreen" />');
	jQuery('iframe[src*="youtube.com"]').wrap('<div class="flex-video widescreen" />');
	
	// BackToTop Button: Controls the fade in of the BacktoTop Button
	jQuery(window).load(function() {
		jQuery("#topofpage").hide().removeAttr("href");
		if (jQuery(window).scrollTop() != "0")
			jQuery("#backtotop").fadeIn("slow")
		var scrollDiv = jQuery("#backtotop");
		jQuery(window).scroll(function(){
			if (jQuery(window).scrollTop() == "0")
				jQuery(scrollDiv).fadeOut("slow")
			else
				jQuery(scrollDiv).fadeIn("slow")
		});	
	});	
	// BacktoTop
	jQuery('#backtotop').click(function(){
		jQuery('html, body').animate({
		scrollTop: jQuery('body').offset().top
		}, 1000); // Change this value to control the speed of the scroll back to the top of the page.		   
	});		
	
// end loading all functions   
   
})(jQuery);