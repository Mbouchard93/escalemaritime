<section class="values">
        <h2><?php the_field('value_title'); ?></h2>
        <p>
            <?php the_field('value_text'); ?>
        </p>
        <div class="values__cards">
            <div class="value__1">
                <div>
                    <?php 
                    $image = get_field('value_icon_1'); 
                    if ($image) :
                        $image_url = is_array($image) ? $image['url'] : $image;
                    ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </div>
                <h3><?php the_field('value_title_1'); ?></h3>
                <p>
                    <?php the_field('value_text_1'); ?>
                </p>
            </div>
            <div class="value__2">
                <div>
                    <?php 
                    $image = get_field('value_icon_2'); 
                    if ($image) :
                        $image_url = is_array($image) ? $image['url'] : $image;
                    ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </div>
                <h3><?php the_field('value_title_2'); ?></h3>
                <p>
                    <?php the_field('value_text_2'); ?>
                </p>
            </div>
            <div class="value__3">
                <div>
                    <?php 
                    $image = get_field('value_icon_3'); 
                    if ($image) :
                        $image_url = is_array($image) ? $image['url'] : $image;
                    ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </div>
                <h3><?php the_field('value_title_3'); ?></h3>
                <p>
                    <?php the_field('value_text_3'); ?>
                </p>
            </div>
        </div>
    </section>