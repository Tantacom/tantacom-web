<?php //page de Equipo ?>

            <section class="colAB quienesSomos">
                <header>
                    <?php echo $mandanos ?>
                </header>

                    <?php
                        //llamada a vista equipo
                        $xview = views_get_view( 'vistaPaginas' ) or die( 'No "status" view.' ) ;
                        echo $xview->execute_display( 'page_6' ) ;
                    ?>
            </section>
