<h3 class="heading-buscador">Buscador</h3>
<?php get_search_form() ?>
<?php
$categorias = get_categories([
    'taxonomy' => 'category',
    'orderby' => 'id'
]);

?>
<h3>Categorías</h3>


<nav class="categorias">
    <?php
    foreach ($categorias as $categoria) {
    ?>
        <a href="<?php echo get_category_link($categoria->term_id) ?>">
            <?php echo $categoria->name ?>
        </a>
    <?php
    }
    ?>
</nav>