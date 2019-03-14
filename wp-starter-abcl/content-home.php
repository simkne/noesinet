<?php
/**
 * The template used for displaying page content in front-page.php
 * @since WP-Forge 5.5.2.2
 * @version 6.4.1
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title-page"><?php the_title(); ?></h1>
		<?php if (! is_page_template('page-templates/front-page.php') || ! is_page_template( 'page-templates/full-width.php')) : ?>
			<?php the_post_thumbnail('full-width-thumb'); ?>
		<?php else : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>			
	</header>
		
	<div class="grid-x align-stretch">
		<div class="cell small-12 medium-12 large-6 small-order-2 large-order-1">
			<div class="entry-content-page front-page-content-left">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'wp-forge' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->
		</div>
		<div class="cell small-12 medium-12 large-6 small-order-1 large-order-2">
			<div class="front-page-content-right">
				<?php $aboclimap=get_stylesheet_directory_uri()."/images/abocli-map.svg";?>
				<object data="<?php echo $aboclimap; ?>" type="image/svg+xml" class="alignright wp-image-1089 clinic-map svg">
				</object>
			</div>
		</div>
	</div>
</article><!-- #post -->

