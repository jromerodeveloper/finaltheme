<?php
if(!function_exists('finaltheme_excerpt_more')):
    function finaltheme_excerpt_more(){
        return '<a href="'.get_permalink().'">'.__(' Leer más...','finaltheme').'<i class="fab fa-readme"></i></a>';
    }
endif;

add_filter('excerpt_more','finaltheme_excerpt_more');

if(!function_exists('finaltheme_excerpt_length')):
    function finaltheme_excerpt_length(){
        return 40;
    }
endif;

add_filter('excerpt_length','finaltheme_excerpt_length');