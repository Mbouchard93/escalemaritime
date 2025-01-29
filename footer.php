<footer>
    <div>
    <a href="<?php echo site_url(); ?>">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-footer.svg" alt="Logo: Escale maritime">
    </a>
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
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>