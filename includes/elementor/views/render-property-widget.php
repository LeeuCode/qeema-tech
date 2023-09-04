<div class="row">
    <?php

    $argsProperty = array(
        'post_type' => 'property',
        'posts_per_page' => $settings['posts_limit'],
        'post_status' => 'publish',
        'order_by' => 'ID'
    );

    if (isset($settings['order'])) {
        $argsProperty['order'] = $settings['order'];
    }

    $property = new WP_Query($argsProperty);

    if ($property->have_posts()):
        while ($property->have_posts()):
            $property->the_post();

            get_template_part('components/property-block', null, $settings);

        endwhile;
    endif;
    ?>
</div>