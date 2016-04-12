<?php if (!empty($title)): ?>
<header>
  <h2><a href="#"><?php print $title; ?></a></h2>
</header>  
<?php endif; ?>
<dl>
<?php foreach ($rows as $id => $row): ?>
    <?php print $row; ?>
<?php endforeach; ?>
</dl> 
