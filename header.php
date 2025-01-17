<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body>
<header>
        <nav>
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-header.svg" alt="Logo: Escale maritime">
                </a>
            </div>
            <?php
                wp_nav_menu( $arg = array (
                    'menu' => 'Header',
                    'menu_class' => 'main-navigation',
                    'theme_location' => 'primary'
                ));
            ?>
        </nav>
    </header>