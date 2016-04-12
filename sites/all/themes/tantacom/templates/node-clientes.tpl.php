<?php //para cada entrada de tipo de content 'clientes'?>
<? $ruta=drupal_get_path( 'theme', 'tantacom' );?>
<section class="linked">
  
    <a class="btn btn_lArrow btnType02" href="/clientes">ver más casos de éxito_</a>
</section>


<section class="clientes">
    <h3><?php echo $node->title ?> - <?php echo $node->field_subtitulo[ 0 ][ 'value' ] ?></h3>
    <section class="colAB">
        <div class="colA">
        	<?php global $base_url, $base_path, $base_root, $theme_path; ?>
             <? if ($node->field_url[0]['value'] !=''){?>
	            <a href="<?=$node->field_url[0]['value'];?>" target="_blank">
			<? }?>     
    		 <?  
            $path=$node->field_foto[0]['filepath'];
			$title= t('ver más detalles de ').$node->title;
			$alt=$node->title;
			$attributes=array('class' => 'floatl');

           print theme('imagecache', 'cliente_listado', $path, $alt, $title, $attributes);  ?>
			
			<? if ($node->field_url[0]['value'] !=''){?>
            	</a>
			<? }?>     
            <?=$node->field_comempresa[0]['value'];?>
            <p class="link">
	            <?php echo l($node->field_url[0]['value'], $node->field_url[0]['value'],array("attributes"=>array("rel" => "nofollow")));?>
            </p>
        </div>
        <?php 
            $persona = node_load($node->field_fotoequipo[0]['nid']);
        ?>
        <div class="colB">
		<?	$nodo = node_load($persona->nid);
            $path=$nodo->field_foto[0]['filepath'];
			$title= t('ver más detalles de ').$nodo->title;
			$alt=$nodo->title;
			$attributes=array('class' => 'floatr');
			print '<a href="/'.$nodo->path.'">'.theme('imagecache', 'miembro', $path, $alt, $title, $attributes).'</a>'; 

			?>

<!--			<h4>Testimonio</h4>
-->            <p>&quot;<?php echo strip_tags ( $node->field_testimonio[ 0 ][ 'value' ] ) ?>&quot;</p>
        </div>
    </section>
    <article>



<?php if($node->field_fotoproyecto['0']['view'] !=''){
		$output = '<div id="gallery-user" class="gallery">';
?>
		
		
		 <?php foreach($node->field_fotoproyecto as $k=>$proyecto ) { 
		 
		 $atributos=array( 
		 		'data-big'=>file_create_url($proyecto['filepath'])); 
		 $img=theme('imagecache', 'archivo_grafico', $proyecto['filepath'], $node->title, '', $atributos); 
		 $output .= l($img, file_create_url($proyecto['filepath']), array('html' => true));
		 
		
			}//foreach
		$output .= '</div>';
		print $output;
				
		?>
		
		<!--fin nuevo carrusel-->
		
 
		<?php } ?>
     
     
     
     
     
     
     
     
     
     
     
     
     
        
 <div class="detalleC">
<!--        <h4>Descripción</h4>
-->        <p><?php echo strip_tags ( $node->field_superior[0]['value'] ) ?></p>
        <?php print $node->content['body']['#value'];?>
        <p><?php print $node->field_descripcion[0]['value'];?></p>
</div>
<? 
$cuantos_tax=count($node->taxonomy);
$i=0;
?>
<?php 
print '<p>';
foreach($node->taxonomy as $k=>$tax ) : ?>
		<?php 
			$i++;
			 if ($i!=$cuantos_tax && $i!=1){ print ', ';  }
			 $path_alias = drupal_get_path_alias(taxonomy_term_path($tax) );
			print '<a href="/'.$path_alias.'">'.$tax->name.'</a>'; 
			
		?>

    <?php endforeach ?>
    <? print '</p>'; ?>


<?
	//print ($node->easy_social);
		
?>

<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<a class="addthis_button_tweet" data-title="dsfgdsfgdfgdsf"></a>
<a class="addthis_button_linkedin_counter"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e2ed64a31852452"></script>
<!-- AddThis Button END -->

</article>
</section>
<section class="linked">
    <?php //echo $solicita2 ?>
	<p>¿Tienes dudas? ¿Quieres saber más acerca de nuestras soluciones? <a class="btn btn_lArrow btnType02" href="/contacto">Solicítanos información_</a></p>
    
</section>


