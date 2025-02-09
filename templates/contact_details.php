<section class="contact-section">
    <h2>
        <?php the_field('contact_details_title'); ?>
    </h2>
        <!-- section contact details -->
    <div class="contact-section__details">
        <div class="contact-section__details-wrapper">
            <!-- Phone section -->
            <div class="contact-item--phone">
                <div class="contact-item__heading">
                    <div class="contact-item__icon-wrapper">
                        <?php
                        $image = get_field('contact_phone_icon');
                        if ($image) :
                            $image_url = is_array($image) ? $image['url'] : $image;
                        ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <p class="contact-item__title">
                        <?php the_field('contact_phone_title'); ?>
                    </p>
                </div>
                <p class="contact-item__content">
                    <?php the_field('contact_phone_number'); ?>
                </p>
            </div>
            <!-- Email section -->
            <div class="contact-item--email">
                <div class="contact-item__heading">
                    <div class="contact-item__icon-wrapper">
                        <?php
                        $image = get_field('contact_email_icon');
                        if ($image) :
                            $image_url = is_array($image) ? $image['url'] : $image;
                        ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <p class="contact-item__title">
                        <?php the_field('contact_email_title'); ?>
                    </p>
                </div>
                <p class="contact-item__content">
                    <?php the_field('contact_email_address'); ?>
                </p>
            </div>
            <!-- Address section -->
            <div class="contact-item contact-item--address">
                <div class="contact-item__heading">
                    <div class="contact-item__icon-wrapper">
                        <?php
                        $image = get_field('contact_address_icon');
                        if ($image) :
                            $image_url = is_array($image) ? $image['url'] : $image;
                        ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <p class="contact-item__title">
                        <?php the_field('contact_address_title'); ?>
                    </p>
                </div>
                <p class="contact-item__content">
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
                    <div class="contact-hours">
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
                    <p class="contact-hours__message">Horaires à venir</p>
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
                $image_url = is_array($image) ? $image['url'] : $image;                
            ?>
                <img class="image_contact" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
        </div>
    </div>
</section>
