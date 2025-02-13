<section class="banner_partners" aria-labelledby="partners-heading">
    <h2 id="partners-heading">Nos partenaires</h2>
    <div 
        class="slider" 
        role="region" 
        aria-roledescription="carousel" 
        aria-label="Logos des partenaires"
        aria-live="polite"
    > 
        <button class="control--previous" aria-label="Diapositive précédente" aria-controls="slider_slides">
            <span aria-hidden="true" class="material-symbols-outlined">arrow_back_ios</span>
        </button>
        <ul id="slider_slides" class="slider_slides" role="list">
            <?php 
                $bannerPartners = new WP_Query([
                    'post_type'      => 'partners',
                    'posts_per_page' => -1,
                ]);

                $slide_index = 1; 
                if ($bannerPartners->have_posts()) :
                    while ($bannerPartners->have_posts()) : 
                        $bannerPartners->the_post();
                        
                        $image = get_field('partner_logo');
                        $partner_name = get_the_title(); 
                        $url = get_field('partner_link');

                        if ($image) {
                            $image_id  = $image['ID'];
                            $image_url = $image['url'];
                            $image_alt = !empty($image['alt']) ? $image['alt'] : 'Logo de ' . $partner_name;
                            ?>
                            <li class="slider_slide" role="group" aria-roledescription="slide" aria-label="Diapositive <?php echo $slide_index; ?>">
                                <a href="<?php echo esc_url($url); ?>" target="_blank" aria-label="Visiter le site de <?php echo esc_attr($partner_name); ?>">
                                    <figure>
                                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                    </figure>
                                </a>
                            </li>
                            <?php
                        } 

                        $slide_index++;
                    endwhile;
                    wp_reset_postdata();
                endif; 
            ?>
        </ul>
        <button class="control--next" aria-label="Diapositive suivante" aria-controls="slider_slides">
            <span aria-hidden="true" class="material-symbols-outlined">arrow_forward_ios</span>
        </button>
    </div>
</section>
