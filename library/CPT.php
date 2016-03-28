<?php
add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => "Progetti",
		"singular_name" => "Progetto",
		"menu_name" => "Progetti",
		"all_items" => "Tutti i Progetti",
		"add_new" => "Aggiungi nuovo",
		"add_new_item" => "Aggiungi nuovo Progetto",
		"edit" => "Modifica",
		"edit_item" => "Modifica Progetto",
		"new_item" => "Nuovo Progetto",
		"view" => "Visualizza",
		"view_item" => "Visualizza Progetto",
		"search_items" => "Cerca Progetto",
		"not_found" => "Nessun Progetto trovato",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "progetti", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 5,"menu_icon" => "dashicons-clipboard",		
		"supports" => array( "title", "editor", "author", "page-attributes", "post-formats" ),				
	);
	register_post_type( "progetti", $args );

	$labels = array(
		"name" => "Eventi",
		"singular_name" => "Evento",
		"menu_name" => "Eventi",
		"all_items" => "Tutti gli Eventi",
		"add_new" => "Aggiungi",
		"add_new_item" => "Aggiungi Evento",
		"edit" => "Modifica",
		"edit_item" => "Modifica Evento",
		"new_item" => "Nuovo Evento",
		"view" => "Visualizza",
		"view_item" => "Visualizza Evento",
		"search_items" => "Cerca Evento",
		"not_found" => "Nessun Evento trovato",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "eventi", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 6,"menu_icon" => "dashicons-calendar-alt",						
	);
	register_post_type( "eventi", $args );

	$labels = array(
		"name" => "Associati",
		"singular_name" => "Associato",
		"menu_name" => "Associati",
		"all_items" => "Tutti gli Associati",
		"add_new" => "Aggiungi",
		"add_new_item" => "Aggiungi Associato",
		"edit" => "Modifica",
		"edit_item" => "Modifica Associato",
		"new_item" => "Nuovo Associato",
		"view" => "Visualizza",
		"view_item" => "Visualizza Associato",
		"search_items" => "Cerca Associato",
		"not_found" => "Nessun Associato trovato",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
        "capabilities" => array(
            "edit_post"          => "update_core",
            "read_post"          => "update_core",
            "delete_post"        => "update_core",
            "edit_posts"         => "update_core",
            "edit_others_posts"  => "update_core",
            "delete_posts"       => "update_core",
            "publish_posts"      => "update_core",
            "read_private_posts" => "update_core"
        ),
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "associati", "with_front" => true ),
		"query_var" => true,
        "menu_position" => 2,
		"menu_icon" => "dashicons-groups",		
		"supports" => array( "title", "editor" ),				
	);
	register_post_type( "associati", $args );

// End of cptui_register_my_cpts_associati()
}
?>


