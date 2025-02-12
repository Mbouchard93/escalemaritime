<section class="partners">
    <h2><?php the_field('partner_title'); ?></h2>
    <ul>
        <?php
            $i = 1;
            while ($i <= 4) {
                $partenaire = get_field('patners_' . $i);

                if ($partenaire) {
                    $image = $partenaire['img'];
                    $image_id = is_array($image) ? $image['ID'] : $image;
                    $imageUrl = is_array($image) ? $image['url'] : $image;
                    $text = $partenaire['partners_text'];
                    $titre_partenaire = $partenaire['partners_title'] ?? 'Partenaire ' . $i; 

                    $image_alt = !empty($titre_partenaire) ? $titre_partenaire : get_acf_image_alt($image_id, 'Logo du partenaire');
                ?>
                <li>
                    <img src="<?php echo esc_url($imageUrl); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                    <p><?php echo esc_html($text); ?></p>
                </li>
                <?php
                }
                $i++;
            }
        ?>
    </ul>
</section>
