<?php
/**
 * The template used for displaying iframe content in page.php
 * @version 6.4.1
 */

$currentLang = qtrans_getLanguage();

if (qtranxf_getLanguage() == 'en') {
  $lang_sel="?lang=en_EN";
} elseif (qtranxf_getLanguage() == 'es') {
	$lang_sel="?lang=es_ES";
} elseif (qtranxf_getLanguage() == 'de') {
	$lang_sel="?lang=de_DE";
} elseif (qtranxf_getLanguage() == 'fr') {
	$lang_sel="?lang=fr_FR";
}

?>
		<script type="text/javascript">
			


function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
if(getParameterByName("country")){
	var queryparams="/#search-by-country&country="+getParameterByName("country");

}else{
	queryparams="";
}
var iframe_base_url="http://data.abortion-clinics.eu/";
var iframe_lang_sel="<?php echo($lang_sel);?>";
var iframe_country_sel="/#search-by-country&country="+getParameterByName("country");
var iframe_src=iframe_base_url+iframe_lang_sel+iframe_country_sel;


//iframe.src = iframe.src + '?' + params;
		
		</script>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title-page"><?php the_title(); ?></h1>		
		</header>
		<div class="entry-content-page">
			<?php //the_content(); ?>
				<script type="text/javascript">
					document.write('<iframe src="' + iframe_src + '" width="110%" height="2000" name="clinic_browser" style="border:none;padding:0;margin:0;" border="0">');
				</script>
				<p>Ihr Browser kann leider keine eingebetteten Frames anzeigen</p>
			</iframe>

		</div><!-- .entry-content -->	
	</article><!-- #post -->
