<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 * Template Name: svgmap Template 
 */

get_header();
?>

<style type="text/css">
/*plugin styles*/
	.mapContainer{
		position 	: relative;
		width 		: 100%;
	}
	#euroMap svg#svg_map_europe{
		width 		: 100%;
		height 		: 100%;
		background 	: #bfe3e7;
	}
	#euroMap svg path{
		stroke 		: #747474;
		stroke-width: 1px;
		position 	: relative;
		transition 	: 130ms;
	}
	.country_name{
		font-size 	: 1.3rem;
		font-weight : 600;
		float 		: left;
	}
	#drag_panel{
		cursor 		: move;
		position 	: absolute;
	    z-index 	: 3;
	    right 		: 30%;
	    top 		: 25%;
		border 		: 1px solid #dcdcdc;
	    background 	: #ffffffd3;
	    width 		: 42%;
	    border-radius: 0.2rem;
	    -webkit-box-shadow: 2px 2px 6px 1px rgba(0,0,0,0.2);
		-moz-box-shadow: 2px 2px 6px 1px rgba(0,0,0,0.2);
		box-shadow: 2px 2px 6px 1px rgba(0,0,0,0.2);
	}

	#drag_panel_close {
		padding: 0 .5rem;
		cursor: pointer;
		z-index: 4;
		text-align: right;
		height: 1rem;
		color: #a20c0c;
	}
	#drag_panel .start_info{
		color: #464646;
		padding: 1rem 1rem 0;
		text-align: center;
	}
	.data_output_panel{
		display: none;
		padding: 0.5rem 1.5rem;
		color 		: #434343;
	}
	.data_output_panel .acf_meta{
		position 	: relative;
	    display 	: flex;
	    align-items : center;
	    margin 		: 0.4rem 0;
	}
	.data_output_panel label{
		max-width 	: 10rem;
	}
	.data_output_panel label,
	.map_key label{
		color 		: #444;
		font-weight : 600;
    	margin-bottom: 0.5em;
    	line-height: 1.4rem;
	}
	.data_output_panel .acf_value.big{
    	font-size 	: 2rem;
    	font-weight : 400;
    	color 		: #5C821D;
    	position 	: absolute;
    	right 		: 0;
    }
     .data_output_panel #sonderfaelle{
     	display: block;
     }
    .data_output_panel #sonderfaelle .acf_value{
    	max-height 	: 7rem;
    	overflow-y 	: auto;
    	display 	: flex;
    	margin-bottom: 1rem;
    	font-size 	: .95rem;
    	line-height : 1.3rem;
    }
    .data_output_panel .legal_status{
    	display 	: flex;
    	font-size 	: 0.9rem;
		margin 		: 0 0 1rem 0;
    }
    .data_output_panel .data_date {
    	margin-top: -0.8rem;
    	height: 1rem;

    }

    .data_output_panel .data_date label,
    .data_output_panel .data_date .acf_value{
    	font-size: .7rem;
    	font-weight: 400;
    	color: #343434;
    	margin-right: .4rem;
    }

    .data_output_panel .data_date .acf_value{
    	position: unset;
    	margin-top: -.4rem;
    }
    span.map_icon,
    span.map_icon_overlay{
    	width 		: 1.2rem;
    	margin-left : 0.2rem;
    	float 		: left;
	    pointer-events:none; 
    	fill 		: #343434;
    }
    svg.map_icon{
    	position 	: relative;
    	top 		: .3rem;
    }
    ul.map_key{
    	list-style: none;
    }
    .flex-container{
    	display 	: flex;
    }
    li.flex-item{
    	justify-content: flex-start;
    	margin: 0 2rem 0 0;
    }

    .map_key label{
    	float 		: left;
    }
	.svg_more_link{}
