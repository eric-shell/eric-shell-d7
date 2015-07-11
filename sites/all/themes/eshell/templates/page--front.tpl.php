<section id="site">
  <section id="header">
    <section class="wrapper">
      <section class="content">

        <div id="logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><?php print t('Eric Shell'); ?></a>
        </div>

      </section>
      <!-- header content end -->
    </section>
    <!-- header wrapper end -->
  </section>
  <!-- header end -->

  <div id="about">

    <section class="content">
      <a class="exempt" href="/ell">
     		<div id="me">
         <img src="/sites/all/themes/eshell/assets/images/eric-shell.jpg"> 
        </div>
     	</a>
      <div id="about-me"><p>My name is <a href="/ell">Eric Shell</a> and I am a <a href="/web">Front-End Web Developer</a>, <a href="/photo">Photographer</a>, <a href="/video">Cinematographer</a>, and <a href="/graphic">Graphic Designer</a>.</p></div>
    </section>

  </div>
  <!-- about end -->

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
