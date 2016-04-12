<article>
            <?php
                $nodo = node_load($node->nid);
            	$attributesimg = array('class' => 'floatl');
                $path=$nodo->field_foto[0]['filepath'];
				$title= t('ver más detalles de ').$nodo->title;
				$alt=$nodo->title;
				print '<a href="/'.$nodo->path.'">'.theme('imagecache', 'cliente_listado', $path, $alt, $title, $attributesimg,$getsize = FALSE).'</a>'; 
               ?> 
                <h4><a title="<?=$nodo->title?>" href="/<?=$nodo->path?>"><?php echo $nodo->title ?></a></h4>
                <p><?=$nodo->field_cliente_entradilla[0]['value'];?></p>
                <p class="link">
                <? print '<a class="btn btn_lArrow" href="/'.$nodo->path.'">ir a ' . $nodo->title .'</a>'; ?>
                
                </p>
            </article>