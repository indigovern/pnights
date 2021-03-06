<?php

require_once( 'inc/contact-issues.php' );
require_once( 'inc/customizer.php' );
require_once( 'inc/graphql.php' );
require_once( 'inc/newsletter-topics.php' );
require_once( 'inc/offices.php' );
require_once( 'inc/quick-links.php' );
require_once( 'inc/settings.php' );

add_theme_support( 'post-thumbnails' );

register_nav_menu( 'primary', "Header/mobile menu" );

// set default permalink structure for all sites
add_action( 'init', function () {
  global $wp_rewrite;
  $wp_rewrite->set_permalink_structure( '/%category%/%post_id%-%postname%' );
} );
