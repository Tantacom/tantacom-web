<?php
    //Vista de Clientes, este bloque se agrega como content boton, en la configuración de bloques se indica que sea el inferior
    //viene desde page-clientes.tpl.php, este pinta donde aparece
?>

<section class="linked">
    <p>¿Tienes dudas? ¿Quieres saber más acerca de nuestras soluciones? <a href="/contacto" class="btn btn_lArrow btnType02">Solicítanos información_</a></p>

</section>

<?php if ( $rows ) : ?>
    <section class="colAB listClientes">
        <h3><?php echo strip_tags ( $header ) ?></h3>
        <?php if ( $admin_links ) : ?>
            <?php echo $admin_links ?>
        <?php endif ?>
        <?php foreach ( ( $view->result ) as $cliente ) : ?>
            <article>
            <?php
                $nodo = node_load($cliente->nid);
            	$attributesimg = array('class' => 'floatl');
                $path=$nodo->field_foto[0]['filepath'];
				$title= t('ver más detalles de ').$nodo->title;
				$alt=$nodo->title;
				print '<a href="/'.$nodo->path.'">'.theme('imagecache', 'cliente_listado', $path, $alt, $title, $attributesimg,$getsize = FALSE).'</a>'; 
               ?> 
                <h4><a title="<?=$nodo->title?>" href="/<?=$nodo->path?>"><?php echo $nodo->title ?></a></h4>
                <p><?=$nodo->field_cliente_entradilla[0]['value'];?></p>
                <p class="link">
                <? print '<a class="btn btn_lArrow" href="/'.$nodo->path.'">ir a ' . $nodo->title .'_</a>'; ?>
                
                </p>
            </article>
        <?php endforeach ?>
    </section>
<?php endif ?>

<?php if ( $pager ) : ?>
    <?php echo $pager ?>
<?php endif ?>
<section>