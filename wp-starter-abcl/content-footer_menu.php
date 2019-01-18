<?php
/**
 * The template that supplies our WordPress footer Menu
 * @version 6.4.1
 */
?>
<?php if ( has_nav_menu( 'footer' ) ) : ?>
	<div class="footer_nav_wrap small-12 medium-6 large-6 cell text-left">
		<nav id="footer-navigation" class="footer-navigation" role="navigation">
			<?php wp_nav_menu( array(
					'theme_location' => 'footer',
                    'container'       => 'div',
                    'container_class' => 'small-12 medium-6 large-6 cell',
                    'menu_class' => 'menu navleft',
					'depth'          => 1,
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>',
				) );
			?>
		</nav><!-- .footer-navigation -->
	</div><!-- .footer_nav_wrap -->
<?php endif; ?>
