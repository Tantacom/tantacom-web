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
<title>Tanta - Posicionamiento web</title>
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
        <span id="claim">Un cliente, un caso distinto.</span>
        <div id="header">
        	<div>
            	<h1>Posicionamiento<strong> Web</strong></h1>
                <h2>Sal el primero. Consigue más visitas, más clientes,<br />
                 más ventas y más rentabilidad para tu negocio.</h2>
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
                          <input id="btn" type="image" src="images/solicitar_info3.png" alt="Solicitar información" />
                        </form>
                    </div>  
                </div>
            </div>
        	<div id="problem">
            	<h2>El 90% de las visitas acceden a través de Google.</h2>
                <p><b>Tu competencia se está llevando miles de visitas</b> que podrían ser tuyas. Vende más y obtiene más beneficios, haciéndose más competitiva fuerte. <br /><b>¿Lo vas a permitir?</b></p>
                <p>Invertir en posicionamiento web es <b>imprescindible</b> si quieres estar en Internet. Si no, tus visitantes sólo accederan a tu página web si conocen tu negocio.<br /><b>¿Estás dispuesto a seguir perdiendo clientes? </b>           </p>
        	</div>
            <div id="solutions">
            	<div id="type01">
                	<h2>Asegúrate...</h2>
                	<ul>
                    	<li><strong>Más visitas</strong> interesadas.</li>
                        <li><strong>Superar</strong> a tus competidores.</li>
                        <li>Vender <strong>más, mucho más.</strong></li>
                        <li><strong>Rentabilizar</strong> tu inversión.</li>
                        <li>E <b>Informes fáciles</b> de interpretar</li>
                    </ul>
                </div>
                <div id="type02">
                	<h2>Cada cliente es único</h2>
                	<ul>
                    	<li><b>Estudiamos</b> tus objetivos</li>
                        <li><b>Analizamos</b> tu sitio web</li>
                        <li>Seleccionamos tus visitas</li>
                        <li>Les ofrecemos lo que buscan</li>
                        <li><b>Y  las convetimos</b> en ventas</li>
                    </ul>
                </div>
                <div id="type03">
                	<h2>Date prisa porque...</h2>
                	<ul>
                    	<li><b>Estás perdiendo clientes.</b></li>
                    	<li>Y  los está ganando tu competencia</li>
                        <li>Que <b>le cuesta  menos</b> vender.</li>
                        <li>Ajustando más sus precios</li>
                        <li><strong>Y siendo más competitiva</strong></li>
                    </ul>
                </div>
                
            
            </div>
        </div>
      <div id="footer">
   	  <a href="http://www.tantacom.com"><img src="images/logo_tanta.png" alt="" /></a>
            
            <div id="asociaciones">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.sempo.org/directories/search_form/detail_company?ik=773cb6fbbe1b9417909fdb80ca8c1f4ae877782c"><img src="images/fot-logo_sempo.png" /></a>&nbsp;&nbsp;<a href="http://www.fecemd.org/detalle_contenido.html?ver_id=299"><img src="images/fot-logo_agemdi.png" /></a>&nbsp;&nbsp;
          </div>
        <div>
  <span class="copy">Tanta Comunicación <abbr title="Sociedad Limitada">S.L</abbr> - <abbr title="Teléfono">Tfn</abbr>: 91 440 10 40 una compañía del grupo <a href="http://www.grupoonetec.com"><img width="66" height="10" src="images/logo_onetec.gif" alt="Onetec"/></a></span>
			<span class="legal"><a href="http://www.tantacom.com/aviso-legal"> Aviso Legal</a></span>
            </div>
        </div>
</div>

</body>
</html>
<? } ?>