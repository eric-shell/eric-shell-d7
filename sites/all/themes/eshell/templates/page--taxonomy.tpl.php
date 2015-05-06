<?php print render($page['top']); ?>

<section id="site">

  <section id="header">

    <section class="wrapper">

      <section class="content">

        <div id="logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><?php print t('Eric Shell'); ?></a>
        </div>
        <!-- logo end -->

        <?php print render($page['header']); ?>

      </section>
      <!-- header content end -->

    </section>
    <!-- header wrapper end -->

  </section>
  <!-- header end -->

  <section id="main">

    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>

    <?php if ($messages): ?>
      <div id="messages"><?php print $messages; ?></div>
    <?php endif; ?>

    <?php if ($tabs = render($tabs)): ?>
      <div class="tabs"><?php print $tabs; ?></div>
    <?php endif; ?>

    <section class="content">

      <?php print render($page['content']); ?> 

    </section>
    <!-- main content end -->

  </section>
  <!-- main container end -->

</section>
<!-- site end -->

<?php print render($page['bottom']); ?>
