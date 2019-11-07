<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description');?>">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <header class="Header">
        <section class="Header-container">
            <div class="Logo">
                <a href="<?php echo esc_url(home_url('/'));?>">Logo</a>
            </div>
            <button class="Panel-btn"><?php _e('Menú Principal','finaltheme');?></button>
            <section class="Panel">
                <?php
                if(has_nav_menu('main_menu')):
                    wp_nav_menu(array(
                        'theme_location'=>'main_menu',
                        'container'=>'nav',
                        'container_class'=>'Menu'
                    ));
                else:?>
                <nav class="Menu">
                    <ul>
                        <?php wp_list_pages('title_li');?>
                    </ul>
                </nav>
                <?php
                endif; ?>
            </section>
        </section>
    </header>
    <section class="Content">