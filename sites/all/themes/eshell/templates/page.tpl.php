<section id="site">

  <div class="site-options">

    <?php if ($messages): ?>
      <div id="messages"><?php print $messages; ?></div>
    <?php endif; ?>

    <?php if ($tabs = render($tabs)): ?>
      <div class="tabs"><?php print $tabs; ?></div>
    <?php endif; ?>

  </div>

  <main id="main" role="content">

    <section class="content">
      <?php print render($page['content']); ?>
    </section>
    
  </main>

</section>
<!-- site end -->
