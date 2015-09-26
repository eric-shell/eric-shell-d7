<article class="article-full node-<?php print $node->nid; ?> <?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="node-video">
    <?php print render($content['field_video']); ?>
  </div>

  <div id="node-header">
    <h1<?php print $title_attributes; ?>>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h1>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  </div>

  <div id="node-content">
    <?php print render($content['body']); ?>
  </div>

  <div id="node-filters">
    <div class="container">
      <?php print render($content['field_media_type']); ?>
      <?php print render($content['field_tags']); ?>
    </div>
  </div>
</article>

<?php print render($content["flippy_pager"]); ?>