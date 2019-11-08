<?php
if(!function_exists('finaltheme_custom_header')):
    function finaltheme_custom_header(){
        // Activar Logo Configurable
        add_theme_support('custom-logo',array(
            'height'=>100,
            'width'=>100,
            'flex-height'=>true,
            'flex-width'=>true
        ));

        // Activar Fondo Configurable
        add_theme_support('custom-background',array(
            'default-color'=>'FFF',
            'default-image'=>get_template_directory_uri().'/img/background-image.png',
            'default-repeat'=>'repeat',
            'default-position-x'=>'',
            'default-position-y'=>'',
            'default-size'=>'',
            'default-attachment'=>'fixed'
        ));

        // Activa la actualización selectiva de widgets en el personalizador
        add_theme_support('customize-selective-refresh-widgets');

        // Activar cabecera configurable
        // https://developer.wordpress.org/functionality/custom-headers/
        add_theme_support('custom-header',apply_filters(
            'finaltheme_custom_header_args',array(
                'default-image'=>get_template_directory_uri().'/img/header-image.jpg',
                'default-text-color'=>'0096D9',
                'width'=>1200,
                'height'=>720,
                'flex-width'=>true,
                'flex-height'=>true,
                'video'=>true,
                'wp-head-callback'=>'finaltheme_wp_header_style'
            )
        ));
    }
endif;

add_action('after_setup_theme','finaltheme_custom_header');

if(!function_exists('finaltheme_wp_header_style')):
    function finaltheme_wp_header_style(){
        $header_text_color = get_header_textcolor();
        ?>
        <style>
            .WP-Header-branding *{color:#<?php echo esc_attr($header_text_color);?>;}
        </style>
        <?php
    }
endif;