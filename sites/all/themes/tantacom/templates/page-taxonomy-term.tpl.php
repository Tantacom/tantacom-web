<?php if ($node->nid==138 || $node->nid==139 || $node->nid==140) { ?>
<?php  include drupal_get_path( 'theme', 'tantacom' ) . '/templates/alta.tpl.php' ?>
<?php }else{ ?>
	<?php  include drupal_get_path( 'theme', 'tantacom' ) . '/templates/cabecera.tpl.php' ?>
	 <section id="main">
	   <header>
		<?php print $social ?>
		<?php if ( $tabs ) : ?> <?php echo $tabs ?> <?php endif ?>
	
		<hgroup>
			<h1>Proyectos <?php echo $title ?>_</h1>
            <h2></h2>
            
		</hgroup> 
	  </header>
      <section class="linked">
    <p>¿Tienes dudas? ¿Quieres saber más acerca de nuestras soluciones?</p>
    <a href="/contacto" class="btn btn_lArrow btnType02">Solicítanos información_</a>
</section>
		 <section class="colAB listClientes">
        		
					<?php echo $content ?>
          </section>
		<?php //echo $content_bottom ?>
	</section>
    <section class="linked">
  
    <a class="btn btn_lArrow btnType02" href="/clientes">ver más casos de éxito_</a>
</section>

	</div>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-203003-14']);
	  _gaq.push(['_setDomainName', '.tantacom.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0013/9487.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
<!-- Begin comScore Tag -->
<script>
  var _comscore = _comscore || [];
  _comscore.push({ c1: "2", c2: "17208856" });
  (function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
    el.parentNode.insertBefore(s, el);
  })();
</script>
<noscript>
  <img src="http://b.scorecardresearch.com/p?c1=2&c2=17208856&cv=2.0&cj=1" />
</noscript>
<!-- End comScore Tag -->
<!-- Start Cookie Assisstant (http://cookieassistant.com) -->
<script src="http://app.cookieassistant.com/widget.js?token=6UocvdR_v9DWKlEJxx_cJA" type="text/javascript"></script>
<div id="cookie_assistant_container"></div>
<!-- End Cookie Assistant -->
	</body>
	</html>
<?php } ?>
