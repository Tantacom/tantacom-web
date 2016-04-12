<?php //para cada entrada de tipo de content 'equipo'?>
            <section class="colAB quienesSomos">
                <header>
                    <h3><?php echo $node->title ?></h3>
                    <h4><?php echo $node->field_cargo[ 0 ][ value ] ?></h4>
                    <?php echo $node->field_testimonio[ 0 ][ value ] ?>
                </header>
                <article class="wysiwyg">
                    <?php global $base_url, $base_path; ?>
                    <img src="<?php echo $base_url . $base_path . $node->field_foto[ 0 ][ filepath ] ?> " alt="" class="floatl" />
                    <div>
                        <p><strong><?php echo $node->field_descripcion[ 0 ][ value ] ?></strong></p>
                        <?php echo $node->field_experiencia[ 0 ][ value ] ?>
<? if(($node->field_linkedin[0][value] != '') || ($node->field_twitter[0][value] != '')||($node->field_facebook[0][value] != '')){?>
                        <h5>Sígueme: </h5>
                        <dl class="follow">
<? }?>                        
                        <? if($node->field_linkedin[ 0 ][ value ] != ''){?>
                            <?php $url= 'http://es.linkedin.com/'.$node->field_linkedin[ 0 ][ value ];?>                       
                            <dt>Linkedin:</dt>
                                <dd><a href="<?=$url;?>" target="_blank" title="Ver su perfil de Linkedin"><?=$node->title?></a></dd>
						<? }?>
                        <? if($node->field_twitter[ 0 ][ value ] != ''){?>
                            <?php $url= 'http://twitter.com/#!/'.$node->field_twitter[ 0 ][ value ];?>                       
                            <dt>Twitter:</dt>
                                <dd><a href="<?=$url;?>" target="_blank" title="Ver su perfil de Twitter"><?=$node->field_twitter[ 0 ][ value ];?></a></dd>
						<? }?>
                        <? if($node->field_facebook[ 0 ][ value ] != ''){?>
                            <?php $url= 'http://www.facebook.com/'.$node->field_facebook[ 0 ][ value ];?>                       
                            <dt>Facebook:</dt>
                                <dd><a href="<?=$url;?>" target="_blank" title="Ver su perfil de Facebook"><?=$node->title?></a></dd>
						<? }?>
<? if(($node->field_linkedin[0][value] != '') || ($node->field_twitter[0][value] != '')||($node->field_facebook[0][value] != '')){?>
                        </dl>
<? } ?>                        
                    </div>
                </article>
            </section>    
