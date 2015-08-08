<section id="site">
  <?php include "navigation.tpl.php"; ?>

  <?php if ($messages): ?>
    <div id="messages"><?php print $messages; ?></div>
  <?php endif; ?>

  <?php print render($page['content']); ?>

</section>
<!-- site end -->