            <aside class="Sidebar">
                <?php
                if(is_active_sidebar('main_sidebar')):
                    dynamic_sidebar('main_sidebar');
                else:
                ?>
                <h2>Contenido Lateral</h2>
                <article class="Widget">
                    <h3><?php _e('Buscar:','finaltheme');?></h3>
                    <?php get_search_form();?>
                </article>
                <?php
                endif; ?>
            </aside>