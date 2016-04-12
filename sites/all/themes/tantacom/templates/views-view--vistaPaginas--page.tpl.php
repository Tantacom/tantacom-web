<?php
    //page estandar de vistaPaginas
?>
<?php if ( $admin_links ) : ?>
    <?php echo $admin_links ?>
<?php endif ?>
          <div>
            <?php echo $content ?>
          </div>
          <?php echo $feed_icons ?>
          <div id="footer"><?php echo $footer_message . $footer ?></div>
      </div></div></div></div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->
</div>
      <?php if ($right): ?>
        <div id="sidebar-right" class="sidebar">
          <?php if ( !$left && $search_box ) : ?><div class="block block-theme"><?php echo $search_box ?></div><?php endif ?>
          <?php echo $right ?>
        </div>
      <?php endif ?>
</div>
    </div> <!-- /container -->
  </div>
<!-- /layout -->

  <?php echo $closure ?>
  </body>
</html>
