<footer>
    <div class="container">
        <div class="content">
            <a href="<?php echo site_url(); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-footer.svg" alt="Logo: Escale maritime">
            </a>
            <div class="social">
                <p>Suivez-nous!</p>
                <a href="https://www.facebook.com/escalemaritime?locale=fr_CA">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/facebook.svg" alt="">
                </a>
            </div>
            <nav>
                <?php
                wp_nav_menu( array(
                    'menu' => 'Header',
                    'menu_class' => 'footer-navigation',
                    'container' => false,
                    'theme_location' => 'primary',
                ));
                ?>
            </nav>
            <div class="newsletter">
                <div class = "newsletter-text">
                <p>Restez informé !</p>
                <p>Inscrivez-vous à notre infolettre pour recevoir les dernières nouvelles.</p>
                </div>
                <div class = "newsletter-form">
                <input type="text">
                <button>soumettre</button>
                </div>
            </div>
        </div>
        <p>© <?php echo date("Y"); ?> L’Escale maritime de Trois-Pistoles - Tous droits réservés</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
