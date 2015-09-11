<article class="article-full node-<?php print $node->nid; ?> <?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="node-video" class="full">
    <div class="container">
      <?php print render($content['field_video']); ?>
    </div>
  </div>

  <div id="node-header" class="full">
    <div class="container inner">
      <h1<?php print $title_attributes; ?>>
        <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
      </h1>
      <div class="submitted">
        <?php print $submitted; ?>
      </div>
    </div>
  </div>

  <div id="node-content" class="full">
    <div class="container">
      <?php print render($content['body']); ?>
    </div>
  </div>

  <div id="node-filters" class="full">
    <div class="container center">
      <?php print render($content['field_media_type']); ?>
      <?php print render($content['field_tags']); ?>
    </div>
  </div>
</article>

<?php print render($content["flippy_pager"]); ?>