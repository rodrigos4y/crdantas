<?
    add_action('wp_enqueue_scripts', 'rdfreitas_add_script_header');
    add_action('wp_footer', 'rdfreitas_add_script_footer');

    add_action('init', 'rdfreitas_action_init');

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

    function rdfreitas_action_init(){
        register_nav_menu('crdantas_principal', 'Menu Principal (cabeçalho)');
        register_nav_menu('crdantas_rodape', 'Menu Rodapé');
    }

    function add_menuclass($ulclass) {
        return preg_replace('/<a /', '<a class="nav_item nav-link"', $ulclass);
     }
    add_filter('wp_nav_menu','add_menuclass');


    require_once(get_template_directory().'/includes/post-presentation.php');
    require_once(get_template_directory().'/includes/expertises.php');

?>