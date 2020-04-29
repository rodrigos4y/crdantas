<?

function expertises() {

	$labels = array(
		'name'                  => _x( 'Áreas de atuações', 'Post Type General Name', 'areas_expertises' ),
		'singular_name'         => _x( 'Áreas de atuação', 'Post Type Singular Name', 'areas_expertises' ),
		'menu_name'             => __( 'Áreas de atuação', 'areas_expertises' ),
		'name_admin_bar'        => __( 'Áreas de atuação', 'areas_expertises' ),
		'archives'              => __( 'Arquivar Áreas de atuação', 'areas_expertises' ),
		'attributes'            => __( 'Atributos das Áreas de atuação', 'areas_expertises' ),
		'parent_item_colon'     => __( 'Parent Item:', 'areas_expertises' ),
		'all_items'             => __( 'Todas as Áreas de atuação', 'areas_expertises' ),
		'add_new_item'          => __( 'Adicionar novo item', 'areas_expertises' ),
		'add_new'               => __( 'Adicionar nova Área de atuação', 'areas_expertises' ),
		'new_item'              => __( 'Novo item', 'areas_expertises' ),
		'edit_item'             => __( 'Editar Área de atuação', 'areas_expertises' ),
		'update_item'           => __( 'Atualizar Área de atuação', 'areas_expertises' ),
		'view_item'             => __( 'Visualizar Área de atuação', 'areas_expertises' ),
		'view_items'            => __( 'Visualizar Áreas de atuação', 'areas_expertises' ),
		'search_items'          => __( 'Buscar', 'areas_expertises' ),
		'not_found'             => __( 'Nenhum item encontrado', 'areas_expertises' ),
		'not_found_in_trash'    => __( 'Nenhum item na lixeira', 'areas_expertises' ),
		'featured_image'        => __( 'Imagem', 'areas_expertises' ),
		'set_featured_image'    => __( 'Escolher a imagem', 'areas_expertises' ),
		'remove_featured_image' => __( 'Remover a imagem', 'areas_expertises' ),
		'use_featured_image'    => __( 'Utilizar imagem', 'areas_expertises' ),
		'insert_into_item'      => __( 'Inserir a imagem', 'areas_expertises' ),
		'uploaded_to_this_item' => __( 'Upload', 'areas_expertises' ),
		'items_list'            => __( 'Lista de itens', 'areas_expertises' ),
		'items_list_navigation' => __( 'Navegar pela lista', 'areas_expertises' ),
		'filter_items_list'     => __( 'Filtrar', 'areas_expertises' ),
	);
	$args = array(
		'label'                 => __( 'Áreas de atuação', 'areas_expertises' ),
		'description'           => __( 'Controle sobre as áreas de atuações', 'areas_expertises' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'post' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-forms',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'expertise',
		'capability_type'       => 'post',
	);
	register_post_type( 'expertises', $args );

}
add_action( 'init', 'expertises', 0 );

function crdantas_get_meta_box( $meta_boxes ) {
	$prefix = 'crdantas-';

	$meta_boxes[] = array(
		'id' => 'expertises',
		'title' => esc_html__( 'Áreas de atuação', 'crdantas' ),
		'post_types' => array('expertises' ),
		'context' => 'after_title',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'expertise_icon',
				'type' => 'text',
				'name' => esc_html__( 'Ícone da área', 'crdantas' ),
				'desc' => esc_html__( 'Escolha o ícone da área acessando: https://www.flaticon.com/', 'crdantas' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'crdantas_get_meta_box' );