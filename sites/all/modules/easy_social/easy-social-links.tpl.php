<?php
/**
 * @file
 * This is the file description for Easy Social module.
 * 
 * Variables available:
 * - $social_links: Assoc array with my share buttons html markup.
 *
 */
?>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <div id='easysocial-box'>
  <?php if(isset($social_links['twitter'])): ?>
  <span class='easysocial-widget-twitter'><?php echo $social_links['twitter']; ?></span>  
  <?php endif; ?>
  <?php if(isset($social_links['facebook'])): ?>
  <span class='easysocial-widget-facebook'><?php echo $social_links['facebook']; ?></span>  
  <?php endif; ?>
  <?php if(isset($social_links['googleplus'])): ?>
  <span class='easysocial-widget-googleplus'><?php echo $social_links['googleplus']; ?></span>  
  <?php endif; ?>
  <?php if(isset($social_links['linkedin'])): ?>
  <span class='easysocial-widget-linkedin'><?php echo $social_links['linkedin']; ?></span>  
  <?php endif; ?>

<div class="fb-like" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-action="recommend"></div>
</div>