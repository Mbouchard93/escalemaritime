<section class="banner_partners">
    <h2>Nos partenaires</h2>
    <div class="slider"> 
        <ul class="slider_slides">
            <?php 
                $bannerPartners = new WP_Query([
                    'post_type'      => 'partners',
                    'posts_per_page' => -1,
                ]);

                if ($bannerPartners->have_posts()) :
                    while ($bannerPartners->have_posts()) : $bannerPartners->the_post();
                        $image = get_field('partner_logo');
                        if ($image) :
                            $image_id  = $image['ID'];
                            $image_url = $image['url'];
                            $image_alt = get_acf_image_alt($image_id, 'partner_logo');
                            $url       = get_field('partner_link');
            ?>
                <li class="slider_slide">
                    <a href="<?php echo esc_url($url); ?>" target="_blank">
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                    </a>
                </li>
            <?php 
                        endif;
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
        </ul>
        <button class="prev">
            <span class="material-symbols-outlined">arrow_back_ios</span> 
        </button> 
        <button class="next">
            <span class="material-symbols-outlined">arrow_forward_ios</span>
        </button>
    </div>
</section>
