<?php //page de Contáctanos  o contacto ?>


<section class="contacto">
    <p>Los campos marcados con asterisco (*) son obligatorios.</p>
    <section class="colAB">
        <div class="colA">
            <?php   $bloque = module_invoke( 'panels_mini' , 'block' , 'view' , 'form_contacto' ) ;
                    echo theme ( 'block' , ( object ) $bloque ) ;
            ?>
        </div>
       <div class="colB">
            <?php   $bloque = module_invoke( 'panels_mini' , 'block' , 'view' , 'trabajar' ) ;
                    echo theme ( 'block' , ( object ) $bloque ) ;
            ?>

           <?php $bloque = module_invoke( 'monitorcampanyas' , 'block' , 'view' , '0' ) ;
            echo theme ( 'block' , ( object ) $bloque ) ?>
        </div>
        <div class="map">
            <h5>Estamos en Calle de <?php echo $node->location[ street ]  . ' ' . $node->location[ additional ] . ' ' . $node->location[ country_name ]  ?>.</h5>
         <?php //el mapa está configurado en el content_bottom ?>   
            
