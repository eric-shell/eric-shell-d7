<section id="site">

  <section class="site-options">

    <?php if ($messages): ?>
      <div id="messages"><?php print $messages; ?></div>
    <?php endif; ?>

  </section>

  <main id="main" role="content">

    <section class="content">
      <?php print render($page['content']); ?>
    </section>
    
  </main>

</section>
<!-- site end -->
