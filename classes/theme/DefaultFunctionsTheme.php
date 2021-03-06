<?php

namespace theme_for_nix\classes\theme;

class DefaultFunctionsTheme
{
    public function __construct(){
        $this->my_constants();
        add_theme_support( 'post-thumbnails' );

        add_action( 'wp_enqueue_scripts', [ $this, 'load_style_script' ]);
        add_action( 'after_setup_theme', [ $this, 'theme_register_nav_menu' ]);
    }

    /**
     * Register CONST for lang-func
     */
    public function my_constants(){
        $cur_theme = wp_get_theme();

        define( 'THEME_FN_VERSION', $cur_theme->get( 'Version' ) );
        define( 'THEME_FN_TEXT_DOMAIN', $cur_theme->get( 'TextDomain' ) );
    }

    /**
     * Script_load
     */
    public function load_style_script ()
    {
        /**
         * Styles
         */
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', THEME_FN_VERSION);
        wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css', THEME_FN_VERSION);
        wp_enqueue_style('blog' , get_template_directory_uri() . '/assets/css/blog.css', THEME_FN_VERSION);
        wp_enqueue_style('navbar', get_template_directory_uri() . '/assets/css/navbar.css', THEME_FN_VERSION);

        /**
         * Scripts
         */
        wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
    }

    /**
     * Menu
     */
    public function theme_register_nav_menu() {
        register_nav_menu( 'primary', 'Primary Menu' );
    }

}