<article class="photo-teaser node-<?php print $node->nid; ?> <?php print $classes; ?>"<?php print $attributes; ?>>
  
  <div class="photo-image">
    <?php print render($content['field_image']); ?>
  </div>

  <?php if (!$page && $title): ?>
    <a class="photo-title" href="<?php print $node_url; ?>">View <?php print $title; ?></a>
  <?php endif; ?>
  
</article>
