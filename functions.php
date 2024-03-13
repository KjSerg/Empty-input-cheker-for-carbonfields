<?php
function enqueue_admin_scripts() {
	wp_enqueue_style('custom-admin-css', get_template_directory_uri() . '/assets/css/admin.css', array(), '1.0');
	wp_enqueue_script('custom-admin-scripts', get_template_directory_uri(). '/assets/js/admin.js', array('jquery'), '1.0', true);
}

add_action('admin_enqueue_scripts', 'enqueue_admin_scripts');