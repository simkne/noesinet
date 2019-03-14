<?php
/**
 * The Header template of our theme.
 * @version 6.4.1
 */
?><!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php wpforge_body_schema();?> <?php body_class(); ?>><a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wp-forge' ); ?></a>
    <?php if( get_theme_mod('wpforge_nav_select') == 'offcanvas' || get_theme_mod('wpforge_mobile_display') == 'yes') { ?>
        <?php get_template_part('content', 'off_canvas'); ?>
    <?php } // end if ?>
    <?php if( get_theme_mod('wpforge_nav_select','topbar') == 'topbar') { ?>
        <?php if( get_theme_mod('wpforge_nav_position') == 'scroll' || get_theme_mod('wpforge_nav_position') == 'fixed') { ?>
            <?php get_template_part('content', 'nav'); ?>
        <?php } // end if ?>
    <?php } // end if ?>
    <div class="header_container">
    <header id="header" itemtype="http://schema.org/WPHeader" itemscope="itemscope" class="header_wrap grid-container" role="banner">
        <div class="grid-x grid-padding-x">
            <div class="site-header small-12 large-12 cell">
                <?php if ( function_exists( 'the_custom_logo' ) ) : ?>
                <div class="header-logo">
                    <?php the_custom_logo(); ?>
                </div><!-- /.header-logo -->
                <?php endif; ?>
                <div class="header-info">
                <?php
                if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                <?php
                endif;

                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
                endif; ?>
                </div><!-- /.header-info -->
                <?php if(function_exists('qtrans_generateLanguageSelectCode')){ ?>
                    <div id="language-selector" class="lang_sel">
                    <?php echo qtrans_generateLanguageSelectCode('image'); // You can use image, text or both as an argument here ?>
</div>
<?php } ?>
             </div><!-- .site-header -->
        </div><!-- .grid-x .grid-margin-x -->
    </header><!-- #header -->
    </div><!-- end .header_container -->
    <?php if( get_theme_mod('wpforge_nav_select','topbar') == 'topbar') { ?>
        <?php if( get_theme_mod('wpforge_nav_position','normal') == 'normal' || get_theme_mod('wpforge_nav_position') == 'sticky') { ?>
            <?php get_template_part('content','nav'); ?>
        <?php } // end if ?>
    <?php } // end if ?>
    <div class="content_container">
    <section class="content_wrap  grid-container" role="document">
        <div class="grid-x">