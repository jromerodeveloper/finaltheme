<?php
if(!function_exists('finaltheme_customize_register')):
    function finaltheme_customize_register($wp_customize){
        $wp_customize->get_setting('blogname')->transport='postMessage';
        $wp_customize->get_setting('blogdescription')->transport='postMessage';

        if(isset($wp_customize->selective_refresh)):
            $wp_customize->selective_refresh->add_partial('blogname',array(
                'selector'=>'.WP-Header-title',
                'render_callback'=>'finaltheme_customize_blogname'
            ));
            $wp_customize->selective_refresh->add_partial(
                'blogdescription',array(
                    'selector'=>'.WP-Header-description',
                    'render_callback'=>'finaltheme_customize_blogdescription'
            ));
        endif;
    }
endif;

add_action('customize_register','finaltheme_customize_register');

if(!function_exists('finaltheme_customize_blogname')):
    function finaltheme_customize_blogname(){
        bloginfo('name');
    }
endif;

if(!function_exists('finaltheme_customize_blogdescription')):
    function finaltheme_customize_blogdescription(){
        bloginfo('description');
    }
endif;