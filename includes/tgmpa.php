<?php

require get_template_directory() . '/includes/classes/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'Qeema_register_required_plugins');

function Qeema_register_required_plugins()
{

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		array(
			'name'               => 'Elementor',
			'slug'               => 'elementor',
			'required'           => true, // this plugin is required
			'force_activation'   => true, // Force activation because we need Advanced Custom Fields,
			'force_deactivation' => true, // deactivate this plugin when the user switches to another theme
		)
	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'Qeema';

	$config = array(
		'domain'            => $theme_text_domain,           // Text domain - likely want to be the same as your theme.
		'default_path'      => '',                           // Default absolute path to pre-packaged plugins
		'parent_slug'   => 'themes.php',         // Default parent URL slug
		'menu'              => 'install-required-plugins',   // Menu slug
		'has_notices'       => true,                         // Show admin notices or not
		'is_automatic'      => false,            // Automatically activate plugins after installation or not
		'message'           => '',               // Message to output right before the plugins table

	);

	tgmpa($plugins, $config);
}
