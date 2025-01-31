<section class="looking-future">
    <div class="looking-future__bg-top"></div>
    <div class="looking-future__section">
        <div class="looking-future__content">
            <h2 class="looking-future__title">
                <?php the_field('looking_future_title'); ?>
            </h2>
            <p class="looking-future__text">
                <?php the_field('looking_future_text_1'); ?>
            </p>
        </div>
        <div class="looking-future__image-container">
        <?php
            $image = get_field('looking_future_img_1');
            if ($image) :
                $image_url = is_array($image) ? $image['url'] : $image;
            ?>
                <img class="looking-future__image" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
    </div>
    <div class="looking-future__section">
        <div class="looking-future__content">
            <p class="looking-future__text">
            <?php the_field('looking_future_text_2'); ?>
            </p>
        </div>
        <div class="looking-future__image-container">
        <?php
            $image = get_field('looking_future_img_2');
            if ($image) :
                $image_url = is_array($image) ? $image['url'] : $image;
            ?>
                <img class="looking-future__image" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
    </div>
</section>