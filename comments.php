<aside class="Comments">
<?php //if(have_comments()):?>
    <h3>
    <?php
    comments_number(
        __('No hay comentarios aún','finaltheme'),
        __('Hay un comentario publicado','finaltheme'),
        __('Hay % comentarios','finaltheme')
    );
    ?>
    </h3>
    <ol class="commentlist">
        <?php wp_list_comments();?>
    </ol>
<?php //endif;?>
<?php comment_form();?>
</aside>