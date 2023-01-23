<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"> <!--lier css-->
</head>
    <header>
        <img class="logo-icon" src="<?php bloginfo('template_url'); ?>/assets/svg/logo-full.svg" alt="logo">
            <nav>
            <?php wp_nav_menu(array( 'theme_location' => 'menu_principal' )) ?>
            </nav>
    <a href="#" class="header__button">Wishlist</a>
</header>

<body>