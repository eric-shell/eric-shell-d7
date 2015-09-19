<article class="photo-full node-<?php print $node->nid; ?> <?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="node-photo-container">
    <?php print render($content['field_image']); ?>
  </div>

  <div id="node-header" class="full">
    <div class="container-sm">
      <h1<?php print $title_attributes; ?>>
        <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
      </h1>
      <div class="submitted">
        <?php print $submitted; ?>
      </div>
    </div>
  </div>

  <div id="node-content">
    <div class="container-sm">
      <?php print render($content['body']); ?>
    </div>
  </div>

  <div id="node-filters">
    <div class="container-sm center">
      <?php print render($content['field_media_type']); ?>
      <?php print render($content['field_tags']); ?>
    </div>
  </div>
</article>

<?php print render($content["flippy_pager"]); ?>