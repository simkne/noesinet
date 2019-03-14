<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>


<script type="text/javascript">
	jQuery(document).ready(function( $ ) {

	// Code that uses jQuery's $ can follow here.
		$("#showsearchformbtn").unbind('click').click(function(){
        	$(".aws-container").toggle("fade");
        	$(".aws-search-field" ).focus()
    	});
	});
	// Code that uses other library's $ can follow here.
</script>

<button id="showsearchformbtn"></button>

<?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>