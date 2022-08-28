<?php

/**
 * Inclusion de archivos relacionados
 * con la estructura del Custom Post Type "Peliculas"
 */

include plugin_dir_path(__FILE__) . 'cf.peliculas.php';

/**
 * Creamos un nuevo tipo de post llamado "Peliculas"
 */

add_action( 'init', 'prueba_inicial_register_post_type_peliculas');
function prueba_inicial_register_post_type_peliculas() {

    $labels = array(
        'name' => __('Peliculas', 'plugin_inicial'),
        'singular_name' => __('Pelicula', 'plugin_inicial'),
        'menu_name' => __('Peliculas', 'plugin_inicial'),
        'name_admin_bar' => __('Pelicula', 'plugin_inicial'),
        'add_new' => __('Añadir nueva', 'plugin_inicial'),
        'add_new_item' => __('Añadir nueva pelicula', 'plugin_inicial'),
    );

    $argumentos = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'show_in_rest'       => true,
        'hierarchical'       => false,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'peliculas', $argumentos );    
}
