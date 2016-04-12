<?php  //page quienes somos ?>

        <?php
            //llamada a la vista de quienes somos
            $xview = views_get_view(  'vistaPaginas' ) or die( 'No "status" view.' ) ;
            echo $xview->execute_display(  'page_1' ) ;
        ?>
   </section>
