<?php
/**
 * Final Theme functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package WordPress
 * @subpackage finaltheme
 * @since 1.0.0
 * @version 1.0.0
 */

global $google_fonts;
global $font_awesome;
global $hamburgers;

$google_fonts = 'https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap';
$font_awesome = 'https://use.fontawesome.com/releases/v5.0.13/css/all.css';
$hamburgers = 'https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.9.3/hamburgers.min.css';

// https://codex.wordpress.org/Content_Width
// Establecer el ancho máximo permitido para cualquier contenido en el tema, como Embeds e imágenes
if(!isset($content_width)):
    $content_width = 800;
endif;

if(!function_exists('finaltheme_scripts')):
    function finaltheme_scripts(){
        global $google_fonts;
        global $font_awesome;
        global $hamburgers;

        wp_enqueue_style('google-fonts', $google_fonts, array(), '1.0.0', 'all');
        wp_enqueue_style('font-awesome', $font_awesome, array(), '5.0.13', 'all');
        wp_enqueue_style('hamburgers', $hamburgers, array(), '0.9.3', 'all');
        wp_enqueue_style('custom-properties', get_template_directory_uri().'/css/custom_properties.css', array('google-fonts'), '1.0.0', 'all');
        wp_enqueue_style('style',get_stylesheet_directory_uri().'/style.css',array('google-fonts','font-awesome','hamburgers','custom-properties'),'1.0.0','all');

        wp_enqueue_script('jquery');
        wp_enqueue_script('script',get_template_directory_uri().'/script.js',array('jquery'),'1.0.0',true);


    }
endif;

add_action('wp_enqueue_scripts','finaltheme_scripts');

if(!function_exists('finaltheme_menus')):
    function finaltheme_menus(){
        register_nav_menus(array(
            'main_menu'=>__('Menú Principal','finaltheme'),
            'social_menu'=>__('Menú Redes Sociales','finaltheme')
        ));
    }
endif;

add_action('init','finaltheme_menus');

if(!function_exists('finaltheme_register_sidebar')):
    function finaltheme_register_sidebar(){
        register_sidebar(array(
            'name'=>__('Sidebar principal','finaltheme'),
            'id'=>'main_sidebar',
            'description'=>__('Este es el sidebar principal','finaltheme'),
            'before_widget'=>'<article id="%1$s" class="Widget %2$s">',
            'after_widget'=>'</article>',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>',
        ));
    }
endif;

add_action('widgets_init','finaltheme_register_sidebar');

if(!function_exists('finaltheme_setup')):
    function finaltheme_setup(){
        // Agregando soporte para traducciones
        load_theme_textdomain('finaltheme',get_template_directory().'/languages');
        
        // Agregando soporte para imagen destacada
        add_theme_support('post-thumbnails');
        
        // Agregando soporte HTML5
        add_theme_support('html5',array(
            'commnent-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption'
        ));

        // Agregando formatos para Posts
        // https://codex.wordpress.org/Post_Formats
        add_theme_support('post-formats',array(
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat'
        ));

        // Agregando soporte para mostrar Título de la página
        // Permite que los themes y plugins administren el título. Si se activa, no debe usarse wp_title()
        add_theme_support('title-tag');

        // Activar Feeds RSS
        add_theme_support('automatic-feed-links');

        // Ocultar Tags innecesarios del Head
        // Versión de WordPress
        remove_action('wp_head','wp_generator');
        // Imprime sugerencias de recursos para los navegadores para precargar, pre-renderizar y pre-conectarse a sitios
        remove_action('wp_head','wp_resource_hints',2);
        // Muestra el enlace al punto final del servicio de Really Simple Discovery
        remove_action('wp_head','rsd_link');
        // Muestre el enlace al archivo de manifiesto de Windows Live Writer
        remove_action('wp_head','wlwmanifest_link');
        // Inyecta rel=shortlink en el encabezado si se define un shortlink para la página actual
        remove_action('wp_head','wp_shortlink_wp_head');
        // Quitar scripts para soporte a emojis
        // remove_action('wp_print_styles','print_emoji_styles');
        // remove_action('wp_head','print_emoji_detection_script',7);

        // Quitar la barra de administración en el Frontend
        // add_filter('show_admin_bar','__return_false');
    }
endif;

add_action('after_setup_theme','finaltheme_setup');

// require_once get_template_directory().'/inc/custom-admin.php';
require_once get_template_directory().'/inc/custom-description.php';
require_once get_template_directory().'/inc/custom-excerpt.php';
require_once get_template_directory().'/inc/custom-header.php';
require_once get_template_directory().'/inc/custom-login.php';
require_once get_template_directory().'/inc/customizer.php';