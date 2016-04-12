<!DOCTYPE HTML>
<html lang="es-ES" <? if ($node->nid == 28){print 'class="error404"';}?>>
<head>
    <meta charset="UTF-8">
	<?php 
	if ($_GET['q']=="blog") 
	{
		echo("<title>" . $head_title . "</title>"."\r");
		echo('<meta name="description" content="Publicamos artículos en profundidad sobre temas de actualidad Internet y entornos móviles: Usabilidad, creatividad, desarrollo frontend y accesibilidad web, desarrollo backend y cms, promoción on y offpage, tendencias... Consúltalos." />');
	} elseif($is_front){
	  $titulo = explode("|",$head_title);
	  echo("<title>" . $titulo[0] . "</title>"."\r");
	  echo('<meta name="description" content="'.$mission.'" />');
	?>
	<? } else {
			if (strpos($_GET['q'], "taxonomy") === FALSE) {?>
			<title><?php echo ($head_title); ?></title>
				
			<?php }else{?>
					<title><?php echo ('Proyectos '.$head_title); ?></title>
			<? } ?>
	<? } ?>
	<meta name="google-site-verification" content="xTCxX19YjdDm59dnuT3xLykCyJFnmzXu6g1aeOmYDLE" />
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-precomposed.png"/>
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72.png"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<meta property="og:image" content="http://www.tantacom.com/sites/default/files/tantacom_logo.png" />
	<?php echo $head ?>
	<link rel="image_src" type="image/jpeg" href="http://www.tantacom.com/sites/default/files/tantacom_logo.png" />
	<?php echo $scripts ?>
    <?php echo $styles ?>
    <?php echo $ie ?>
	
</head>
<body<?php if($is_front){echo ' id="home"';} ?>>

	<div id="wrapper">
        <aside>
            
                <header>
                <?php echo l ('<img src="'.$logo .'" alt="Tanta, agencia interactiva" />', "",array('html' => TRUE )) ?>
                </header>
            <nav>    
                <ul id="nav">
                    <?php echo $m_principal ?>
                </ul>
            </nav>
            <footer>
			    <ul>
<? print $left; ?>
                    </ul>
            </footer>
        </aside>
    