/*
	.country_tooltip{
    	background-color: #555555d3;
    	color 		: #fff;
    	text-align 	: center;
	    border-radius: 6px;
	    padding 	: .2rem .4rem;
	    position 	: absolute;
	    z-index 	: 4;
	    pointer-events:none; 
	}*/
	.data_output_panel #legalitaet.acf_meta{
		    text-align: right;
    width: 100%;
    display: block;
	}
	.data_output_panel #legalitaet.acf_meta span.map_icon{
		    float: right;
    width: 1.5rem;
    margin-top: -0.3rem;
	}
	.data_output_panel #abtreibung_legalitaet,
	.data_output_panel #verhutung_legalitaet{
		display: none;
	}
	.map_caption a{
		border-bottom: 2px solid #999;
		transition: 130ms;
	}
	.map_caption a:hover{
		border-bottom: 2px solid #333;
	}


/* scrollbar styling */
::-webkit-scrollbar {width: .2rem;}
::-webkit-scrollbar-track {background: #f1f1f1;}
::-webkit-scrollbar-thumb {background: #dcdcdc;}
::-webkit-scrollbar-thumb:hover {background: #777;}
	/*--------------------------------------------------------------
19.0 Media Queries
--------------------------------------------------------------*/

@media screen and (min-width: 20em) and (max-width: 48.875em) {
	.country_tooltip{
		border-radius: 3px;
	    padding 	: .1rem .2rem;
	    font-size: .7rem;
	}
	#drag_panel{
		width: 100%;
		top: 100%;
		right: 0;
		background: #fff;
	}
	#drag_panel #drag_panel_close{
		display: none;
	}
	.data_output_panel{
		padding: .7rem;
	}
	ul.map_key li.flex-item {
    	margin: 0 0.7rem 0 0;
	}
	ul.map_key label{
		font-weight: 400;
    margin-bottom: 0;
    line-height: 1rem;

	}
	span.map_icon,
    span.map_icon_overlay{
    	width 		: 0.8rem;
    	margin-left : 0;
   	fill 		: red;
    }



}
@media screen and (min-width: 30em) {
		
}
@media screen and (min-width: 48em) {
		
}
@media screen and (min-width: 67em ) {

}
@media screen and ( min-width: 79em ) {

}
@media screen and ( max-width: 48.875em ) and ( min-width: 48em ) {

}

	#stripe line {
        fill: #5C821D;
        stroke: white;
        stroke-linecap: square;
        stroke-linejoin: miter;
        stroke-width: .2rem;
      }
      g#test {
        mask: url(#mask);
        stroke-linecap: square;
        stroke-linejoin: miter;
      }
      g#test circle {
        fill: black;
      }
      span.map_icon_overlay{
    	position 	: absolute;
    	fill 		: #343434;
    	width 		: 0.8rem;
    	margin-top: -.5rem
    }



</style>


<?php

function add_map_styles() {

			echo "<script type='text/javascript'>alert('$message');</script>";

	if ( is_page_template( $template = 'page-svgmap.php' ) ) {
			echo "<script type='text/javascript'>alert('$message');</script>";

		 wp_enqueue_style( 'page-template', get_template_directory_uri().'/acf-map/acf-map-styles.css', 'all');
	}

}

add_action( ‘wp_enqueue_scripts’, add_map_styles );

//create country_data_array
$country_data_array = array();

//color codes to be extracted from ACF
$country_color0 	= "#F6F7BD"; 		// no data
$country_color1 	= "#5C821D"; 		// 
$country_color2 	= "#ffb612"; 		// mit Einschränkungen
$country_color3 	= "#A20C0C"; 		// ilegal
$country_color4 	= "#7CAA2D"; 		// legal
$country_color5 	= "#343434"; 		// blank_icon
$country_color7		= "url(#diagonalHatch)";//erlaubt


