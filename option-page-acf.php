<?php

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Consultoria Mit', //change to the client name
		'menu_title'	=> 'Consultoria Mit', //change to the client name
		'menu_slug' 	=> 'consultoria-mit', //change to the client name without space and special chars
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'footer',
	));
	
	/*acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));*/
	
}
?>
