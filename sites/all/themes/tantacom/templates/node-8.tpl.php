<?php //page de Partnes ?>

            <?php
                //llamada a la vista de partners
                $xview = views_get_view( 'vistaPaginas' ) or die( 'No "status" view.' );
                echo $xview->execute_display( 'page_4' )
            ?>
<?php // include drupal_get_path( 'theme', 'tantacom' ) . '/templates/pie.tpl.php' ?>
