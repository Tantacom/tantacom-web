<?php   //page Inicio o Home ?>
<?php include drupal_get_path( 'theme', 'tantacom' ) . '/templates/cabecera.tpl.php' ?>

<section>
	<header>
    	<?php print $social ?>
	</header>
</section>  
<? 
 $titulo = explode("|",$head_title);
 print '<h1>'.$titulo[0].'</h1>'; 
?>  
<section class="colAB" id="main">
            <?php
            //llamada a vista de soluciones
            $xview = views_get_view('vistaPaginas' );
            echo $xview->execute_display( 'page_7' ) ;
			?>
            <article class="colA">
              <?  $viewName1 = 'Soluciones';
                  $display_id1 ='block_1';
                  print views_embed_view($viewName1,$display_id1);
             ?>
             
            </article>               	
            <article class="colB">
                <header>
                    <h2><a href="http://blog.tantacom.com">El Blog de tanta_</a></h2>
                </header>
                             <? 
                             $viewName2 = 'Blogs';
                             $display_id2 ='block_2';
                             print views_embed_view($viewName2,$display_id2);
                            ?>
                             <?php 
							   print $messages;
							   ?>
							 <?php
                            $block = module_invoke('aggregator', 'block', 'view', 'feed-1');
                            print $block['content'];
                            ?>
							   <div id="modSus">
							   <p>Si quieres estar al día suscríbete a nuestro Newsletter:</p>  
							   <?
								$bloque = module_invoke( 'campaignmonitor' , 'block' , 'view' , '0' ) ;
								print theme('block',(object)$bloque);
								?>
								</div>
                <header>
                    <h2><a href="https://twitter.com/tantacom">@tantacom_</a></h2>
                </header>
									<div id="modDrupalCamp">
  <a class="twitter-timeline"  href="https://twitter.com/tantacom"  data-widget-id="330224926931947520">Tweets by @tantacom</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

             					 </div>
                                 
      
			</article>

</section>
 <ul class="fixedLinks">
                <li class="email"><a href="mailto:tanta@tantacom.com">Escríbenos</a></li>
                <li class="tel"><a href="tel:+34914401040">Llámanos</a></li>
                <li class="contact last"><a href="http://www.tantacom.com/contacto">Ven a vernos</a></li>
            </ul>
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