//default texts TODO make translatable
$walk_through_start 					= __("für mehr Information das Land anklicken", 'interactive-map-of-europe');
$label_text_legality  					= __("Legalität", 'interactive-map-of-europe');
$text_legality_noData					= __("legalität: keine Daten", 'interactive-map-of-europe');
$label_text_legality_abortion 			= __("Abtreibung", 'interactive-map-of-europe');
$label_text_legality_contraception 		= __("Verhütung", 'interactive-map-of-europe');
$label_text_anonymous_births 			= __("Anonyme Geburten", 'interactive-map-of-europe');
$label_text_babyhatches 				= __("Babyklappen", 'interactive-map-of-europe');
$label_text_anonymous_births_in_hatch	= __("aufgefundene Babys in Babyklappen", 'interactive-map-of-europe');
$label_text_info						= __("Sonderfälle", 'interactive-map-of-europe');
$link_text_moreinfo 					= __("mehr info", 'interactive-map-of-europe');
$label_text_status_date					= __("Stand der Daten", 'interactive-map-of-europe');

//post_type tp get data from
$post_type 			= "land";

//map defaults
$map_div_id 		= "euroMap";
$map_svg_url 		= get_template_directory_uri()."/assets/images/anogeb-map-simple.svg";	//parent theme
$map_svg_url 		= get_stylesheet_directory_uri()."/assets/images/anogeb-map-simple.svg";//child theme

//fetch all ACF country data
$args = array (
    'post_type' 	=> $post_type,			// your post type
    'posts_per_page'=> -1//, 				// grab all the posts
//  'meta_key' 		=> 'legalitat', 
//  'meta_compare' 	=> 'EXISTS'				// make sure the post have this acf value
);
$query = new WP_Query($args);

// index to add fields to country within loop
$c_index = 0;	

//loop through countries with data
while ($query->have_posts()): $query->the_post();
    
//fill array with country_name
    $country_name = get_the_title();
    $country_data_array[]= ["country"=>$country_name];
   
//check all custom fields
    $fields = get_fields();
    $post_id = get_the_ID();
    if( $fields ): 

//add each field to the corresponding country array  	
    	foreach( $fields as $name => $value ): 
    		$field = get_field_object($name);
    		$field_label = $field['label'];
    		$field_value = get_post_meta($post_id, $field['name']);
//var_dump($field_value);

    		$country_data_array[$c_index][$name] =  [$field_label => $field_value ? $field_value : ''];
    	endforeach;

	endif;
// count up country index
$c_index += 1;

endwhile;

//var_dump($country_data_array);


wp_reset_query();

