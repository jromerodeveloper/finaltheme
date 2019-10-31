<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
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
                <nav class="Menu">
                    <ul>
                        <?php wp_list_pages('title_li');?>
                    </ul>
                </nav>
            </section>
        </section>
    </header>
    <section class="Content">
        <div class="Content-container">
            <main class="Main">    
                <h2>Contenido Principal</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias optio repellat, velit rem corporis veritatis, nihil maxime vitae inventore quisquam quae eligendi tempore voluptas, nostrum accusantium perspiciatis corrupti voluptatum repellendus!</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias optio repellat, velit rem corporis veritatis, nihil maxime vitae inventore quisquam quae eligendi tempore voluptas, nostrum accusantium perspiciatis corrupti voluptatum repellendus!</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias optio repellat, velit rem corporis veritatis, nihil maxime vitae inventore quisquam quae eligendi tempore voluptas, nostrum accusantium perspiciatis corrupti voluptatum repellendus!</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias optio repellat, velit rem corporis veritatis, nihil maxime vitae inventore quisquam quae eligendi tempore voluptas, nostrum accusantium perspiciatis corrupti voluptatum repellendus!</p>
            </main>
            <aside class="Sidebar">
                <h2>Contenido Lateral</h2>
                <article class="Widget">
                    <h3>Buscar:</h3>
                    <form action="">
                        <input type="text">
                    </form>
                </article>
            </aside>
        </div>
    </section>
    <footer class="Footer">
        <section class="Footer-container">
            <div>
                <nav class="SocialMedia">
                    <ul>
                        <li><a href="#" target="_blank">facebook</a></li>
                        <li><a href="#" target="_blank">twitter</a></li>
                        <li><a href="#" target="_blank">github</a></li>
                        <li><a href="#" target="_blank">codeopen</a></li>
                        <li><a href="#" target="_blank">gitlab</a></li>
                    </ul>
                </nav>
            </div>
            <div>
                <p>
                    &copy;<?php echo date('Y');?> Copyright
                    <a href="#" target="_blank">@jromero</a>
                </p>
            </div>
        </section>
    </footer>
    <?php wp_footer();?>
</body>
</html>