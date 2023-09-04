<?php
namespace Qeema;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
if (!class_exists('ThemeSetup')) {
    class ThemeSetup
    {
        private static $_instance = null;

        public static function instance()
        {
            if (is_null(self::$_instance)) {
                self::$_instance = new self;
            }
            return self::$_instance;
        }

        public function __construct()
        {
            add_action('after_setup_theme', [$this, 'Qeema_cima_setup'], 99, 1);
        }

        public function Qeema_cima_setup()
        {
            add_theme_support('custom-logo');

            /*
             * Make theme available for translation.
             * Translations can be filed in the /languages/ directory.
             * If you're building a theme based on Twenty Twenty-One, use a find and replace
             * to change 'Qeema' to the name of your theme in all the template files.
             */
            load_theme_textdomain('Qeema', get_template_directory() . '/languages');

            // Add default posts and comments RSS feed links to head.
            add_theme_support('automatic-feed-links');

            /*
             * Let WordPress manage the document title.
             * This theme does not use a hard-coded <title> tag in the document head,
             * WordPress will provide it for us.
             */
            add_theme_support('title-tag');

            /*
             * Enable support for Post Thumbnails on posts and pages.
             *
             * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
             */
            add_theme_support('post-thumbnails');

            // Registers navigation menu locations for a theme.
            register_nav_menus(
                array(
                    'main' => esc_html__('Main menu', 'Qeema')
                )
            );

            /*
             * Switch default core markup for search form, comment form, and comments
             * to output valid HTML5.
             */
            add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
            );

            // Add support for responsive embedded content.
            add_theme_support('responsive-embeds');

            // Remove feed icon link from legacy RSS widget.
            add_filter('rss_widget_feed_link', '__return_empty_string');
        }
    }
}