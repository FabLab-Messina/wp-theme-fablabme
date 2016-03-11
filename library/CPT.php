add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => "progetti",
		"singular_name" => "progetto",
		"menu_name" => "Progetti",
		"all_items" => "Tutti i Progetti",
		"add_new" => "Aggiungi nuovo",
		"add_new_item" => "Aggiungi nuovo Progetto",
		"edit" => "Modifica",
		"edit_item" => "Modifica Progetto",
		"new_item" => "Nuovo",
		"view" => "Vedi",
		);

	$args = array(
		"labels" => $labels,
		"description" => "Sezione dedicata alla scrittura della tua documentazione relativa al tuo progetto ",
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
		"name" => "eventi",
		"singular_name" => "evento",
		"menu_name" => "Eventi",
		"all_items" => "Tutti gli Eventi",
		"add_new" => "Aggiungi",
		"add_new_item" => "Aggiungi Evento",
		"edit" => "Modifica",
		"edit_item" => "Modifica Evento",
		"new_item" => "Nuovo evento",
		"view" => "Vedi",
		"view_item" => "Vedi Evento",
		"search_items" => "Cerca evento",
		"not_found" => "Nessun evento trovato",
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

// End of cptui_register_my_cpts()
}

