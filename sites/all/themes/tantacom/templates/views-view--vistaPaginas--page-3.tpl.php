<?php     //Vista de Clientes Actuales ?>
<?php if ( $rows ) : ?>
    <?php if ( $admin_links ) : ?> <?php echo $admin_links ?> <?php endif ?>
	<?php /*
    <section class="slider jcarousel-skin-tango">
        <ul>
        <?php
        global $base_url, $base_path ;
        foreach ( ( $view->result ) as $cliente  ) :
                $nodo = node_load( $cliente->nid ) ;
                if ( $nodo->field_actual[ 0 ][ 'value' ] ) : ?>
                <li>
                    <?php 
					$attributesimg=array();
					$path= $nodo->field_foto[0]['filepath'];
					$alt=$nodo->field_alt[0]["value"];
					$title="";
					print theme('imagecache', 'carrusel', $path, $alt, $title, $attributesimg); 
                    ?>
                </li>
        <?php  endif ; endforeach ?>
        </ul>
    </section>
	*/?>
<?php endif ?>
