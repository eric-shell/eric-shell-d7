<article class="article-teaser node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="article-container">

    <div class="article-image">
      <?php print render($content['field_image']); ?>
      <?php print render($content['links']); ?>
    </div>

    <div class="article-content">
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>

      <?php print render($content['body']); ?>

      <div class="node-filters">
        <?php print render($content['field_tags']); ?>
      </div>
    </div>

  </div>
</article>
<!-- article teaser end -->
