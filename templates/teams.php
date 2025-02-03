<section class="teams">
    <?php 
        $teams = new WP_Query([
            'post_type' => 'teams',
            'posts_per_page' => -1,
        ]);

        if ($teams->have_posts()) :
    ?>
        <div class="conseil-membre">
            <h2>Membres du Conseil</h2>
            <div class="layout">
                <?php while ($teams->have_posts()) : $teams->the_post(); ?>
                    <?php if (get_field('teams_section')) :  ?>
                        <div class="team">
                            <figure>
                                <img src="<?php echo esc_url(get_field('teams_img')['url']); ?>" alt="<?php the_title(); ?>">
                            </figure>
                            <div>
                                <h3><?php the_field('teams_name'); ?></h3>
                                <p><?php the_field('teams_job'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>

        <div class="equipe-travail">
            <h2>Équipe de Travail</h2>
            <div class="layout">
                <?php 
                    $teams->rewind_posts(); 
                    while ($teams->have_posts()) : $teams->the_post(); 
                ?>
                    <?php if (!get_field('teams_section')) : ?>
                        <div  class="team">
                            <figure>
                                <img src="<?php echo esc_url(get_field('teams_img')['url']); ?>" alt="<?php the_title(); ?>">
                            </figure>
                            <div>
                                <h3><?php the_field('teams_name'); ?></h3>
                                <p><?php the_field('teams_job'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php 
        endif;
        wp_reset_postdata();
    ?>
</section>
