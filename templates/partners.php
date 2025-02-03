<section class="partners">
    <h2><?php the_field('partner_title'); ?></h2>
    <ul>
        <?php
            $i = 1;
            while ($i <= 4) {
                $partenaire = get_field('patners_' . $i);

                if ($partenaire) {
                    $image = $partenaire['img'];
                    $imageUrl = $image['url'];
                    $text = $partenaire['partners_text'];
                ?>
                <li>
                    <img src="<?php echo esc_url($imageUrl); ?>" alt="Logo Partenaire">
                    <p><?php echo $text; ?></p>
                </li>
                <?php
                }
                $i++;
            }
        ?>
    </ul>
</section>
