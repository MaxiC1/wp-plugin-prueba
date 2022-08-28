<?php
/**
 * Mostramos el tipo de post de la entrada que se ve en su single
 * delante de su titulo
 */

add_filter( 'the_title', 'prueba_inicial_the_title', 10, 2 );
 
function prueba_inicial_the_title($title, $id) {

   if(is_single()){

       if( get_post_type($id) == 'peliculas') {

            $_peliculas_valoracion = get_post_meta( $id, '_peliculas_valoracion', true );

            if ( $_peliculas_valoracion ) {
                $title = '( ' . $_peliculas_valoracion . ' ' . __( 'Estrellas', 'plugin_inicial' ) . ' )'. $title;
            }

       } 

   }

   return $title;
}