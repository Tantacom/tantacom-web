<?php //page de Contáctanos  o contacto ?>
<section class="contacto" id="main">
    <p>Los campos marcados con asterisco (*) son obligatorios.</p>
    <section class="colAB">
        <div class="colA">
  <?php  if( isset($_GET['mailtest']) ){
    /* */ @include_once('./pruebamail.php'); /**/
    var_dump( drupal_mail_send(array(
'to' => 'gonzalo.padrino@onetec.es,sistemas@grupoonetec.com',
'id' => 'asdf_asdf_gertvw',
'subject' => 'Test de correo desde drupal',
'body' => "una linea\ndos lineas\n'.date('c').'\n",
'headers' => array('From:'=>'info@tantacom.com')
    )) );
  } ?>
		<?php echo $messages ?>
    
    <?php if (!empty($_SESSION['messages']['status'][0])) : ?>
			<div class="messages status" style="width:466px;">
        <!-- Hemos recibido tu solicitud de información, en breve contactaremos contigo.<br/>Si deseas hacernos otra pregunta rellena el formulario de nuevo o llámanos al 91 440 10 40. Muchas gracias.-->
        <?php foreach ($_SESSION['messages']['status'] as $message) : ?>
          <?php print $message; ?>
        <?php endforeach; ?>
        <script>
        /*jQuery(document).ready(function($) {
          _gaq.push(['_trackPageview', '/contacto/ok']);
        });*/
        var _gaqExist = setInterval(function() {
            if (typeof _gaq !== 'undefined') {
              _gaq.push(['_trackPageview', '/contacto/ok']);
              clearInterval(_gaqExist);
            }
        }, 100);
        </script>
      </div>
		<?php endif; ?>
    
		<?php if(!empty($_SESSION['messages']['error'][0]) && count($_SESSION['messages']['error'])>0){?>
			<div class="msgError" tabindex="-1">
				<span>El alta no ha podido realizarse por estos motivos:</span>
					<ul>
					<?php foreach( $_SESSION['messages']['error'] as $error){
						print '<li>'.$error.'</li>';
					}?>
				</ul>
			</div>
	<?php } ?>
    
		<?php print $node->content['webform']['#value']; ?>
    
		</div>
       <div class="colB">
            <h4>Quiero trabajar en Tanta</h4>
            <p>Si quieres unirte a nuestro equipo, y crees que tienes sitio entre nosotros envía tu curriculum a: <a href="mailto:talento@tantacom.com">talento@tantacom.com</a></p>
          <?php 
          $block = module_invoke('block', 'block', 'view', 14);
		  print theme('block',(object)$block);
		  
		  ?>
		  <?php  /*
			 
			 $bloque = module_invoke( 'campaignmonitor' , 'block' , 'view' , '0' ) ;
			 print theme('block',(object)$bloque);
			 */
			?>

        </div>

        <div class="map">
            <h5>Estamos en Calle de <?php echo $node->location[ street ]  . ' ' . $node->location[ additional ] . ' ' . $node->location[ country_name ]  ?>.</h5>
			<?php //el mapa está configurado en el content_bottom ?>   
				
					<? print $content_bottom; ?>
				
