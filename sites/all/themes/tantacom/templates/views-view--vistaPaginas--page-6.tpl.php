<?php
    //Vista de equipo
?>
<?php if ( $admin_links ) : ?>
    <?php echo $admin_links ?>
<?php endif ?>

  <?php if ( $rows ): ?>
      <ul class="list">
    <?php
    global $base_url, $base_path;
    $count = 5 ;
    foreach ( ( $view->result ) as $persona ) :
            $li = NULL ;
            $li = '<li' ;
            if ( $count % 5 == 0 ) : $li .= ' class="first"' ; endif ;
            $li .= '>' ;
            echo $li ;

			$nodo = node_load($persona->nid);
            $title= t('ver más detalles de ').$nodo->title;
			//$alt=$nodo->title;
			$alt=$nodo->field_alt[0]["value"];
			$attributes=array('class'=>'floatr');
			
			if ($nodo->field_foto[0]['filepath'] =="")
			{
				$path="sites/default/files/avatar.jpg";
			}
			else
			{
				$path=$nodo->field_foto[0]['filepath'];
			}
			
			
			if ($nodo->field_enlace[0]["value"] =="0")
			{
				print theme('imagecache', 'miembro', $path, $alt, $title,$attributes,0); 
				print '<h4>'.$nodo->title.'</h4>';
			}
			else
			{
				print '<a href="/'.$nodo->path.'">' . theme('imagecache', 'miembro', $path, $alt, $title,$attributes,0) . '</a>' ; 
				print '<h4><a href="/'.$nodo->path.'">'.$nodo->title.'</a></h4>';
			}
			print '<p>'.$nodo->field_cargo[0]['value'].'</p>';
            $count++ ;
            echo '</li>' ;
    endforeach?>
   </ul>

  <?php endif ?>

  <?php if ( $pager ) : ?>
    <?php echo $pager ?>
  <?php endif ?>


