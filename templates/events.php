<?php
$today = date('Ymd'); 

// Définition des arguments de la requête
$events_query_args = [
    'post_type'      => 'events',
    'posts_per_page' => ($events_limit > 0) ? $events_limit : -1, // Gérer la limite
    'meta_key'       => 'event_date',
    'orderby'        => 'meta_value',
    'order'          => 'ASC'
];

// Exclure les événements passés uniquement sur la page d'accueil
if (is_front_page()) {
    $events_query_args['meta_query'] = [
        [
            'key'     => 'event_date',
            'value'   => $today,
            'compare' => '>=' // Afficher uniquement les événements futurs
        ]
    ];
}

// Requête principale : récupérer les événements
$events = new WP_Query($events_query_args);

$upcoming_events = [];
$past_events = [];

if ($events->have_posts()) :
    while ($events->have_posts()) : $events->the_post();
        $event_date = get_field('event_date'); // Récupérer la date de l'événement

        // Vérifier si l'événement est à venir ou passé
        if ($event_date >= $today) {
            $upcoming_events[] = get_the_ID();
        } else {
            $past_events[] = get_the_ID();
        }
    endwhile;
    wp_reset_postdata();
endif;
?>

<?php
// Fonction pour nettoyer le nom des expositions en supprimant les accents et les caractères spéciaux
function sanitize_event_name($name) {
    $name = iconv('UTF-8', 'ASCII//TRANSLIT', $name); // Supprime les accents
    $name = strtolower($name); // Convertit en minuscules
    $name = preg_replace('/[^a-z0-9]+/', '-', $name); // Remplace espaces et caractères spéciaux par des tirets
    $name = trim($name, '-'); // Supprime les tirets en début ou fin
    return $name . '-' . uniqid(); // Ajoute un ID unique pour éviter les conflits
}

function format_event_date($date, $format = '%e %B %Y') {
    if (!$date) {
        return ''; // Retourne une chaîne vide si aucune date n'est fournie
    }

    // Configurer la locale en français
    setlocale(LC_TIME, 'fr_FR.UTF-8', 'fr_FR', 'fra', 'fr');

    // Convertir la date du format Ymd
    $datetime = DateTime::createFromFormat('Ymd', $date);
    if ($datetime) {
        // Utiliser strftime pour formater la date avec les accents
        return utf8_encode(strftime($format, $datetime->getTimestamp()));
    }

    return $date; // Si la conversion échoue, retourne la date brute
}

$events_limit = isset($events_limit) ? $events_limit : -1;
?>


<!-- Section Événements à venir -->
<section class="events__section">
    <header class="header__events">
        <h2>Événements à venir</h2>
    </header>

    <?php if (!empty($upcoming_events)) : ?>
    <div class="events__cards">
        <?php foreach ($upcoming_events as $event_id) : 
            setup_postdata(get_post($event_id));
            $event_name = get_field('event_title', $event_id);
            $event_id_sanitized = sanitize_event_name($event_name);
        ?>
        <div class="event">
            <div class="event__title">
                <h3><?php the_field('event_title', $event_id); ?></h3>
            </div>
            <div class="event__image">
                <?php 
                $image = get_field('event_image', $event_id);
                if ($image) :
                    $image_url = is_array($image) ? $image['url'] : $image;
                ?>
                    <img data-dialog="#event-modal-<?php echo $event_id_sanitized; ?>" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($event_name); ?>">
                <?php endif; ?>
            </div>
            <div class="event__time">
            <p>
                <?php 
                $event_date = get_field('event_date', $event_id);
                $event_hour = get_field('event_hour', $event_id);
                echo format_event_date($event_date) . ", " . esc_html($event_hour);
                ?>
            </p>
            </div>
            <div class="event__infos">
                <p class="event_address"><?php the_field('event_adress', $event_id); ?></p>
                <div class="event_end-info">
                    <p class="event_cost"><?php the_field('event_cost', $event_id); ?></p>
                    <p data-dialog="#event-modal-<?php echo $event_id_sanitized; ?>" class="event_en-savoir-plus">En savoir plus</p>
                </div>
            </div>
        </div>

        <!-- Modale -->
        <div class="dialog event__modal" id="event-modal-<?php echo $event_id_sanitized; ?>">
            <div class="event__modal-content">
                <button class="event__modal-btn-close btn-close">X</button>
                <div class="event__modal-infos">
                    <h2><?php the_field('event_full_title', $event_id); ?></h2>
                    <div class="event__modal-infos-major">
                        <div>
                            <span class="material-symbols-outlined">
                                calendar_month
                            </span>
                            <p>
                            <?php 
                            $event_date = get_field('event_date', $event_id);
                            $event_hour = get_field('event_hour', $event_id);
                            echo format_event_date($event_date) . ", " . esc_html($event_hour);
                            ?>
                            </p>
                        </div>
                        <div>
                            <span class="material-symbols-outlined">
                                location_on
                            </span>
                            <p><?php the_field('event_adress', $event_id); ?></p>
                        </div>
                        <div>
                        <span class="material-symbols-outlined">
                            attach_money
                        </span>
                            <p><?php the_field('event_cost', $event_id); ?></p>
                        </div>
                    </div>
                    <p><?php the_field('event_description', $event_id); ?></p>
                </div>
                <button class="event__modal-btn-fb">
                    <a href="<?php echo esc_url(get_field('event_btn_link', $event_id)); ?>" target="_blank"><?php the_field('event_btn_label', $event_id); ?></a>
                </button>
            </div>
        </div>

        <?php endforeach; wp_reset_postdata(); ?>
        </div>
    <?php else : ?>
        <h3 class="no-events">Aucun événement prévu pour l'instant. Revenez plus tard !</h3>
    <?php endif; ?>
    <?php if (is_front_page() && $events_limit > 0) : ?>
    <div class="events__btn">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('evenements'))); ?>" class="btn-view-all">
            Voir tous les événements
        </a>
    </div>
