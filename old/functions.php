<!-- Mi serve per caricare i fogli di stile ecc . Uso gli hook di wordpress (wp_xxx) -->
<!-- è il file di configurazione del tema -->
<?php

    function ettoredimicco_setup()
    {
        // aggiungo al tema il supporto alle immagini in evidenza nei post
        add_theme_support( 'post-thumbnails');

        // qui inserisco anche la funzione che genera il menù
        // ovvero abilita l'opzione per la creazione del menù nel backoffice
        register_nav_menus( array('primary' => __('Primary Menu')) );
        // ho creato un array associativo con una sola entry __('Primary Menu') alla chiave 'primary'
        // __() è la funzione che ritorna il testo tradotto
    }
    add_action('after_setup_theme', 'ettoredimicco_setup'); 

    function ettoredimicco_files()
    {
        // carico i fogli di stile:
        // prima quello per i font
        //wp_enqueue_style('google_font', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');
        // poi quello che realizzo in style.css
        // wp_enqueue_style('ettoredimicco_style', get_stylesheet_uri(  ), NULL, microtime(null));
        wp_enqueue_style('bootstrap_style', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', NULL, microtime(null));
        //get_stylesheet_uri() restituisce l'uri del foglio style.css
        // microtime indica il tempo per caricare, se lo metto a null annullo l'uso della cache
        // lo faccio per i files che sto sviluppando e perciò variano rapidamente
        // posso caricare anche gli script js, i font e tutti gli altri materiali che useremo
    }
    add_action( 'wp_enqueue_scripts', 'ettoredimicco_files' );

    function set_excerpt_length()
    {
        return 80;
    }
    add_filter( 'excerpt_length', 'set_excerpt_length' );

    function init_widgets()
    {
        register_sidebar( array('name' => 'Sidebar1',
                                'id' => 'sidebar',
                                'before_widget' => '<div class="main-sidebar"',
                                'after_widget' => '</div>',
                                'before_title' => '<h4>',
                                'after_title' => '</h4>'));
    }
    add_action('widgets_init', 'init_widgets');


?>