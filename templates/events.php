    <section class="events__section">
        <header class="header__events">
            <?php 
                $image = get_field('events_icon'); 
                if ($image) :
                    $image_url = is_array($image) ? $image['url'] : $image;
                ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <h2><?php the_field('events_title'); ?></h2>
        </header>

        <div class="events__cards">
            <?php
                $events = new WP_Query([
                    'post_type' => 'events',
                    'posts_per_page' => -1, // aucune limite pour le nombre de posts à afficher
                ]);

                if ($events->have_posts()) :
                    while ($events->have_posts()) : $events->the_post();
            ?>


            <div class="event">
                <div class="event__title">
                <h3><?php the_field('event_title'); ?></h3></div>
                <div class="event__image">
                    <?php 
                    $image = get_field('event_image');
                    if ($image) :
                        $image_url = is_array($image) ? $image['url'] : $image;
                    ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </div>
                <div class="event__time">
                    <?php
                    $event_date = get_field('event_date');
                    $event_end_date = get_field('event_end_date');
                    $event_hour = get_field('event_hour');

                    if ($event_date) {
                        if ($event_end_date) {
                            echo "Du " . esc_html($event_date) . ", " . esc_html($event_hour) . " au " . esc_html($event_end_date);
                        } else {
                            echo esc_html($event_date) . ", " . esc_html($event_hour);
                        }
                    }
                    ?>
                </div>
                <div class="event__infos">
                    <p class="event_address">
                        <?php the_field('event_adress'); ?>
                    </p>
                    <p class="event_cost">
                        <?php the_field('event_cost'); ?>
                    </p>
                </div>
            </div>

        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>
        </div>
    </section>
