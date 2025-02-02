<!-- <?php
// Récupérer tous les partenaires (post type "partenaires", par exemple)
$partenaires = new WP_Query(array(
    'post_type' => 'partenaires', // Remplace par le nom de ton post type
    'posts_per_page' => -1, // Tous les partenaires
));

if ($partenaires->have_posts()) {
    $locations = array(); // Tableau pour les données Leaflet
    while ($partenaires->have_posts()) {
        $partenaires->the_post();

        // Récupération des champs ACF
        $name = get_field('partner_name') ?: 'Nom indisponible';
        $coords = get_field('partner_coords'); // Format : "48.1239, -69.1766"
        $logo = get_field('partner_logo');
        $logo_url = $logo ? $logo['url'] : '';
        $link = get_field('partner_link') ?: '#';
        $description = get_field('partner_desc') ?: 'Aucune description.';

        // Vérifie que les coordonnées sont valides
        if ($coords) {
            $locations[] = array(
                'name' => $name,
                'coords' => explode(',', $coords), // Convertit les coordonnées en tableau [lat, lng]
                'logo' => $logo_url, // URL du logo
                'link' => $link, // Lien
                'description' => $description, // Description
            );
        }
    }
    wp_reset_postdata();
}
?>


<script>
  var locations = <?php echo json_encode($locations); ?>;
  console.log(locations);
</script>
<script src="../../../assets/js/map.js"></script>

 -->

<section class="map">
    <div class="map__container">
        <h2><?php the_field('map_title');?></h2>
        <div id="map"></div>
    </div>
</section>