<section class="banner_partners">
    <h2>Nos partenaires</h2>
    <div class="slider">
        <button class="control--previous">
            <span class="material-symbols-outlined">arrow_back_ios</span>
        </button>
        <ul class="slider_slides">
            <?php 
                $bannerPartners = new WP_Query([
                    'post_type' => 'partners',
                    'posts_per_page' => -1,
                ]);

                if ($bannerPartners->have_posts()) :
                    while ($bannerPartners->have_posts()) : $bannerPartners->the_post();
                        $image = get_field('partner_logo');
                        $imageUrl = $image['url'];
                        $url = get_field('partner_link');
            ?>
                <li class="slider_slide">
                    <a href="<?php echo esc_url($url); ?>" target="_blank">
                        <figure>
                            <img src="<?php echo esc_url($imageUrl); ?>" alt="Logo Partenaire">
                        </figure>
                    </a>
                </li>
            <?php
                    endwhile;
                endif;
            ?>
        </ul>
        <button class="control--next">
            <span class="material-symbols-outlined">arrow_forward_ios</span>
        </button>
    </div>
</section>
