<div class="content_banner" role="region" aria-labelledby="banner-heading">
<?php 
    $image = get_field('banner_img');
    if ($image) :
        $image_url = $image['url'];
    ?>
        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" role="presentation">
    <?php endif; ?>
    <h2><?php the_field('banner_title')?></h2>
    <p><?php the_field('banner_text')?></p>
    <a class="btn" href="<?php echo get_field('banner_button')['link']; ?>" aria-label="<?php echo esc_attr($button['label'] . ' - ' . $banner_title); ?>">
        <?php echo get_field('banner_button')['label']; ?>
    </a>
</div>