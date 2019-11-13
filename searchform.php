<?php // https://developer.wordpress.org/reference/functions/get_search_form/ ?>
<form role="search" method="get" class="Search" action="<?php echo home_url('/');?>">
    <input type="search" id="s" placeholder="<?php echo esc_attr_x('Buscar...','finaltheme');?>" value="<?php echo get_search_query();?>" name="s" title="<?php echo esc_attr_x('Buscar:','finaltheme');?>">
    <label for="s">
        <i class="fas fa-search"></i>
        <span class="screen-reader-text"><?php echo _x('Buscar','finaltheme');?></span>
    </label>
    <input type="submit" value="<?php echo esc_attr_x('Buscar', 'finaltheme');?>">
</form>