if( function_exists('acf_add_options_page') ) {
	
	
	acf_add_options_page(array(
		'page_title' 	=> 'Jumi', //change to the client name
		'menu_title'	=> 'Jumi', //change to the client name
		'menu_slug'	=> 'theme-general-settings', //change to the client name without space and special chars
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position' => 2,
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
//COMO USAR OS CAMPOS DE OPTIONS PAGE

/**
Quando vai mostrar direto no codeblock a informação
<?php the_field('nomedocampo',option) ?>
Quando usa Dynamic Data no Oxygen
1. Usar: PHP Funciont Return Value
2. Em function name usar: get_field
3. Em Function arguments usar: nome_do_campo,option
**/

