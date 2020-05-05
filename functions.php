<?
    add_action('wp_enqueue_scripts', 'rdfreitas_add_script_header');
    add_action('wp_footer', 'rdfreitas_add_script_footer');

    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo' );

    function crdantas_custom_logo_setup() {
        $defaults = array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        );
        add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'crdantas_custom_logo_setup' );

    function rdfreitas_add_script_header(){

        wp_enqueue_style('rdfreitas_iconic-bootstrap', get_stylesheet_directory_uri().'/css/open-iconic-bootstrap.min.css');
        wp_enqueue_style('rdfreitas_animate', get_stylesheet_directory_uri().'/css/animate.css');
        wp_enqueue_style('rdfreitas_owl-carousel', get_stylesheet_directory_uri().'/css/owl.carousel.min.css');
        wp_enqueue_style('rdfreitas_owl-theme', get_stylesheet_directory_uri().'/css/owl.theme.default.min.css');
        wp_enqueue_style('rdfreitas_magnific-popup', get_stylesheet_directory_uri().'/css/magnific-popup.css');
        wp_enqueue_style('rdfreitas_aos', get_stylesheet_directory_uri().'/css/aos.css');
        wp_enqueue_style('rdfreitas_ionicons', get_stylesheet_directory_uri().'/css/ionicons.min.css');
        wp_enqueue_style('rdfreitas_datepicker', get_stylesheet_directory_uri().'/css/bootstrap-datepicker.css');
        wp_enqueue_style('rdfreitas_timepicker', get_stylesheet_directory_uri().'/css/jquery.timepicker.css');
        wp_enqueue_style('rdfreitas_flaticon', get_stylesheet_directory_uri().'/css/flaticon.css');
        wp_enqueue_style('rdfreitas_icomoon', get_stylesheet_directory_uri().'/css/icomoon.css');
        wp_enqueue_style('rdfreitas_style', get_stylesheet_directory_uri().'/css/style.css');
    
    }

    function rdfreitas_add_script_footer(){
        wp_enqueue_script('rdfreitas_jquery-js', get_stylesheet_directory_uri() . '/js/jquery.min.js');
        wp_enqueue_script('rdfreitas_jquery-migrate-js', get_stylesheet_directory_uri() . '/js/jquery-migrate-3.0.1.min.js');
        wp_enqueue_script('rdfreitas_popper-js', get_stylesheet_directory_uri() . '/js/popper.min.js');
        wp_enqueue_script('rdfreitas_bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
        wp_enqueue_script('rdfreitas_easing-js', get_stylesheet_directory_uri() . '/js/jquery.easing.1.3.js');
        wp_enqueue_script('rdfreitas_jquery-waypoints-js', get_stylesheet_directory_uri() . '/js/jquery.waypoints.min.js');
        wp_enqueue_script('rdfreitas_jquery-stellar-js', get_stylesheet_directory_uri() . '/js/jquery.stellar.min.js');
        wp_enqueue_script('rdfreitas_owl-carousel-js', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js');
        wp_enqueue_script('rdfreitas_magnific-popup-js', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js');
        wp_enqueue_script('rdfreitas_aos-js', get_stylesheet_directory_uri() . '/js/aos.js');
        wp_enqueue_script('rdfreitas_jquery-animateNumber-js', get_stylesheet_directory_uri() . '/js/jquery.animateNumber.min.js');
        wp_enqueue_script('rdfreitas_datepicker-js', get_stylesheet_directory_uri() . '/js/bootstrap-datepicker.js');
        wp_enqueue_script('rdfreitas_scrollax-js', get_stylesheet_directory_uri() . '/js/scrollax.min.js');
        wp_enqueue_script('rdfreitas_main-js', get_stylesheet_directory_uri() . '/js/main.js');
    }

    function crdantas_widgets_init() {
        register_sidebar( array(
            'name' => __( 'Listagem das Áreas de Experiência ', 'crdantas' ),
            'id' => 'expertise-footer',
            'before_widget' => '<div class="ftco-footer-widget mb-4 ml-md-5">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="ftco-heading-2">',
            'after_title' => '</h2>',
        ) );
        register_sidebar( array(
            'name' => __( 'Redes Sociais ', 'crdantas' ),
            'id' => 'social-footer',
            'before_widget' => '<div class="ftco-footer-widget mb-4">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="ftco-heading-2" style="color: #eac15a;">',
            'after_title' => '</h2>',
        ) );
        register_sidebar( array(
            'name' => __( 'Botão de contato ', 'crdantas' ),
            'id' => 'contact-button',
            'before_widget' => '<p><a href="https://rdfreitas.com.br/crdantas/contatos/" class="btn btn-primary py-3 px-4">',
            'after_widget' => '</a></p>',
            'before_title' => '<p style="display:none;">',
            'after_title' => '</p>',
        ) );
    }
    add_action( 'widgets_init', 'crdantas_widgets_init' );

    function add_menuclass($ulclass) {
        return preg_replace('/<a /', '<a class="nav_item nav-link"', $ulclass);
     }
    add_filter('wp_nav_menu','add_menuclass');


    require_once(get_template_directory().'/includes/post-presentation.php');
    require_once(get_template_directory().'/includes/post-services.php');
    require_once(get_template_directory().'/includes/post-contact.php');
    require_once(get_template_directory().'/includes/expertises.php');

?>