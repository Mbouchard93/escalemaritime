<section class="values" role="region" aria-labelledby="values-heading">
        <h2 id="values-heading">
            <?php the_field('value_title'); ?>
        </h2>
        <p>
            <?php the_field('value_text'); ?>
        </p>
        <div class="values__cards">
            <div class="value__1">
                <div>
                    <?php 
                    $image = get_field('value_icon_1'); 
                    if ($image) :
                        $image_id = is_array($image) ? $image['ID'] : $image;
                        $image_url = is_array($image) ? $image['url'] : $image;
                        $image_alt = get_acf_image_alt($image_id, 'value_icon_1');
                    ?>
                        <img 
                            src="<?php echo esc_url($image_url); ?>" 
                            alt="<?php echo esc_attr($image_alt); ?>"
                            loading="lazy"
                            decoding="async"
                        >
                    <?php endif; ?>
                </div>
                <h3 id="value-heading-1">
                    <?php the_field('value_title_1'); ?>
                </h3>
                <p>
                    <?php the_field('value_text_1'); ?>
                </p>
            </div>
            <div class="value__2">
                <div>
                    <?php 
                    $image = get_field('value_icon_2'); 
                    if ($image) :
                        $image_id = is_array($image) ? $image['ID'] : $image;
                        $image_url = is_array($image) ? $image['url'] : $image;
                        $image_alt = get_acf_image_alt($image_id, 'value_icon_2');
                    ?>
                        <img 
                            src="<?php echo esc_url($image_url); ?>" 
                            alt="<?php echo esc_attr($image_alt); ?>"
                            loading="lazy"
                            decoding="async"
                        >
                    <?php endif; ?>
                </div>
                <h3 id="value-heading-2">
                    <?php the_field('value_title_2'); ?>
                </h3>
                <p>
                    <?php the_field('value_text_2'); ?>
                </p>
            </div>
            <div class="value__3">
                <div>
                    <?php 
                    $image = get_field('value_icon_3'); 
                    if ($image) :
                        $image_id = is_array($image) ? $image['ID'] : $image;
                        $image_url = is_array($image) ? $image['url'] : $image;
                        $image_alt = get_acf_image_alt($image_id, 'value_icon_3');
                    ?>
                        <img 
                            src="<?php echo esc_url($image_url); ?>" 
                            alt="<?php echo esc_attr($image_alt); ?>"
                            loading="lazy"
                            decoding="async"
                        >
                    <?php endif; ?>
                </div>
                <h3 id="value-heading-3">
                    <?php the_field('value_title_3'); ?>
                </h3>
                <p>
                    <?php the_field('value_text_3'); ?>
                </p>
            </div>
        </div>
    </section>