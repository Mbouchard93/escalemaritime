<section>
    
    <div class="section__events">
    <?php
        $events = new WP_Query([
            'post_type' => 'events',
            'posts_per_page' => -1, // aucune limite pour le nombre de posts à afficher
        ]);

        if ($events->have_posts()) :
            while ($events->have_posts()) : $events->the_post();
    ?>

        <section class="event">
            <h3><?php the_field('event_title'); ?></h3>
            <div class="event-image">
                <?php 
                $image = get_field('event_image'); // Récupère la valeur du champ ACF
                if ($image) :
                    // Vérifie si c'est un tableau (au cas où le format de retour est un tableau)
                    $image_url = is_array($image) ? $image['url'] : $image;
                ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>
            <div class="event_date">
                <?php the_field('event_date'); ?>
            </div>
            <div class="event_hour">
                <?php the_field('event_hour'); ?>
            </div>
            <div class="event_address">
                <?php the_field('event_adress'); ?>
            </div>
            <div class="event_cost">
                <?php the_field('event_cost'); ?>
            </div>
        </section>

    <?php
        endwhile;
        endif;
        wp_reset_postdata();
    ?>
    </div>
</section>
