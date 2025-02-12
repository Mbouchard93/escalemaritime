<section class="banner_partners" aria-labelledby="partners-heading">
    <h2>Nos partenaires</h2>
    <div class="slider" role="region" aria-roledescription="carousel" aria-label="Logos des partenaires"> 
        <ul class="slider_slides" role="list">
            <?php 
                $bannerPartners = new WP_Query([
                'post_type' => 'partners',
                'posts_per_page' => -1,
                ]);

                if ($bannerPartners->have_posts()) :
                    while ($bannerPartners->have_posts()) : $bannerPartners->the_post();
                        $image = get_field('partner_logo');
                        $imageUrl = $image['url'];
                        $url = get_field('partner_link') ;
                ?>

                <li class="slider_slide" role="group" aria-roledescription="slide" aria-label="<?php echo esc_attr($current_slide); ?>">
                    <a href="<?php echo esc_url($url); ?>" target="_blank" aria-label="Visiter le site de <?php echo esc_attr($partner_name); ?>">
                        <img src="<?php echo esc_url($imageUrl); ?>" alt="Logo Partenaire">
                    </a>
                </li>

            <?php
                    endwhile;
                endif;
            ?>
        </ul>
        <button class="prev" aria-label="Diapositive précédente" aria-controls="slider_slides">
            <span class="material-symbols-outlined" aria-hidden="true">arrow_back_ios</span> 
        </button> 
        <button class="next" aria-label="Diapositive suivante" aria-controls="slider_slides">
            <span class="material-symbols-outlined" aria-hidden="true">arrow_forward_ios</span>
        </button>
    </div>
</section>