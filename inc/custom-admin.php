<?php
// https://codex.wordpress.org/Dashboard_Widgets_API
// https://codex.wordpress.org/Plugin_API/Admin_Screen_Reference
// https://codex.wordpress.org/Administration_Screens
// https://codex.wordpress.org/Adding_Administration_Menus

if(!function_exists('finaltheme_add_editor_styles')):
    function finaltheme_add_editor_styles(){
        global $google_fonts;
        add_editor_style($google_fonts);
        add_editor_style('css/custom_properties.css');
        add_editor_style('css/custom_editor_style.css');
    }
endif;

add_action('admin_init','finaltheme_add_editor_styles');

if(!function_exists('finaltheme_user_contactmethods')):
    function finaltheme_user_contactmethods($data_user){
        $data_user['facebook']=__('Facebook','finaltheme');
        $data_user['twitter']=__('Twitter','finaltheme');

        return $data_user;
    }
endif;

add_action('user_contactmethods','finaltheme_user_contactmethods');