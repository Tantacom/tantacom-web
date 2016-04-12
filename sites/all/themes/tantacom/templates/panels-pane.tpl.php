<?php if ( $admin_links ) : ?>
    <?php echo $admin_links ?>
<?php endif ?>

<?php if ( $display->owner->category == 'home' ) : ?>

        <?php if ( $display->owner->name == 'nuestra_newsletter' ) : ?>
                <?php echo $title ?>
                <?php echo $content ?>

        <?php else : ?>
        <dl>
            <dt><?php echo $title ?></dt>
            <dd><?php echo $content ?></dd>
        </dl>
        <?php endif ?>




<?php else : ?>
    <?php echo $title ?>
    <?php echo $content ?>
<?php endif ?>



<?php //if ($feeds ) :  echo $feeds ; endif ?>
<?php //if ( $links ) : echo $links ; endif ?>
<?php //if ( $more ) : echo $more ; endif ?>
