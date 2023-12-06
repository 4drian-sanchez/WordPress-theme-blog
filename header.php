<?php if (!defined('ABSPATH')) die(); ?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MI segundo tema">
    <meta name="author" content="Adrian Sanchez">
    <title><?php bloginfo();
            (!empty(wp_title())) ? ' - ' . wp_title() : '' ?></title>
    <!-- WP Head -->
    <?php wp_head() ?>
</head>

<body>
    <header class="header contenedor">
        <a class="logo" href="<?php echo get_site_url() ?>">Adrián <span>Sánchez</span></a>

        <nav class="menu-principal">
            <?php
            echo strip_tags(wp_nav_menu([
                'container' => false,
                'echo' => false,
                'items-wrap' => '%3$s',
                'theme_location' => 'menu-principal',
            ]), '<a>')
            ?>
        </nav>
    </header>