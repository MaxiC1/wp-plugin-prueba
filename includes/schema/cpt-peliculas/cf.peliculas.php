<?php

/**
 * Creacion de Meta Box para las peliculas
 */

add_action( 'add_meta_boxes', 'prueba_inicial_add_meta_box_peliculas' );

function prueba_inicial_add_meta_box_peliculas() {
    add_meta_box( 'meta-box-informacion-adicional', __( 'Información Adicional', 'plugin_inicial' ), 'prueba_inicial_meta_box_informacion_adicional_callback', 'peliculas','side');
}

/**
 * Agregamos Custom Fields para introducir informacion adicional sobre las peliculas
 */

function prueba_inicial_meta_box_informacion_adicional_callback() {

    global $post;

    $_peliculas_valoracion = get_post_meta( $post->ID, '_peliculas_valoracion', true );

    ?>
        <label for="_peliculas_valoracion"><strong>Valoración</strong></label>
        <br>
        <input name="_peliculas_valoracion" type="number" min="0" max="5" value="<?php echo $_peliculas_valoracion; ?>">
        <br>
        <small>Especifica la valoración de la pelicula</small>
    <?php
}

/**
 * Guardamos la informacion especificada anteriormente en el Meta Box
 */

function prueba_inicial_save_post_peliculas( $post_id, $post, $update ) {

    if ( isset( $_POST[ '_peliculas_valoracion' ] ) ) {
        update_post_meta( $post_id, '_peliculas_valoracion', $_POST[ '_peliculas_valoracion' ] );
    }    
}
add_action( 'save_post', 'prueba_inicial_save_post_peliculas', 10, 3 );