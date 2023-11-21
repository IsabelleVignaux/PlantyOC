<?php
/* Activation du thème enfant*/
add_action(
	'wp_enqueue_scripts', 'theme_enqueue_styles'
);
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
/* Ajout emplacement menu */
register_nav_menu("header","En-tête menu");

/* Ajout hook pour gérer le lien Admin quand l'utilisateur 
   est connecté
   Récupération de la liste des items du menu actuel et
   on insère le lien Admin à la bonne position dans le tableau
*/
function add_admin($items) {
if (is_user_logged_in()) {
    $new_links = array();
    $admin_item = array(
        'title'            => "Admin",
        'menu_item_parent' => '',
        'ID'               =>  '200',
        'db_id'            => '',
        'url'              => admin_url(),
        'classes'          => ['menu-item', 'hover-effect' ],
        'target' => '',
        'xfn' => '',
        'current' => '',
        'type' => ''
    );
    $new_links[] = (object) $admin_item;
    array_splice($items, -1, 0, $new_links);
}
return $items;
}

add_filter('wp_nav_menu_objects', 'add_admin');
?>