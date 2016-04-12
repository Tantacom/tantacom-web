<div class="clearFix">
	
	<!--div class="messages status">Tu solicitud de cambio de email de alta en el newsletter de Tanta se ha realizado con éxito. Muchas gracias</div-->
	
	
	<article class="blogs">
		<article class="post newsletter">
			<header>
				<p>Estoy registrado en el newsletter de Tanta y quiero modificar mis datos.</p>
			</header>
			<?php echo render_formularios('mod'); ?>
			</article>
	
		<article class="post newsletter02">
		<header>
			<p>Estoy registrado en el newsletter de Tanta y quiero cancelar la suscripción.</p>
		</header>
			<?php echo render_formularios('baja'); ?>
		</article>
</article>
	<div class="lateral">
		<?php
			//print newsletter_view();
			$viewName = 'tweets';
			$display_id = 'block';
			$myArgs = array(1);
			$derecha= views_embed_view($viewName, $display_id, $myArgs);
			
			echo $derecha;
			
			
		?>
	</div>
</div>