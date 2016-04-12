    <?php echo $edit_links ?>
    
    <?php if ( ! $block->module == 'gmap_location' ) { ?>
			<?php echo $block->content ?>
	<?php } else { ?>
		<div id="maps">
			<?php echo $block->content ?>
		</div>
	<?php } ?>
