<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.juicer.io/embed/l-escale-maritime-de-trois-pistoles/embed-code.js" async defer></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/leaflet.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>L'Escale Maritime de Trois-Pistoles</title>
    <?php wp_head(); ?>
</head>
<body>
    <header role="banner">
        <nav aria-label="Navigation principale">
            <div class="logo">
                <a href="<?php echo site_url(); ?>" aria-label="Retour à l'accueil">
                    <?php
                    $info = new WP_Query(array(
                        'post_type' => 'info',
                        'posts_per_page' => 1, 
                    ));
                    if ($info->have_posts()) :
                        $info->the_post();
                        $image = get_field('header_logo');
                      $imageUrl = $image['url'];
                    ?>
                            <img src="<?php echo $imageUrl; ?>" alt="Logo: Escale maritime">
                    <?php endif; wp_reset_postdata();  ?>
                </a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-burger.svg" class="btn-menu" data-dialog="#menu-mobile" role="presentation" />
            <?php
                wp_nav_menu(array(
                    'menu' => 'Header',
                    'menu_class' => 'desktop-navigation',
                    'container' => false,
                    'theme_location' => 'primary',
                    'aria-label' => 'Menu desktop',
                ));
            ?>
            <aside id="menu-mobile" class="dialog" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Menu mobile">
                <div class="mobile-navigation">
                    <?php
                        wp_nav_menu(array(
                            'menu' => 'Header',
                            'container' => false,
                            'theme_location' => 'primary',
                            'aria-label' => 'Menu mobile',
                        ));
                    ?>
                    <div class="btn-close" aria-label="Fermer le menu">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btn-close.svg" role="presentation" />
                    </div>
                </div>
            </aside>
        </nav>

        <div class="header-wrapper">
            <?php
            $parent_id = wp_get_post_parent_id(get_the_ID());

            if (is_front_page()) :
                if (isset($imageUrl)) : ?>
                    <img src="<?php echo $imageUrl; ?>" alt="Logo: Escale maritime">
                <?php endif; ?>
            
            <?php elseif (is_404()) : ?>
                <h1 class="error-title">404</h1>

            <?php elseif ($parent_id) : ?>
                <h1><?php echo get_the_title($parent_id); ?></h1>

            <?php else : ?>
                <h1><?php echo get_the_title(); ?></h1>
            <?php endif; ?>

            <?php if (
                is_page_template('mission.php') || 
                is_page_template('paba.php') || 
                is_page_template('our-team.php') || 
                is_page_template('about.php')
            ) : ?>
                <nav class="secondary-navigation" aria-label="Navigation secondaire">
                    <?php
                        wp_nav_menu(array(
                            'menu' => 'À propos',
                            'menu_class' => 'sub-navigation',
                            'container' => false,
                            'theme_location' => 'primary',
                        ));
                    ?>
                </nav>
            <?php endif; ?>

            <div class="header-images" aria-hidden="true" role="presentation">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-1.png" aria-hidden="true" alt="Image d'une montagne bleu" role="presentation">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-2.png" aria-hidden="true" alt="Image d'une montagne bleu" role="presentation">
            </div>
        </div>
    </header>