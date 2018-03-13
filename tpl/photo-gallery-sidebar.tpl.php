<?php 

/**
 * @file
 * Default theme implementation to format photo-gallery page
 *
 * Available variables:
 * - $content: Feed content
 * - $page_link: Link to 'photo-gallery'
 * 
 */
 ?>
<div id="photo-feed-list-sidebar" class="photo-feed">
  <?php print $content ?>
  <?php if ($page_link != ''): ?>
  <div class="read-more"><?php print $page_link ?></div>
  <?php endif; ?>
</div>