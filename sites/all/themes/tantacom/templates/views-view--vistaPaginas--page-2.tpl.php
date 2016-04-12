<?php //Vista de Soluciones ?>

<?php if ( $admin_links ) : ?>
    <?php echo $admin_links ?>
<?php endif ?>

<section class="colAB portadilla soluciones">
<? //var_dump($view);?>


<section class="linked">
    <p>¿Tienes dudas? ¿Quieres saber más acerca de nuestras soluciones?     <a class="btn btn_lArrow btnType02" href="/contacto">Solicítanos información_</a></p>

</section>
<section class="linked">
    <p>¿Quieres saber más acerca de nuestros proyectos?</p>
    <a class="btn btn_lArrow btnType02" href="/clientes">conoce algunos casos de éxito_</a>
</section>



<? foreach ( ( $view->result ) as $i=>$cliente ) {?>
  <? $nodo = node_load( $cliente->nid ) ; ?>
	<? $class='';$resto = $i%2;
    if($nodo->sticky == 1){
		if($resto!=0){$class='class="special last"';}else{$class='class="special"';}
	}else{if ($resto!=0)$class='class="last"';}
	?> 
      <article <?=$class?>>
                	<h3><?=$nodo->title;?></h3>
                    <p><strong><?=$nodo->field_testimonio[0]['value']?></strong></p>
                    <p><?=$nodo->field_descripcion[0]['value'];?></p>
                    <? $array_enlaces = split( ';' , $nodo->field_textourl[ 0 ][ 'value' ] ) ;
                       $array_urls = split( ';' , $nodo->field_url[ 0 ][ 'value' ] ) ;
					   foreach ($array_enlaces as $i=>$link ){?>
						   <? if(($array_urls[$i] != '') &&($array_enlaces[$i] != '')) {?>
                           <? $pos = strpos($array_urls[$i], 'http://');?>
                             <span class="boton">
                               <a <? if($pos !== false){print 'target="_blank"';}?>href="<?=$array_urls[$i];?>" class="btn btn_lArrow"><?=$array_enlaces[$i];?></a> 
                             </span>  
                           <? }//si hay texto y url?>
					  <? }//foreach?>
      </article>
      
      
<? }?>

<section class="linked both">
    <p>¿Tienes dudas? ¿Quieres saber más acerca de nuestras soluciones?</p>
    <a class="btn btn_lArrow btnType02" href="/contacto">Solicítanos información_</a>
</section>

<section class="linked both">
    <p>¿Quieres conocer a nuestro equipo?</p>
    <a class="btn btn_lArrow btnType02" href="/quienes_somos/equipo">Ir a equipo_</a>
</section>
 