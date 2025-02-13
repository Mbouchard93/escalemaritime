<section class="partners" role="region" aria-labelledby="partners-heading">
    <h2 id="partners-heading">
        <?php the_field('partner_title'); ?>
    </h2>
    <ul>

    <?php
    $partenaires = new WP_Query(array(
        'post_type' => 'partners', 
        'posts_per_page' => -1, 
    ));

    if ($partenaires->have_posts()) {
        while ($partenaires->have_posts()) {
            $partenaires->the_post();
            $logo = get_field('partner_logo');
            $logo_url = $logo ? $logo['url'] : '';
            $description = get_field('partner_desc') ?: 'Aucune description.';
            ?>
            <li>
                <figure>
                    <img 
                        src="<?php echo esc_url($logo_url); ?>"
                        loading="lazy"
                        decoding="async"
                        alt="Logo du partenaire"
                    >
                </figure>
                <div class="bg"></div>
                <p><?php echo esc_html($description); ?></p>
            </li>
            <?php
        }
        wp_reset_postdata();
    }
    ?>

    </ul>
</section>
