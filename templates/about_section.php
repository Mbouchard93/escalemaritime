<section class="about-section">
    <!-- section du titre et image du fond -->
    <div class="about-title-container">
        <h2>
            <?php the_field('about_title'); ?>
        </h2>
    </div>
    <div class="content-block">
        <div class="content-text">
            <h3>
                <?php the_field('title_1'); ?>
            </h3>
            <p>
                <?php the_field('text_1'); ?>
            </p>
        </div>
        <div class="content-image">
            <?php
            $image = get_field('about_img_1');
            if ($image) :
                $image_url = is_array($image) ? $image['url'] : $image;
            ?>
                <img class="about-section__image" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
    </div>
    <div class="content-block content-block-education">
        <div class="content-text">
            <h3>
                <?php the_field('title_2'); ?>
            </h3>
            <p>
                <?php the_field('text_2'); ?>
            </p>
            <button class="content-button white">
                <a href="<?php echo get_field('about_btn_more')['link_btn']; ?>">
                    <?php echo get_field('about_btn_more')['label_btn']; ?>
                </a>
            </button>
        </div>
        <div class="content-image">
            <?php
            $image = get_field('about_img_2');
            if ($image) :
                $image_url = is_array($image) ? $image['url'] : $image;
            ?>
                <img class="about-section__image" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
    </div>
</section>