<?php endif; ?>
</section>

<!-- Section Événements passés -->
<?php if (!empty($past_events)) : ?>
<section class="events__section past-events">
    <header class="header__events">
        <h2>Événements passés</h2>
    </header>

    <div class="events__cards">
        <?php foreach ($past_events as $event_id) : 
            setup_postdata(get_post($event_id));
            $event_name = get_field('event_title', $event_id);
            $event_id_sanitized = sanitize_event_name($event_name);
        ?>
        <div class="event event--past">
            <div class="event__title">
                <h3><?php the_field('event_title', $event_id); ?></h3>
            </div>
            <div class="event__image">
                <?php 
                $image = get_field('event_image', $event_id);
                if ($image) :
                    $image_url = is_array($image) ? $image['url'] : $image;
                ?>
                    <img data-dialog="#event-modal-<?php echo $event_id_sanitized; ?>" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($event_name); ?>">
                <?php endif; ?>
            </div>
            <div class="event__time">
            <p>
                <?php 
                $event_date = get_field('event_date', $event_id);
                $event_hour = get_field('event_hour', $event_id);
                echo format_event_date($event_date) . ", " . esc_html($event_hour);
                ?>
            </p>
            </div>
            <div class="event__infos">
                <p class="event_address"><?php the_field('event_adress', $event_id); ?></p>
                <div class="event_end-info">
                    <p class="event_cost"><?php the_field('event_cost', $event_id); ?></p>
                    <p data-dialog="#event-modal-<?php echo $event_id_sanitized; ?>" class="event_en-savoir-plus">En savoir plus</p>
                </div>
            </div>
        </div>

        <!-- Modale -->
        <div class="dialog event__modal" id="event-modal-<?php echo $event_id_sanitized; ?>">
            <div class="event__modal-content">
                <button class="event__modal-btn-close btn-close">X</button>
                <div class="event__modal-infos">
                    <h2><?php the_field('event_full_title', $event_id); ?></h2>
                    <div class="event__modal-infos-major">
                        <div>
                            <span class="material-symbols-outlined">
                                calendar_month
                            </span>
                            <p>
                            <?php 
                            $event_date = get_field('event_date', $event_id);
                            $event_hour = get_field('event_hour', $event_id);
                            echo format_event_date($event_date) . ", " . esc_html($event_hour);
                            ?>
                            </p>
                        </div>
                        <div>
                            <span class="material-symbols-outlined">
                                location_on
                            </span>
                            <p><?php the_field('event_adress', $event_id); ?></p>
                        </div>
                        <div>
                        <span class="material-symbols-outlined">
                            attach_money
                        </span>
                            <p><?php the_field('event_cost', $event_id); ?></p>
                        </div>
                    </div>
                    <p><?php the_field('event_description', $event_id); ?></p>
                </div>
                <button class="event__modal-btn-fb">
                    <a href="<?php echo esc_url(get_field('event_btn_link', $event_id)); ?>" target="_blank"><?php the_field('event_btn_label', $event_id); ?></a>
                </button>
            </div>
        </div>

        <?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>
<?php endif; ?>
