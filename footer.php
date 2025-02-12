<footer class="<?php if (is_page_template('our-team.php')) echo 'footer-team'; ?>">
    <div class="container">
        <div class="content">
            <a href="<?php echo site_url(); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-footer.svg" alt="Logo: Escale maritime">
            </a>
            <div class="social" aria-labelledby="social-heading">
                <p>Suivez-nous!</p>
                <a href="https://www.facebook.com/escalemaritime?locale=fr_CA" aria-label="Suivez-nous sur Facebook">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/facebook.svg" alt="Logo facebook" role="img">
                </a>
            </div>
            <nav aria-label="Navigation du pied de page">
                <ul class="footer-navigation">
                    <?php
                    $menu_items = wp_get_nav_menu_items('Header');
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
            <div class="newsletter" role="form" aria-labelledby="newsletter-heading">
                <div class="newsletter-text">
                    <p>Inscrivez-vous à notre infolettre pour recevoir les dernières nouvelles.</p>
                </div>
                    <a href="" role="button" aria-label="S'inscrire à l'infolettre">je m'inscrit</a>
            </div>
        </div>
        <p>© <?php echo date("Y"); ?> L’Escale maritime de Trois-Pistoles - Tous droits réservés</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
