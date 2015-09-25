<article class="article-teaser node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php if($zebra == 'odd'): ?>
      <div class="article-image article-section">
        <?php print render($content['field_image']); ?>
        <?php print render($content['links']); ?>
      </div>

      <div class="article-content article-section">
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php print render($content['body']); ?>
        <?php print render($content['field_tags']); ?>
      </div>
    <?php endif; ?>

    <?php if($zebra == 'even'): ?>
      <div class="article-content article-section">
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php print render($content['body']); ?>
        <?php print render($content['field_tags']); ?>
      </div>

      <div class="article-image article-section">
        <?php print render($content['field_image']); ?>
        <?php print render($content['links']); ?>
      </div>
    <?php endif; ?>

</article>