?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/post/content', get_post_format() );
			endwhile; // End of the loop.
			?>
			<div class="mapContainer">
				<!-- <div class="country_tooltip"></div> -->


				<div id="drag_panel">
					<!-- Include a header DIV with the same name as the draggable DIV, followed by "header" -->
					<div id="drag_panel_close">x</div>
					<div class="start_info">
						<p><?php echo ($walk_through_start);?></p>
					</div>
					<div class="data_output_panel">
						
						<div class="country_name"></div>
						<div class="legal_status">
							<div id="legalitaet" class="acf_meta"></div>
							<!-- <div id="abtreibung_legalitaet" class="acf_meta"></div>
							<div id="verhutung_legalitaet" class="acf_meta"></div> -->
						</div>
						
						<div id="anonyme_geburten" class="acf_meta">
							<label></label><span class='acf_value big'></span>
						</div>
						<div id="anonyme_geburten_date" class="acf_meta data_date">
							<label></label><span class='acf_value'></span>
						</div>
						<div class="acf_meta vorhandene_babyklappen">
							<label></label><span class="acf_value big"></span>
						</div>
						<div id="vorhandene_babyklappen_date" class="acf_meta data_date">
							<label></label><span class='acf_value'></span>
						</div>
						<div class="acf_meta geburten_in_der_babyklappe">
							<label></label><span class="acf_value big"></span>
						</div>
						<div id="geburten_in_der_babyklappe_date" class="acf_meta data_date">
							<label></label><span class='acf_value'></span>
						</div>	
						<div id="sonderfaelle" class="acf_meta" class="acf_meta">
							<label></label><span class='acf_value'></span>
						</div>
						<div id="link" class="acf_meta"></div>
					</div>




				</div><!-- 		end drag_panel 		-->

				
				
				<div id="euroMap"></div>
				
				 <ul class="map_key flex-container">
					<li class="flex-item">
						<label>legal: </label>
						<span class="map_icon">
							<svg viewBox="0 0 5 5" xmlns="http://www.w3.org/2000/svg" class="map_icon">
								<circle cx="2" cy="2" r="2" style="fill:<?php echo $country_color4;?>"></circle>
							</svg>
						</span>
						
					</li>
					<li class="flex-item">
						<label>erlaubt: </label>
						<span class="map_icon" style="width: 1rem;">
							<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="map_icon">
								<circle cx="12" cy="12" r="12" style="fill:<?php echo $country_color7;?>"/>
							</svg>
						</span>
						
					</li>
					<li class="flex-item">
						<label>mit Einschränkungen: </label>
						<span class="map_icon">
							<svg viewBox="0 0 5 5" xmlns="http://www.w3.org/2000/svg" class="map_icon">
								<circle cx="2" cy="2" r="2" style="fill:<?php echo $country_color2;?>"/>
							</svg>
						</span>
						
					</li>
					<li class="flex-item">
						<label>illegal: </label>
						<span class="map_icon">
							<svg viewBox="0 0 5 5" xmlns="http://www.w3.org/2000/svg" class="map_icon">
								<circle cx="2" cy="2" r="2" style="fill:<?php echo $country_color3;?>"/>
							</svg>
						</span>
						
					</li>
					<li class="flex-item">
						<label>Länder mit Babyklappen: </label>
						<span class="map_icon">
							<svg viewBox="0 0 5 5" xmlns="http://www.w3.org/2000/svg" class="map_icon">
								<circle cx="2" cy="2" r="2" style="fill:#343434"/>
							</svg>
						</span>
						
					</li>

					
				</ul>

			</div><!-- #mapContainer -->
			<div class="map_caption">
				Verhütung und Abtreibung in Europa: <a href="https://www.contraceptioninfo.eu/node/7" title="contraceptioninfo.eu" class="anogeb_btn" target="_blank">contraceptioninfo.eu</a> & <a href="https://abort-report.eu" title="abort-report.eu" target="_blank">abort-report.eu</a>
				
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->


