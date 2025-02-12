<section class="contact-section" aria-labelledby="contact-heading">
    <h2>
        <?php the_field('contact_details_title'); ?>
    </h2>
        <!-- section contact details -->
    <div class="contact-section__details">
        <div class="contact-section__details-wrapper">
            <!-- Phone section -->
            <div class="contact-item--phone" role="group" aria-labelledby="phone-title">
                <div class="contact-item__heading">
                    <div class="contact-item__icon-wrapper">
                        <?php
                        $image = get_field('contact_phone_icon');
                        if ($image) :
                            $image_id = is_array($image) ? $image['ID'] : $image;
                            $image_url = is_array($image) ? $image['url'] : $image;
                            $image_alt = get_acf_image_alt($image_id, 'contact_phone_icon');
                        ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" role="presentation">
                        <?php endif; ?>
                    </div>
                    <p class="contact-item__title">
                        <?php the_field('contact_phone_title'); ?>
                    </p>
                </div>
                <p class="contact-item__content" aria-label="Téléphone: <?php echo esc_attr(get_field('contact_phone_number')); ?>">
                    <?php the_field('contact_phone_number'); ?>
                </p>
            </div>
            <!-- Email section -->
            <div class="contact-item--email" role="group" aria-labelledby="email-title">
                <div class="contact-item__heading">
                    <div class="contact-item__icon-wrapper">
                        <?php
                        $image = get_field('contact_email_icon');
                        if ($image) :
                            $image_id = is_array($image) ? $image['ID'] : $image;
                            $image_url = is_array($image) ? $image['url'] : $image;
                            $image_alt = get_acf_image_alt($image_id, 'contact_email_icon');
                        ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" role="presentation">
                        <?php endif; ?>
                    </div>
                    <p class="contact-item__title">
                        <?php the_field('contact_email_title'); ?>
                    </p>
                </div>
                <p class="contact-item__content"  aria-label="Courriel: <?php echo esc_attr(get_field('contact_email_address')); ?>">
                    <?php the_field('contact_email_address'); ?>
                </p>
            </div>
            <!-- Address section -->
            <div class="contact-item contact-item--address" role="group" aria-labelledby="address-title">
                <div class="contact-item__heading">
                    <div class="contact-item__icon-wrapper">
                        <?php
                        $image = get_field('contact_address_icon');
                        if ($image) :
                            $image_id = is_array($image) ? $image['ID'] : $image;
                            $image_url = is_array($image) ? $image['url'] : $image;
                            $image_alt = get_acf_image_alt($image_id, 'contact_address_icon');
                        ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" role="presentation">
                        <?php endif; ?>
                    </div>
                    <p class="contact-item__title">
                        <?php the_field('contact_address_title'); ?>
                    </p>
                </div>
                <p class="contact-item__content"  aria-label="Adresse: <?php echo esc_attr(get_field('contact_address')); ?>">
                    <?php the_field('contact_address'); ?>
                </p>
            </div>
            <!-- Opening hours section -->
            <?php 
                $monday_hours = get_field('monday_hours');
                $tuesday_hours = get_field('tuesday_hours');
                $wednesday_hours = get_field('wednesday_hours');
                $thursday_hours = get_field('thursday_hours');
                $friday_hours = get_field('friday_hours');
                $saturday_hours = get_field('saturday_hours');
                $sunday_hours = get_field('sunday_hours');

                if ($monday_hours || $tuesday_hours || $wednesday_hours || $thursday_hours || $friday_hours || $saturday_hours || $sunday_hours) : 
                ?>
                    <div class="contact-hours"  aria-label="Horaires d'ouverture">
                        <h4 class="contact-hours__title">
                            <?php the_field('contact_opening_hours_title'); ?>
                        </h4>
                        <div class="contact-hours__grid">
                            <div class="contact-hours__days">
                                <p>Lundi</p>
                                <p>Mardi</p>
                                <p>Mercredi</p>
                                <p>Jeudi</p>
                                <p>Vendredi</p>
                                <p>Samedi</p>
                                <p>Dimanche</p>
                            </div>
                            <div class="contact-hours__times">
                                <p><?php echo esc_html($monday_hours); ?></p>
                                <p><?php echo esc_html($tuesday_hours); ?></p>
                                <p><?php echo esc_html($wednesday_hours); ?></p>
                                <p><?php echo esc_html($thursday_hours); ?></p>
                                <p><?php echo esc_html($friday_hours); ?></p>
                                <p><?php echo esc_html($saturday_hours); ?></p>
                                <p><?php echo esc_html($sunday_hours); ?></p>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <p class="contact-hours__message" role="alert">Horaires à venir</p>
                <?php endif; ?>


            <!-- Additional text section-->
            <div class="contact-section__text-wrapper">
                <p class="contact-section__text">
                    <?php the_field('contact_text_1'); ?>
                </p>
                <p class="contact-section__text bold">
                    <?php the_field('contact_text_2'); ?>
                </p>
            </div>
        </div>
        <!-- section image -->
        <div class="contact-section__image-wrapper">
            <?php
            $image = get_field('image_contact_section');
            if ($image) :
                $image_id = is_array($image) ? $image['ID'] : $image;
                $image_url = is_array($image) ? $image['url'] : $image;
                $image_alt = get_acf_image_alt($image_id, 'image_contact_section');
            ?>
                <img class="image_contact" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" role="presentation">
                <?php endif; ?>
        </div>
    </div>
</section>
