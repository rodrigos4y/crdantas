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
            'supports' => array('title', 'thumbnail')
        );

        register_post_type('contatos', $args);
        flush_rewrite_rules();
    }

    add_action("admin_init", "admin_init_contato");

    function admin_init_contato(){
        add_meta_box("contato-meta", "Contato", "contato", "contatos", "normal", "low");
    }
    function contato(){
        global $post;
        
        $endereco = get_post_meta($post->ID, 'endereco', true);
        $telefone = get_post_meta($post->ID, 'telefone', true);
        $email = get_post_meta($post->ID, 'email', true);
?>
        <p>
            <label>Endereço: </label>
            <input name="endereco" type="text" value="<? echo $endereco; ?>">
        </p>
        <p>
            <label>Telefone: </label>
            <input name="telefone" type="text" value="<? echo $telefone; ?>">
        </p>
        <p>
            <label>E-mail: </label>
            <input name="email" type="text" value="<? echo $email; ?>">
        </p>
<?
    }

    //Salvar os valores no post
    

    function save_details_contato(){
        global $post;

        $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';
        $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        if($post && $post->post_type && $post->post_type == 'contatos') {
            update_post_meta($post->ID, "endereco", $endereco);
            update_post_meta($post->ID, "telefone", $telefone);
            update_post_meta($post->ID, "email", $email);
        }
    }

    add_action('save_post', 'save_details_contato');

?>