<script type="text/javascript">

	jQuery(document).ready(function( $ ) {
		
		//get country_data_array JSON
		var country_data = <?php echo json_encode($country_data_array)?>;
		const svg_icon_html='<span class="map_icon"><svg viewBox="0 0 5 5" xmlns="http://www.w3.org/2000/svg" class="map_icon"><circle cx="2" cy="2" r="2" class="map_icon"/></svg></span>';
				
//console.log(country_data)
		$(function(){
		
			// load svg
			var container = $("#<?php echo($map_div_id)?>"); //div to inject map into
            var svgUrl    = "<?php echo $map_svg_url;?>";
            var xmlDoc;
            $.get(svgUrl)
            	.done(injectSvg);

            function injectSvg(xmlDoc) {
            	var svg = $(xmlDoc).find("svg");
                container.append(svg);
                
                mapSetup();
            };

			// Make the data-overlay draggable:
			dragElement(document.getElementById("drag_panel"));

			function dragElement(elmnt) {
			  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;

			   elmnt.onmousedown = dragMouseDown;

			  if (document.getElementById(elmnt.id + "_close")) {
			    // if present, the header is where you move the DIV from:
			    document.getElementById(elmnt.id + "_close").onclick = closePanel;
			  } 
			  function closePanel(){
			  	$(document.getElementById("drag_panel")).toggle(300);
			  }

			  function dragMouseDown(e) {
			    e = e || window.event;
			    e.preventDefault();
			    // get the mouse cursor position at startup:
			    pos3 = e.clientX;
			    pos4 = e.clientY;
			    document.onmouseup = closeDragElement;
			    // call a function whenever the cursor moves:
			    document.onmousemove = elementDrag;
			  }

			  function elementDrag(e) {
			    e = e || window.event;
			    e.preventDefault();
			    // calculate the new cursor position:
			    pos1 = pos3 - e.clientX;
			    pos2 = pos4 - e.clientY;
			    pos3 = e.clientX;
			    pos4 = e.clientY;
			    // set the element's new position:
			    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
			    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
			  }

			  function closeDragElement() {
			    // stop moving when mouse button is released:
			    document.onmouseup = null;
			    document.onmousemove = null;
			  }
			}



            function mapSetup(){

            	//display countryname on hover (all paths)
            	/* TODO
            	* exclude none relevant paths like waterbodies
            	* get all entries from custom post type and create interaction from list
            	*/
            		 $("path").hover(function(){
            	 	$(this).css("stroke-width","2.5");
            	 },
            	 function(){
            	 	$(this).css("stroke-width","1");

            	 });
              /*  $("path").hover(function(){
                	showTooltip($(this),this);
                },
                function () {
                	hideTooltip();
                });*/
                
            	//get country legal-status
              	for (var x in country_data) {

              		if (country_data[x].legalitat) {
              		
              			// used for problematic ID with spaces
              			var country_id = "[id='"+country_data[x].country+"']"; 
              			// get correct colors
              			var col = countryColors(Object.values(country_data[x].legalitat));
              			//fill
              			$(country_id).css({ fill: col });
              			//make paths with data clickable
		                $(country_id).css('cursor','pointer').click(function() {
		          			var pathID = $(this).attr("id"); //country name
		          			onCountryClick(pathID);
		         		 });
              		}
              		if (country_data[x].anzahl_der_vorhandenen_babyklappen_des_landes){
              			if(Object.values(country_data[x].anzahl_der_vorhandenen_babyklappen_des_landes)!="" && Object.values(country_data[x].anzahl_der_vorhandenen_babyklappen_des_landes) != "0"){
              				placeIcon(country_data[x]);
              			}
              		}
              	}//endfor
         	}// end mapsetup

         	function placeIcon(country_data){
         		//var country_id_cleaned = "[id='"+country_data.country+"']";
         		
				var country_id_cleaned = "[id='"+country_data.country+"']";        		
				var pathid = document.getElementById($(country_id_cleaned).attr("id"));

  				var svgmap = document.getElementById("euroMap");

  				var svg_icon_html2 = '<span class="map_icon_overlay ' + $(country_id_cleaned).attr("id") + '"><svg viewBox="0 0 5 5" xmlns="http://www.w3.org/2000/svg" class="map_icon"><circle cx="2" cy="2" r="2" class="map_icon"/></svg></span>';

				$(svgmap).append(svg_icon_html2);
				var icoico = $(pathid).find("span.map_icon_overlay." + $(country_id_cleaned).attr("id"));
				//$(icoico).setAttribute("id",country_id_cleaned);
				//var map_icon = icoico.find("map_icon").addClass(country_id_cleaned);
				
				var pathcoordinatesarray = pathCoords(country_data);
console.log("path with icon::" + country_data);
				var coordx = pathcoordinatesarray.pathx + (pathcoordinatesarray.width/2) - 5;
				var coordy = pathcoordinatesarray.pathy + (pathcoordinatesarray.height/2) - 10;
				
				$("span.map_icon_overlay."+$(country_id_cleaned).attr("id")).css({
					"top":coordy,
					"left":coordx

				});
//console.log(country_id_cleaned + " - " + pathcoordinatesarray);

         	}
         	function pathCoords(country_data){

				var country_id_cleaned = "[id='"+country_data.country+"']";        		
				var pathid = document.getElementById($(country_id_cleaned).attr("id"));
				//path.css('fill','red');
  				var rect = pathid.getBoundingClientRect();
  				var svgmap = document.getElementById("euroMap");
				var svgmap_bounding_rect = svgmap.getBoundingClientRect();
				var pathx = Math.round(rect.x-svgmap_bounding_rect.x);
				var pathy = Math.round(rect.y-svgmap_bounding_rect.y)

//console.log("- - "+country_data.country+pathx+" - "+Object.values(country_data.anzahl_der_vorhandenen_babyklappen_des_landes));
    			var pos = {  
                	pathx : pathx,
                	pathy : pathy,
                	width : Math.round(rect.width),
                	height: Math.round(rect.height),
					centerx :Math.round(pathx+rect.width/2)-20,
					centery :Math.round(pathy+rect.height/2)-20
    			}
    			return(pos);


			}

        	//	assign country colors according to legal-status
            function countryColors(status) {
    			return status == "green"|| status == "legal"				? "<?php echo $country_color4;?>"
         		: status == "part legal"|| status == "mit Einschränkungen" 	? "<?php echo $country_color2;?>"
         		: status == "tolerated" || status == "erlaubt" 				? "<?php echo $country_color7;?>"
         		: status == "red" 		|| status == "illegal"				? "<?php echo $country_color3;?>"
         		: "<?php echo $country_color0;?>";// no data
         	}

         	//	tooltip
			function showTooltip(path,evt) {
				//ensure tt doesn't flicker
				$(".country_tooltip").stop(true,true).fadeIn(200);
				
  				//output country name
        		var countryname = $(path).attr("id");
              	$(".country_tooltip").text(countryname);
              	$(path).attr('title', countryname);

              	//set tooltip position
              	var path = document.getElementById($(path).attr("id"));
  				var rect = path.getBoundingClientRect();
  				var svgmap = document.getElementById("euroMap");
				var svgmap_bounding_rect=svgmap.getBoundingClientRect();

              	$(".country_tooltip").css({
					left: ((rect.x-svgmap_bounding_rect.x)+rect.width/2)-20,
					top: (((rect.y-svgmap_bounding_rect.y)+rect.height/2)-20)
				});
            }
			function hideTooltip() {
				$(".country_tooltip").stop(true,true).fadeOut(400);
			}


			
			function onCountryClick(pathID){

			  	$(document.getElementById("drag_panel")).show(300);

				//output country name
				$(".country_name").text(pathID);

              	//check if country has data
              	for (var x in country_data) {
              		var country_name = country_data[x].country;
              		if(country_name === pathID)
					   data_view(country_data[x]);
				}
			}//end fn check_status

			function data_view(arr){
				// empty text fields
				reset_data_view();
				$(".start_info").remove();
				
				if(arr.legalitat){
					$("#legalitaet").html(Object.values(arr.legalitat) + svg_icon_html);	
					$(".data_output_panel circle.map_icon").css("fill",countryColors(Object.values(arr.legalitat)));
				}
				if(arr.abtreibung_legalitat){
					$("#abtreibung_legalitaet").html('<?php echo ($label_text_legality_abortion); ?>: ' + svg_icon_html);
					var col=Object.values(arr.abtreibung_legalitat) == "ja" ? "<?php echo $country_color1;?>" : "<?php echo $country_color3;?>";
					$("#abtreibung_legalitaet circle.map_icon").css("fill",col);
				}
				if(arr.verhutung){
					$("#verhutung_legalitaet").html('<?php echo ($label_text_legality_contraception); ?>: ' + svg_icon_html);
					var col=Object.values(arr.verhutung) == "ja" ? "<?php echo $country_color1;?>" : "<?php echo $country_color3;?>";
					$("#verhutung_legalitaet circle.map_icon").css("fill",col);
				}

				//anonymous births
				$("#anonyme_geburten").find('label').text('<?php echo ($label_text_anonymous_births); ?>: ');

				if(arr.anzahl_anonyme_geburten && Object.values(arr.anzahl_anonyme_geburten)!==false){

					$("#anonyme_geburten").find('span.acf_value').text(get_display_value(Object.values(arr.anzahl_anonyme_geburten)));

					if(arr.stand_der_daten_anon_geb && Object.values(arr.stand_der_daten_anon_geb)!=''){
						var yrlen = String(Object.values(arr.stand_der_daten_anon_geb)).length
						var label_text_status_date =  yrlen > 4 ? "in den Jahren " :  "im Jahr ";
						$("#anonyme_geburten_date").find('label').text(label_text_status_date);
						$("#anonyme_geburten_date").find('span.acf_value').text(Object.values(arr.stand_der_daten_anon_geb));
					}else{reset_data_view("#anonyme_geburten_date");}

				}else{$("#anonyme_geburten").find('span.acf_value').text("?");}
				

				// 	baby hatches
				$(".vorhandene_babyklappen").find('label').text('<?php echo ($label_text_babyhatches); ?>: ');
				if(arr.anzahl_der_vorhandenen_babyklappen_des_landes && Object.values(arr.anzahl_der_vorhandenen_babyklappen_des_landes)!==false){
					$(".vorhandene_babyklappen").find('span.acf_value').text(get_display_value(Object.values(arr.anzahl_der_vorhandenen_babyklappen_des_landes)));

					if(arr.stand_der_daten_babyklappen && Object.values(arr.stand_der_daten_babyklappen)!=''){
						$("#vorhandene_babyklappen_date").find('label').text('<?php echo ($label_text_status_date); ?>: ');
						$("#vorhandene_babyklappen_date").find('span.acf_value').text(Object.values(arr.stand_der_daten_babyklappen));
					}else{reset_data_view("#vorhandene_babyklappen_date");}

				}else{$(".vorhandene_babyklappen").find('span.acf_value').text("?");} 	
				

				// births in hatches
				$(".geburten_in_der_babyklappe").find('label').text('<?php echo ($label_text_anonymous_births_in_hatch); ?>: ');
				if(arr.anzahl_der_anonymen_geburten_in_der_babyklappe && Object.values(arr.anzahl_der_anonymen_geburten_in_der_babyklappe)!==false){
					$(".geburten_in_der_babyklappe").find('span.acf_value').text(get_display_value(Object.values(arr.anzahl_der_anonymen_geburten_in_der_babyklappe)));

					if(arr.stand_der_daten_babyklappen_geburten && Object.values(arr.stand_der_daten_babyklappen_geburten)!=''){
						var yrlen = String(Object.values(arr.stand_der_daten_babyklappen_geburten)).length
						var label_text_status_date =  yrlen > 4 ? "in den Jahren " :  "im Jahr ";
						$("#geburten_in_der_babyklappe_date").find('label').text(label_text_status_date);
						
						$("#geburten_in_der_babyklappe_date").find('span.acf_value').text(Object.values(arr.stand_der_daten_babyklappen_geburten));
					}else{reset_data_view("#geburten_in_der_babyklappe_date");}
				
				}else{$(".geburten_in_der_babyklappe").find('span.acf_value').text("?");}
				
				// sonderfälle
				if(arr.eine_kurze_beschreibung_fur_sonderfalle && Object.values(arr.eine_kurze_beschreibung_fur_sonderfalle)!=""){
					$("#sonderfaelle").find('label').text('<?php echo ($label_text_info); ?>: ');
					$("#sonderfaelle").find('span.acf_value').text(Object.values(arr.eine_kurze_beschreibung_fur_sonderfalle));
				}else{reset_data_view("#sonderfaelle");}

				// link
				if(arr.link_zu_kurzinfos && Object.values(arr.link_zu_kurzinfos)!=""){
					console.log(Object.values(arr.link_zu_kurzinfos));
					$("#link").html("<a href='" + Object.values(arr.link_zu_kurzinfos) + "' title='<?php echo ($link_text_moreinfo); ?>' target='_blank' class='svg_more_link'><?php echo ($link_text_moreinfo); ?> ></a>");
				}else{reset_data_view("#link");}

			}

			function get_display_value(obj_val){

				//if ! empty || -1
				return obj_val[0]!='' ? obj_val[0] : "?";
			}

			function display_cf_data(label,val){
				var html_out = "";
				return html_out
			}

			function reset_data_view(div_selector){
				$(".data_output_panel").css("display","block");
//console.log("reset_data_view- " + div_selector);
				$("#link").text("");
				if(!div_selector){	
					$(".acf_meta").find('label').text('');
					$(".acf_meta").find('span.acf_value').text('');
				}else{
					
					$(div_selector).find('label').text('');
					$(div_selector).find('span.acf_value').text('');
				}
			}
		});
	});
</script>

<?php get_footer();