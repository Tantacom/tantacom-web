<?php
    //Vista de Quienes somos
?>
<section class="colAB quienesSomos portadilla">

  <?php if ( $admin_links ) : ?>
      <?php echo $admin_links ?>
  <?php endif ?>

  <?php if ( $rows ) : ?>

    <?php
        global $base_url, $base_path ;
    $count = 2 ;
    $attributes = array ( 'attributes' => array ( 'class' => 'btn btn_lArrow' ) , 'html' => TRUE ) ;
    foreach ( ( $view->result ) as $opcion ) :
            $art = NULL ;
            $art = '<article' ;
            if ( $count % 2 != 0 ) : $art .= ' class="last"' ; endif ;
            $art .= '>' ;
            echo $art ;
            $nodo = node_load ( $opcion->nid ) ;

            echo ' <h3> ' . $nodo->title. '</h3> ' ; // Nombre
            echo '<p><strong> ' . strip_tags ( $nodo->field_testimonio[ 0 ][ 'value' ] ) . '</strong></p> ' ;
            echo '<p>' . $nodo->field_descripcion[ 0 ][ 'value' ] . '</p>' ; // Resumen



            if( $nodo->field_textourl[ 0 ][ 'value' ] ) :
                $contenidoE = $nodo->field_textourl[ 0 ][ 'value' ];
                switch( $nodo->title ) :
                    case 'Experiencia' :
                        $rutaE = 'clientes' ;
                    break ;
                    default :
                        $rutaE = $nodo->path ;
                endswitch ;
                echo l ( $contenidoE, $base_url . $base_path . $rutaE, $attributes ) ;
            endif ;

            echo '  </article>' ;
            $count++ ;
    endforeach ?>

  <?php elseif ( $empty ) : ?>
      <?php echo $empty ?>
  <?php endif ?>

  <?php if ( $pager ) : ?>
    <?php echo $pager ?>
  <?php endif ?>
<?php //print_r ( get_defined_vars ( ) ) ; ?>

