<?php 
if(!function_exists('finaltheme_custom_meta_description')):
    function finaltheme_custom_meta_description(){
        if(is_home() || is_front_page()):
            $description = get_bloginfo('description');
        elseif(is_category()||is_tag()):
            $description = strip_tags(term_description());
        elseif(is_single()||is_page()):
            the_post();
            $description = htmlentities(get_the_excerpt(),ENT_HTML5,'UTF-8');
            rewind_posts();
        elseif(is_author()):
            $description = get_the_author_meta('description');
        elseif(is_search()):
            $description = __('Resultados de la búsqueda: ','finaltheme').get_search_query();
        elseif(is_404()):
            $description = __('Error 404: No Encontrado','finatheme').get_bloginfo('description');
        else:
            $description = get_bloginfo('description');
        endif;

        echo $description;
    }
endif;