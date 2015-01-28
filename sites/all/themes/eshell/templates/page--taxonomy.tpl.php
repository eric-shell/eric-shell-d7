<?php print render($page['top']); ?>

<section id="site">

  <!-- header start -->
  <section id="header">

    <!-- wrapper start -->
    <section class="wrapper">

      <!-- content start -->
      <section class="content">

        <!-- logo start -->
        <div id="logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><?php print t('Eric Shell'); ?></a>
        </div>
        <!-- logo end -->

        <?php print render($page['header']); ?>

      </section>
      <!-- content end -->

    </section>
    <!-- wrapper end -->

  </section>
  <!-- header end -->

  <div class="clear"></div><!-- clear -->

  <!-- main container start -->
  <section id="main">

    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php if ($messages): ?>
      <div id="messages"><?php print $messages; ?></div>
    <?php endif; ?>

    <!-- content start -->
    <section class="content">

      <?php if ($tabs = render($tabs)): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>

      <div class="clear"></div><!-- clear -->

      <?php print render($title_prefix); ?>
      <?php print render($page['content']); ?>
      <?php print render($title_suffix); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      <?php print render($page['feed']); ?>   

    </section>
    <!-- content end -->

  </section>
  <!-- main container end -->

</section>
<!-- Site Content Ends -->

<?php print render($page['bottom']); ?>
