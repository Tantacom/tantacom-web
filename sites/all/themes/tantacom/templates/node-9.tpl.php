<?php //Page asociaciones  ?>

            <?php
                //llamada a vista asociaciones
                $xview = views_get_view( 'vistaPaginas' ) or die( 'No "status" view.' );
                echo $xview->execute_display( 'page_5' )
            ?>
