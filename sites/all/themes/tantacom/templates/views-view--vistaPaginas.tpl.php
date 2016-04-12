<?php
    //vista estandar de vistaPaginas
?>

  <?php if ( $admin_links ) : ?>
      <?php echo $admin_links ?>
  <?php endif ?>

  <?php if ( $exposed ) : ?>
      <?php echo $exposed ?>
  <?php endif ?>

  <?php if ( $rows ) : ?>
    <?php
    global $base_url, $base_path ;
    foreach ( ( $view->result ) as $hijo  ) :
        $nodo = node_load( $hijo->nid ) ;
        echo l ( '<img src="' . $base_url . $base_path . $nodo->field_foto[ 0 ][ filepath ] . '">', $base_url . $base_path . $nodo->path ) ;

        echo ' <p>' . $nodo->field_descripcion[ 0 ][ value ] . '</p> ' ;
    endforeach ?>

<!--  <?php elseif ( $empty ) : ?>
    <div class="view-empty">
      <?php echo $empty ?>
    </div>-->
  <?php endif ?>

  <?php if ( $pager ) : ?>
    <?php echo $pager ?>
  <?php endif ?>

