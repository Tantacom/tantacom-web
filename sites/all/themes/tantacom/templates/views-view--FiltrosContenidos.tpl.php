<?php //Vista creada para filtrar los contenidos subidos por types?>
  <?php if ( $admin_links ) : ?>
      <?php echo $admin_links ?>
  <?php endif ?>

  <?php if ( $exposed ) : ?>
      <?php echo $exposed ?>
  <?php endif ?>

  <?php if ( $rows ) : ?>
        <?php

        $tabla      = NULL ;
        $output     = NULL ;
        $editar     = NULL ;
        $enlace     = NULL ;
        $header     = NULL ;
        $rows       = NULL ;

        global $base_url, $base_path ;

        $header = array (
            array ( 'data' => 'Título'),
            array ( 'data' => 'Tipo' ),
            array ( 'data' => 'Autor' ),
            array ( 'data' => 'Estado' ),
            array ( 'data' => 'Idioma' ),
            array ( 'data' => 'Operaciones' ),
        ) ;


        $attributes = array ( 'html' => TRUE, 'query' => 'destination=admin/content/node' ) ;

        foreach ( ( $view->result ) as $hijo  ) :
            $nodo = node_load ( $hijo->nid ) ;

            $enlace = l ( $nodo->title, $base_url . $base_path . $nodo->path ) ;
            $editar = l ( 'editar', $base_url . $base_path . 'node' . $base_path . $nodo->nid . $base_path . 'edit', $attributes ) ;

            switch ( $nodo->status ) :
            case ( 1 ) :
                $estado =   'publicado' ;
            break;
            case ( 0 ) :
                $estado =   'no publicado' ;
            break;
            endswitch;
            $rows[] = array ( 'data' =>
                                array ( $enlace ,
                                array ( 'data' => $nodo->type ),
                                array ( 'data' => $nodo->name ),
                                array ( 'data' => $estado ),
                                array ( 'data' => $nodo->language ),
                                array ( 'data' => $editar ) )
                            ) ;

        endforeach ;
        $tabla .= theme ( 'table', $header, $rows ) ;
            echo $tabla ; ?>

  <?php elseif ( $empty ) : ?>
    <h3> No hay datos </h3>
  <?php endif ?>

  <?php if ( $pager ) : ?>
    <?php echo $pager ?>
  <?php endif ?>

