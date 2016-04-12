<?php $panel = node_load ( $node->nid ) ; ?>
<article class="colB">
  <?php if ( $admin_links ) : ?>
      <?php echo $admin_links ?>
  <?php endif ?>
    <header>
     <? $url=node_load($panel->field_panel_url_alternativa[0]);?>
        <h2><a href="<?=$url->path;?>"><?php echo $panel->title ?></a></h2>
        <?php if ( strip_tags ( $panel->body ) !=  '0' ) echo '<h3>' . strip_tags ( $panel->body ) .'</h3>' ?>
    </header>
    <?php echo $content ?>
</article>
