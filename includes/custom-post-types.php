<?php

use Qeema\CPT;

/*=============================
    [01. Create Post Types]
===============================*/

$property = new CPT(
    'property',
    array(
        'supports' => array('title', 'thumbnail', 'excerpt'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-multisite',
    )
);

/*=============================
    [02. Create Taxonimes]
===============================*/
$propertyCat = array(
    'taxonomy_name' => 'property-category',
    'singular' => __('Category', 'aster'),
    'plural' => __('Categories', 'aster')
);

$property->register_taxonomy($propertyCat);

/*=============================
    [03. Sort & Rebuild Columns]
===============================*/

$columns = array(
    'cb' => '<input type="checkbox" />',
    'image' => __('Property Picture', 'qeema'),
    'title' => __('Name', 'qeema'),
    'area' => __('Area Title', 'qeema'),
    'date' => __('Date', 'qeema')
);

$property->columns($columns);

$property->populate_column('image', function ($column, $post) {
    echo '<img style="height:90px;border-radius: 5px;" src="' . get_the_post_thumbnail_url($post->ID) . '" >';
});

$property->populate_column('area', function ($column, $post) {
    echo '<strong>' . get_field('area', $post->ID) . '</strong>';
});