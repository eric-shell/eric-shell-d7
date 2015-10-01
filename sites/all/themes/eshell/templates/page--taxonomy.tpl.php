<section id="site">

  <section class="site-options">

    <?php if ($messages): ?>
      <div id="messages"><?php print $messages; ?></div>
    <?php endif; ?>

    <?php if ($tabs = render($tabs)): ?>
      <div class="tabs"><?php print $tabs; ?></div>
    <?php endif; ?>
    
  </section>

  <main id="main" role="content">

    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>

    <section class="content">
      <?php print render($page['content']); ?>
    </section>

  </main>

</section>
<!-- site end -->
