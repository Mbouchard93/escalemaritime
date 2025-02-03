<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.juicer.io/embed/un-zeste-de-clementine-1fd227a4-3dc7-444f-bd0b-bc80d0b1a054/embed-code.js" async defer></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/leaflet.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>L'Escale Maritime de Trois-Pistoles</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-header.svg" alt="Logo: Escale maritime">
                </a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-burger.svg" class="btn-menu" data-dialog="#menu-mobile" />
            <?php
                wp_nav_menu( array(
                    'menu' => 'Header',
                    'menu_class' => 'desktop-navigation',
                    'container' => false,
                    'theme_location' => 'primary',
                ));
            ?>
            <aside id="menu-mobile" class="dialog">
                <div class="mobile-navigation">
                    <?php
                        wp_nav_menu( array(
                            'menu' => 'Header',
                            'container' => false,
                            'theme_location' => 'primary',
                        ));
                    ?>
                    <div class="btn-close">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btn-close.svg" />
                    </div>
                </div>
            </aside>
        </nav>

        <div class="header-wrapper">
            <?php if (is_front_page()) : ?>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-header.svg" alt="Logo: Escale maritime">
            <?php else : ?>
                <h1 class="page-title"><?php echo get_the_title(); ?></h1>
            <?php endif; ?>

            <?php if (
                is_page_template('mission.php') || 
                is_page_template('paba.php') || 
                is_page_template('our-team.php') || 
                is_page_template('about.php')
            ) : ?>
                <nav class="secondary-navigation">
                    <?php
                        wp_nav_menu( array(
                            'menu' => 'À propos',
                            'menu_class' => 'sub-navigation',
                            'container' => false,
                            'theme_location' => 'primary',
                        ));
                    ?>
                </nav>
            <?php endif; ?>

            <div class="header-images">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/header-1.png" aria-hidden="true" alt="Image d'une montagne bleu">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/header-2.png" aria-hidden="true" alt="Image d'une montagne bleu">
            </div>
        </div>
    </header>

