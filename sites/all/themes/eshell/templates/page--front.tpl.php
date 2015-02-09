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

    <div id="about"><!-- Start About-->
      <section class="content">
        <a href="/ell">
       		<div id="me">
           <img src="/sites/all/themes/eshell/images/eric-shell.jpg"> 
          </div>
       	</a>
        <div id="about-me"><p>My name is <a href="/ell">Eric Shell</a> and I am a <a href="/web">Front-End Web Developer</a>, <a href="/photo">Photographer</a>, <a href="/video">Cinematographer</a>, and <a href="/graphic">Graphic Designer</a>.</p></div>
      </section>
    </div> <!-- End About-->

  <div class="clear"></div><!-- clear -->   

  <!-- main container start -->
  <section id="main">

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
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
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
