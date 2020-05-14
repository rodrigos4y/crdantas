<?
    add_action('init', 'services_register');

    function services_register(){
        $descritivos = array(
            'name' => 'Serviços',
            'singular_name' => 'Serviço',
            'add_new' => 'Adicionar Novo Serviço',
            'add_new_item' => 'Adicionar Serviço',
            'edit_item' => 'Editar Serviço',
            'new_item' => 'Novo Serviço',
            'view_item' => 'Ver Serviço',
            'search_items' => 'Procurar Serviço',
            'not_found' => 'Nenhuma descrição de Serviço encontrado',
            'not_found_in_trash' => 'Nenhum Serviço na Lixeira',
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
            'menu_icon' => 'dashicons-building',
            'supports' => array('title', 'editor', 'thumbnail')
        );

        register_post_type('services', $args);
        flush_rewrite_rules();
    }

    

?>
