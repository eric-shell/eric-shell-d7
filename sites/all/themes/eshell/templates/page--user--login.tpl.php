<section id="site">

  <div class="site-options">
    <?php if ($messages): ?>
      <div id="messages"><?php print $messages; ?></div>
    <?php endif; ?>
  </div>

  <?php print render($page['content']); ?>

</section>
<!-- site end -->