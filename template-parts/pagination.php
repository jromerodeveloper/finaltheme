<?php if(get_next_post_link()||get_preview_post_link()):?>
    <div class="Pagination">
        <nav>
            <?php 
            echo paginate_links(array(
                'prev_text'=>__('<span>&laquo; Anteriores</span>','finaltheme'),
                'next_text'=>__('<span>Siguientes &raquo;</span>','finaltheme')
            ));
            ?>
        </nav>
    </div>
<?php endif;?>