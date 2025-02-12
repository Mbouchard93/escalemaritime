<div class="content_banner">
<?php 
    $image = get_field('banner_img');
    if ($image) :
        $image_id = is_array($image) ? $image['ID'] : $image;
        $image_url = is_array($image) ? $image['url'] : $image;
        $image_alt = get_acf_image_alt($image_id, 'banner_img');
    ?>
        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
    <?php endif; ?>
    <h2><?php the_field('banner_title')?></h2>
    <p><?php the_field('banner_text')?></p>
    <a class="btn" href="<?php echo get_field('banner_button')['link']; ?>">
        <?php echo get_field('banner_button')['label']; ?>
    </a>
</div>