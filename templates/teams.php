<section class="teams">
    <?php 
        $teams = new WP_Query([
            'post_type' => 'teams',
            'posts_per_page' => -1,
        ]);

        if ($teams->have_posts()) :
    ?>
        <div class="conseil-membre" role="region" aria-labelledby="conseil-heading">
            <h2>Membres du Conseil</h2>
            <div class="layout">
                <?php while ($teams->have_posts()) : $teams->the_post(); ?>
                    <?php 
                        if (get_field('teams_section')) :  
                            $team_name = get_field('teams_name');
                            $team_job  = get_field('teams_job');
                            $team_img  = get_field('teams_img')['url'];
                            $team_link = get_field('teams_link'); 
                    ?>
                        <div class="team">
                            <figure>
                                <img 
                                    src="<?php echo esc_url($team_img); ?>" 
                                    alt="<?php the_title(); ?>"
                                    loading="lazy"
                                    decoding="async"
                                >
                            </figure>
                            <div>
                                <?php if ($team_link) : ?>
                                    <a 
                                        href="<?php echo esc_url($team_link); ?>" 
                                        target="_blank"
                                        rel="noopener noreferrer" 
                                        aria-label="<?php echo esc_attr(sprintf('En savoir plus sur %s', $team_name)); ?>"
                                    >
                                <?php endif; ?>
                                        <h3><?php echo esc_html($team_name); ?></h3>
                                        <?php if ($team_job) : ?>
                                            <p><?php echo esc_html($team_job); ?></p>
                                        <?php endif; ?>
                                <?php if ($team_link) : ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>

        <div class="equipe-travail" role="region" aria-labelledby="equipe-heading">
            <h2>Équipe de Travail</h2>
            <div class="layout">
                <?php 
                    $teams->rewind_posts(); 
                    while ($teams->have_posts()) : $teams->the_post(); 
                    
                    $team_name = get_field('teams_name');
                    $team_job  = get_field('teams_job');
                    $team_img  = get_field('teams_img')['url'];
                    $team_link = get_field('teams_link'); 
                ?>
                    <?php if (!get_field('teams_section')) : ?>
                        <div class="team">
                            <figure>
                                <img 
                                    src="<?php echo esc_url($team_img); ?>" 
                                    alt="<?php the_title(); ?>"
                                    loading="lazy"
                                    decoding="async"
                                >
                            </figure>
                            <div>
                                <?php if ($team_link) : ?>
                                    <a 
                                        href="<?php echo esc_url($team_link); ?>" 
                                        target="_blank"
                                        rel="noopener noreferrer" 
                                        class="team-member__link"
                                        aria-label="<?php echo esc_attr(sprintf('En savoir plus sur %s', $team_name)); ?>"
                                    >
                                <?php endif; ?>
                                        <h3>
                                            <?php echo esc_html($team_name); ?>
                                        </h3>
                                        <?php if ($team_job) : ?>
                                            <p>
                                                <?php echo esc_html($team_job); ?>
                                            </p>
                                        <?php endif; ?>
                                <?php if ($team_link) : ?>
                                    </a>
                                <?php endif; ?>
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
