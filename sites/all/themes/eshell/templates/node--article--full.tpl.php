<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($display_submitted || $unpublished || !$page && $title): ?>
    <div id="article-header">
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <div class="submitted"><?php print $submitted; ?></div>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php
    print render($content['field_video']);
    print render($content['body']);
  ?>
</article>

<div id="article-filters">
  <?php print render($content['group_filters']); ?>
</div>
