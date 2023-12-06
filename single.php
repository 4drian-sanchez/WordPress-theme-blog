<?php if (!defined('ABSPATH')) die(); ?>
<?php get_header() ?>

<!-- ENTRADA -->
<main class="contenedor-single">
    <?php
    while ((have_posts())) {
        the_post();
    ?>

        <h1 class="single-title"><?php the_title() ?></h1>

        <?php the_post_thumbnail('full', [
            'class' => 'single-img'
        ]) ?>
    <?php
        the_content();
    }
    ?>
    <?php
    if (!empty(get_post_meta(get_the_ID(), 'youtube')[0])) {
    ?>
        <iframe class="video-yt" src="https://www.youtube.com/embed/<?php echo get_post_meta(get_the_ID(), 'youtube')[0] ?>" frameborder="0" width="500" height="500">
        </iframe>
    <?php
    }
    ?>
    <!-- /ENTRADA -->

    <!-- COMENTARIOS -->
    <section class="comentarios">
        <?php comment_form() ?>

        <ul class="listado-comentarios">
            <h3 class="text-center text-primary">Comentarios</h3>
            <?php
            $comentarios = get_comments([
                'post_id' => $post->ID,
                'status' => 'approve'
            ]);

            if ($comentarios) {
                wp_list_comments([
                    'per_page' => 10,
                    'reverse_top_level' => false
                ], $comentarios);
            } else {
            ?>
                <h4 class="text-center text-primary">No hay comentarios</h4>
            <?php
            }
            ?>
        </ul>
    </section>
    <!-- /COMENTARIOS -->

</main>


<?php get_footer() ?>