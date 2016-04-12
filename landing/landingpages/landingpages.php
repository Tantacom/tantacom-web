<? 
	if($_POST['envio'] == 'ok'){ 
		$destinatario = "tanta@tantacom.com";
		$asunto = utf8_decode("Formulario de SEO");
		$cuerpo = "Teléfono: " . $_POST['phone'] . "<br><br>";
		$cuerpo .= "Consulta: <br>" . $_POST['consulta'];
		
		$asunto= mb_encode_mimeheader($asunto,"UTF-8", "B", "\n");
	
		//para el envío en formato HTML
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	
		//dirección del remitente
		$nombre = utf8_decode($_POST['name']);
		$nombre = mb_encode_mimeheader($nombre,"UTF-8", "B", "\n");
		$headers .= "From: ".$nombre." <".$_POST['mail'].">\r\n";
		
		
		//direcciones que recibián copia
		//$headers .= "Cc: \r\n";
	
		$result = mail($destinatario,$asunto,$cuerpo,$headers);
		//die("bbbbb");
		header("Location: ../seo/confirmacion-envio.html");
		//die("aaaaa");
	} else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tanta - Optimización de landingpages</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<!--[if lte IE 6]>
		<link rel="stylesheet" type="text/css" href="css/fixIE6.css" />
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/fixIE7.css" />
	<![endif]-->
	
   <script type="text/javascript" src="js/common.js"></script>
   <script type="text/javascript" src="js/iepngfix_tilebg.js"></script>

</head>

<body>
	<div id="wrapper">
    	<a id="logo" href="http://www.tantacom.com"><img src="images/logo_tanta.png" alt="Logo Tanta Comunicación" /></a>
        <span id="claim">Ofreciendo soluciones…</span>
        <div id="header">
        	<div>
            	<h1>Optimización de <strong>landingpages</strong></h1>
                <h2>Optimiza tus páginas de destino y aumenta el % de conversiones en internet. <strong>Rentabiliza tu inversión.</strong></h2>
            </div>
        </div>
        
        <div id="content">
        	<div id="formulario">
            	<div id="capa1">
                	<div id="capa2">
                        <h2><span class="destacado">¿</span>Qué <span class="destacado">necesitas?</span></h2>
                        <form id="envia" action="" method="post">
                        	<input type="hidden" name="envio" value="ok" />
                            <ul>
                                <li>
                                    <label for="name">Nombre</label>
                                    <input id="name" type="text" name="name" />
                                </li>
                                <li>
                                    <label for="mail">Email</label>
                                    <input id="mail" type="text" name="mail" />
                                </li>
                                <li>
                                    <label for="phone">Teléfono</label>
                                    <input id="phone" type="text" name="phone" />
                                </li>
                                <li class="special">
                                    <label for="coments">Consulta</label>
                                    <textarea id="coments" name="consulta" cols="5" rows="5"></textarea>
                                </li>
                            </ul>
                            <input id="btn" type="image" src="images/solicitar_info.png" alt="Solicitar información" />
                        </form>
                        
                    </div>  
                </div>
            </div>
        	<div id="problem">
            	<h2>Los usuarios llegan, miran y se van. ¿Por qué?</h2>
                <p><strong>Menos es más en Internet.</strong> Tenemos <strong>ocho segundos</strong> para convencer a nuestros usuarios de que somos su mejor opción. </p>
                <p>Ese es nuestro trabajo, ofrecerles lo justo y necesario para que no se vayan y nos elijan.</p>
            </div>
            <div id="solutions">
            	<div id="type01">
                	<h2>¿Qué consigues?</h2>
                	<ul>
                    	<li><strong>Aumentar</strong> tus % de conversión</li>
                        <li><strong>Vender</strong> más</li>
                        <li><strong>Reducir costes</strong></li>
                        <li><strong>Superar</strong> a tu competencia</li>
                    </ul>
                </div>
                <div id="type02">
                	<h2>¿Cómo lo hacemos?</h2>
                	<ul>
                    	<li>Llamando la <strong>atención</strong></li>
                        <li>Creando <strong>interés</strong></li>
                        <li>Haciendo <strong>que te deseen</strong></li>
                        <li>Haciendo <strong>que te interactúen</strong></li>
                    </ul>
                </div>
                <div id="type03">
                	<h2>Y ahora pregúntate</h2>
                	<ul>
                    	<li><a href="../analiticaweb/analiticaweb.php">¿Conoces a tus usuarios?</a></li>
                        <li><a href="../seo/posicionamiento-seo.php">¿Llegan visitas de calidad a tu sitio?</a></li>
                        <li>¿Te es rentable?</li>
                        <li><strong>No te engañes</strong></li>
                    </ul>
                </div>
                
            
            </div>
        </div>
        <div id="footer">
        	<a href="http://www.tantacom.com"><img src="images/logo_tanta.png" alt="" /></a>
            <div>
            	<span class="copy">Tanta Comunicación <abbr title="Sociedad Limitada">S.L</abbr> - <abbr title="Teléfono">Tfn</abbr>: 91 440 10 40 una compañía del grupo <a href="http://www.grupoonetec.com"><img width="73" height="11" src="images/logo_onetec.gif" alt="Onetec"/></a></span>
			<span class="legal"><a href="http://www.tantacom.com/aviso-legal">Aviso Legal</a></span>
            </div>
        </div>
    </div>

</body>
</html>
<? } ?>