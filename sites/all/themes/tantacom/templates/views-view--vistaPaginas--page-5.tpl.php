<?php
    //Vista Asociaciones
?>
<section class="colAB partners portadilla">
<?php if ( $admin_links ) : ?>
    <?php echo $admin_links ?>
<?php endif ?>
    <?php
        global $base_url, $base_path ;
        $count = 2 ;
        foreach ( ( $view->result ) as $hijo  ) :
                    $art = NULL ;
            $art = '<article' ;
            if ( $count % 2 != 0 ) : $art .= ' class="last"' ; endif ;
            $art .= '>' ;
            echo $art ;
            $nodo = node_load( $hijo->nid ) ;
        ?>
          <? if ($nodo->field_foto[ 0 ][ filepath ] !=''){?>
          <? if ($nodo->field_asociacion_url[ 0 ][ value ] !=''){?>
            <a href="<?=$nodo->field_asociacion_url[ 0 ][ value ];?>" target="_blank">
		  <? }?>            
            	 <img src="<?php echo $base_url . $base_path . $nodo->field_foto[ 0 ][ filepath ] ?>" alt="" class="floatr" />
          <? if ($nodo->field_asociacion_url[ 0 ][ value ] !=''){?>
            </a>     
           <? }?> 
          <? }?>  
             <h3><?php echo $nodo->title ?></h3>
             <p><strong><a href="<?=$nodo->field_asociacion_url[ 0 ][ value ];?>" target="_blank">Más información</a> </strong></p>
             <p><strong><?php echo strip_tags ( $nodo->field_testimonio[ 0 ][ value ] ) ?> </strong></p>
             <p><?php echo $nodo->field_descripcion[ 0 ][ value ] ?></p>
             </article>

    <?php $count++ ;
            endforeach ?>
</section>
