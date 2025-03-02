<footer class="<?php if (is_page_template('our-team.php')) echo 'footer-team'; ?>">
    <div class="container">
        <div class="content">
            <?php 
            $infologo = new WP_Query([
                'post_type'      => 'info',
                'posts_per_page' => 1, 
            ]);

            if ($infologo->have_posts()) :
                while ($infologo->have_posts()) : $infologo->the_post();
                    $image = get_field('footer_logo');
                    $imageUrl = !empty($image['url']) ? $image['url'] : ''; 

                    $newsletter = get_field('infolettre');
                    $labelnews = !empty($newsletter['label']) ? $newsletter['label'] : '';
                    $linknews = !empty($newsletter['link']) ? $newsletter['link'] : '#';
                    $descnews = !empty($newsletter['text']) ? $newsletter['text'] : '';
                    $linkFb = get_field('link_fb');

                    if (!empty($imageUrl)) : ?>
                        <a href="<?php echo site_url(); ?>"  aria-label="Retour à l'accueil">
                            <img src="<?php echo esc_url($imageUrl); ?>" alt="Logo: Escale maritime">
                        </a>
                    <?php endif;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

            <div class="social" aria-labelledby="social-heading">
                <p>Suivez-nous!</p>
                <a href="<?php echo esc_url($linkFb); ?>" target="_blank" aria-label="Suivez-nous sur Facebook">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/facebook.svg" alt="Logo facebook" role="img">
                </a>
            </div>

            <nav aria-label="Navigation du pied de page">
                <ul class="footer-navigation">
                    <?php
                    $menu_items = wp_get_nav_menu_items('header'); 
                    if ($menu_items) {
                        foreach ($menu_items as $item) {
                            if ($item->title === 'Contact') {
                                echo '<li><a href="' . esc_url($item->url) . '"> contactez-nous</a></li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </nav>

            <?php if (!empty($newsletter['label']) && !empty($newsletter['link'])) : ?>
                <div class="newsletter" role="form" aria-labelledby="newsletter-heading">
                    <div class="newsletter-text">
                    <?php if (!empty($descnews)) : ?>
                        <p><?php echo esc_html($descnews); ?></p>
                    <?php endif; ?>
                    </div>
                    <a href="<?php echo esc_url($linknews); ?>" target="_blank"  role="button" aria-label="S'inscrire à l'infolettre">
                        <?php echo esc_html($labelnews); ?>
                    </a>
                </div>
            <?php endif; ?>

        </div>
        <p>© <?php echo date("Y"); ?> L’Escale maritime de Trois-Pistoles - Tous droits réservés</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
