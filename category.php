<?php if (!defined('ABSPATH')) die(); ?>
<?php get_header() ?>

<div class="entradas contenedor">

    <main class="">
        <h1>Mis entradas</h1>
        <section class="listado-entradas">

            <?php
            while (have_posts()) {
                the_post();
            ?>
                <div class="entrada">

                    <?php
                    the_post_thumbnail('medium', [
                        'class' => 'entrada-img',
                    ]);
                    ?>

                    <footer class="entrada-meta">
                        <?php the_category() ?>
                        <h2 class="entrada-heading"><?php the_title() ?></h2>

                        <p class="entrada-author">
                            <span>Escrito por: </span>
                            <a href="<?php get_author_posts_url(get_the_author_meta('ID')) ?>">
                                <?php the_author() ?></a>
                        </p>
                        <p class="entrada-fecha">Fecha <?php echo get_the_date() ?></p>
                        <a class="entrada-enlace" href="<?php the_permalink() ?>">Ver entrada</a>
                    </footer>
                    </a>
                </div>
            <?php
            }
            ?>
        </section>
    </main>

    <aside>
        <h2>Categorías</h2>
        <?php get_sidebar() ?>
    </aside>

</div>



<?php get_footer() ?>