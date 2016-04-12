<?php //contenido del nodo estándar ?>
<div id="node-<?php echo $node->nid ?>" class="node<?php if ( $sticky ) { echo ' sticky' ; } ?><?php if ( !$status ) { echo ' node-unpublished' ; } ?>">

<?php echo $picture ?>

<?php if ( $page == 0 ) : ?>
<?php $attributes = array ( 'attributes' => array ( 'title' => $title ) , 'html' => TRUE ) ; ?>

  <h2><?php echo l ( $title, $node_url, $attributes ) ; ?></h2>
<?php endif ?>

  <?php if ( $submitted ) : ?>
    <span class="submitted"><?php echo $submitted ?></span>
  <?php endif ?>

  <div class="content clear-block">
    <?php echo $content ?>
  </div>

  <div class="clear-block">
    <div class="meta">
    <?php if ( $taxonomy ) : ?>
      <div class="terms"><?php echo $terms ?></div>
    <?php endif ;?>
    </div>

    <?php if ( $links ) : ?>
      <div class="links"><?php echo $links ?></div>
    <?php endif ?>
  </div>

</div>
