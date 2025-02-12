<?php

$locations = array(); 

$partenaires = new WP_Query(array(
    'post_type' => 'partners', 
    'posts_per_page' => -1, 
));

if ($partenaires->have_posts()) {
    while ($partenaires->have_posts()) {
        $partenaires->the_post();

        $name = get_field('partner_name') ?: 'Nom indisponible';
        $coords = get_field('partner_coords'); 
        $logo = get_field('partner_logo');
        $logo_url = $logo ? $logo['url'] : '';
        $link = get_field('partner_link') ?: '#';
        $description = get_field('partner_desc') ?: 'Aucune description.';

        if ($coords) {
            $locations[] = array(
                'name' => $name,
                'coords' => explode(',', $coords), // Convertit les coordonnées en tableau [lat, lng]
                'logo' => $logo_url,
                'link' => $link,
                'description' => $description,
            );
        }
    }
    wp_reset_postdata();
}

?>


<script>
  var locations = <?php echo json_encode($locations); ?>;
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/map.js"></script>



<section class="map">
    <div class="map__container">
        <h2><?php the_field('map_title');?></h2>
        <div id="map"></div>
    </div>
</section>