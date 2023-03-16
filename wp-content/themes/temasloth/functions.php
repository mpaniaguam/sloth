<?php
    function estilos(){
        wp_enqueue_style('estilos-padre', get_template_directory_uri()."/style.css");
    }
    add_action('wp_enqueue_scripts', 'estilos');

    function festivales(){
        $labels = array(
            'name' => _x('Festivales', 'temasloth'),
            'singular_name' => _x('Festival', 'temasloth'),
            'menu_name' => _x('Festivales', 'temasloth'),
            'name_admin_bar' => _x('Festivales', 'temasloth'),
            'add_new' => _x('Añadir Festival', 'temasloth'),
            'add_new_item' => _x('Añadir nuevo festival', 'temasloth'),
            'new_item' => _x('Nueva festival', 'temasloth'),
            'edit_item' => _x('Editar festival', 'temasloth'),
            'ver_item' => _x('Ver festival', 'temasloth'),
            'all_item' => _x('Todas los festivales', 'temasloth'),
            'search_item' => _x('Buscar festivales', 'temasloth'),
            'parent_item_colon' => _x('Festival padre', 'temasloth'),
            'not_found' => _x('No se han encontrado festivales', 'temasloth'),
            'not_found_in_trash' => _x('No se han encontrado festivales en la papelera', 'temasloth')
        );

        $args = array(
            'labels' => $labels,
            'descripcion' =>__('Posts de tipo festivales','temasloth'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'rewrite' => array('slug' => 'festivales'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => true,
            'menu_postion' => 6,
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
            'taxonomies' => array('post_tag', 'category')
        );
        
        register_post_type('festivales', $args);
    }
    add_action('init', 'festivales');

     
    function eventos(){
        $labels = array(
            'name' => _x('Eventos', 'temasloth'),
            'singular_name' => _x('Evento', 'temasloth'),
            'menu_name' => _x('Eventos', 'temasloth'),
            'name_admin_bar' => _x('Eventos', 'temasloth'),
            'add_new' => _x('Añadir evento', 'temasloth'),
            'add_new_item' => _x('Añadir nuevo evento', 'temasloth'),
            'new_item' => _x('Nueva evento', 'temasloth'),
            'edit_item' => _x('Editar evento', 'temasloth'),
            'ver_item' => _x('Ver evento', 'temasloth'),
            'all_item' => _x('Todas los eventos', 'temasloth'),
            'search_item' => _x('Buscar eventos', 'temasloth'),
            'parent_item_colon' => _x('Evento padre', 'temasloth'),
            'not_found' => _x('No se han encontrado eventos', 'temasloth'),
            'not_found_in_trash' => _x('No se han encontrado eventos en la papelera', 'temasloth')
        );

        $args = array(
            'labels' => $labels,
            'descripcion' =>__('Posts de tipo eventos','temasloth'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'rewrite' => array('slug' => 'eventos'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => true,
            'menu_postion' => 6,
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
            'taxonomies' => array('post_tag', 'category')
        );
        
        register_post_type('eventos', $args);
    }
    add_action('init', 'eventos');

    function artistas(){
        $labels = array(
            'name' => _x('Artistas', 'temasloth'),
            'singular_name' => _x('Artista', 'temasloth'),
            'menu_name' => _x('Artistas', 'temasloth'),
            'name_admin_bar' => _x('Artistas', 'temasloth'),
            'add_new' => _x('Añadir artista', 'temasloth'),
            'add_new_item' => _x('Añadir nuevo artista', 'temasloth'),
            'new_item' => _x('Nueva artista', 'temasloth'),
            'edit_item' => _x('Editar artista', 'temasloth'),
            'ver_item' => _x('Ver artista', 'temasloth'),
            'all_item' => _x('Todas los artista', 'temasloth'),
            'search_item' => _x('Buscar artista', 'temasloth'),
            'parent_item_colon' => _x('Artista padre', 'temasloth'),
            'not_found' => _x('No se han encontrado artistas', 'temasloth'),
            'not_found_in_trash' => _x('No se han encontrado artistas en la papelera', 'temasloth')
        );

        $args = array(
            'labels' => $labels,
            'descripcion' =>__('Posts de tipo artistas','temasloth'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'rewrite' => array('slug' => 'artistas'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => true,
            'menu_postion' => 6,
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
            'taxonomies' => array('post_tag', 'category')
        );
        
        register_post_type('artistas', $args);
    }
    add_action('init', 'artistas');
 
    function anadirCustom_producto(){
        if (function_exists('get_field')){
            echo "<p><strong> Informacion extra: </strong>". get_field('informacion_extra')."</p>";
        }

    }
    add_action( 'woocommerce_single_product_summary', 'anadirCustom_producto', 15);

?>
