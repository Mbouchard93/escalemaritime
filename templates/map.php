<section class="map">
    <div class="map__container">
        <h2><?php the_field('map_title');?></h2>
        <div class="map__image">
        <?php 
            $image = get_field('map');
            if ($image) :
                $image_url = $image['url'];
            ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            </div>
        </div>
    </section>