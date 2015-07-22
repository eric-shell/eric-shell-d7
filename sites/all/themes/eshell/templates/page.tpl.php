<section id="site">
  <?php include "header.tpl.php"; ?>

  <section id="main">

    <?php if ($messages): ?>
      <div id="messages"><?php print $messages; ?></div>
    <?php endif; ?>
    <?php if ($tabs = render($tabs)): ?>
      <div class="tabs"><?php print $tabs; ?></div>
    <?php endif; ?>

    <section class="content">
      <?php print render($page['content']); ?>
    </section>

  </section>
  <!-- main end -->
</section>
<!-- site end -->