<?
    add_action('init', 'presentation_register');

    function presentation_register(){
        $descritivos = array(
            'name' => 'Apresentação',
            'singular_name' => 'Apresentação',
            'add_new' => 'Adicionar Nova Apresentação',
            'add_new_item' => 'Adicionar Apresentação',
            'edit_item' => 'Editar Apresentação',
            'new_item' => 'Nova Apresentação',
            'view_item' => 'Ver Apresentação',
            'search_items' => 'Procurar Apresentação',
            'not_found' => 'Nenhuma descrição Apresentação encontrada',
            'not_found_in_trash' => 'Nenhum Apresentação na Lixeira',
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
            'supports' => array('title', 'editor', 'thumbnail')
        );

        register_post_type('presentation', $args);
        flush_rewrite_rules();
    }

    

?>
