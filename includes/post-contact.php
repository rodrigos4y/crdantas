<?
    add_action('init', 'contato_register');

    function contato_register(){
        $descritivos = array(
            'name' => 'Contatos',
            'singular_name' => 'Contato',
            'add_new' => 'Adicionar Novo Contato',
            'add_new_item' => 'Adicionar Contato',
            'edit_item' => 'Editar Contato',
            'new_item' => 'Novo Contato',
            'view_item' => 'Ver Contato',
            'search_items' => 'Procurar Contato',
            'not_found' => 'Nenhum Contato encontrada',
            'not_found_in_trash' => 'Nenhum Contato na Lixeira',
            'parent_item_colon' => ''
        );

        $args = array(
            'labels' => $descritivos,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-email-alt',
            'supports' => array('title', 'thumbnail')
        );

        register_post_type('contatos', $args);
        flush_rewrite_rules();
    }

    function crdantas_get_contact_meta_box( $meta_boxes ) {
        $prefix = 'crdantas-';
    
        $meta_boxes[] = array(
            'id' => 'contact',
            'title' => esc_html__( 'Contato', 'crdantas' ),
            'post_types' => array('contatos' ),
            'context' => 'after_title',
            'priority' => 'default',
            'autosave' => 'false',
            'fields' => array(
                array(
                    'id' => $prefix . 'contact_phone',
                    'type' => 'text',
                    'name' => esc_html__( 'Telefone', 'crdantas' ),
                    'desc' => esc_html__( 'Coloque o telefone de contato', 'crdantas' ),
                ),
                array(
                    'id' => $prefix . 'contact_email',
                    'type' => 'text',
                    'name' => esc_html__( 'E-mail', 'crdantas' ),
                    'desc' => esc_html__( 'Coloque o e-mail de contato', 'crdantas' ),
                )
            ),
        );
    
        return $meta_boxes;
    }
    add_filter( 'rwmb_meta_boxes', 'crdantas_get_contact_meta_box' );

?>