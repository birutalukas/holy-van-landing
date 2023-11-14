<?php
 
// Saving ACF Fields
add_filter('acf/settings/save_json', 'ct_acf_json_save_point');
 
function ct_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/lib/acf-json';
    
    // return
    return $path;
    
}

// Loading ACF Fields
add_filter('acf/settings/load_json', 'ct_acf_json_load_point');

function ct_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    // append path
    $paths[] = get_stylesheet_directory() . '/lib/acf-json';
    
    // return
    return $paths;
    
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'parent_slug'	=> 'themes.php',
	));
	
}
?>
