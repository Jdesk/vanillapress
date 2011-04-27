<?php
/**
 * The template for Register Sidebars
 * Currently Two Sidebar's are registered in this template
 *
 * @package rtPanel
 * @since rtPanel Theme 2.0
 */

add_action( 'widgets_init', 'rtp_widgets_init' );

function rtp_widgets_init() {

    /**
     * Register Right Sidebar Widget
     */

    register_sidebar( array(
        'name' => __( 'Sidebar Widgets', 'rtPanel' ),
        'id' => 'sidebar-widgets',
        'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ) );


    /**
     * Register Footer Widget
     */

     register_sidebar( array(
        'name' => __( 'Footer Widgets', 'rtPanel' ),
        'id' => "footer-widgets",
        'before_widget' => '<div id="%1$s" class="widget footerbar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ) );
}