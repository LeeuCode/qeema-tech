<?php

function getElementorView($fileName)
{
	$path = get_template_directory() . '/includes/elementor/views/';
	$filePath = $path . $fileName . '.php';

	return $filePath;
}

function getElementorViewTemp($fileName)
{
	$path = get_template_directory() . '/includes/elementor/templates/';
	$filePath = $path . $fileName . '.php';

	return $filePath;
}

function add_elementor_widget_categories($elements_manager)
{
	$elements_manager->add_category(
		'qeema-category',
		[
			'title' => esc_html__('Qeema', 'Qeema'),
			'icon' => 'fa fa-plug',
		]
	);
}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');

function lc_elementor_register_widget($widgets_manager)
{
	$widgets_manager->register(new Qeema\Property_Widget());
}
add_action('elementor/widgets/register', 'lc_elementor_register_widget');