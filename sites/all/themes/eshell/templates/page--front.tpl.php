<section id="site">

  <div class="site-options">
    <?php if ($messages): ?>
      <div id="messages"><?php print $messages; ?></div>
    <?php endif; ?>
  </div>

  <header id="header" role="header">
    <div id="header-container">

      <div id="header-image">
        <img id="headshot" src="sites/all/themes/eshell/assets/images/profile-alt.jpg">
        <a href="<?php print $front_page; ?>" title="<?php print t('Eric Shell'); ?>" rel="home" id="logo"><img src="/sites/all/themes/eshell/assets/images/logo.svg" title="<?php print t('Eric Shell'); ?>" alt="<?php print t('Eric Shell'); ?>"></a>
      </div>

      <div id="header-content">
        <?php print render($node->body['und']['0']['value']); ?>
        <a href="/contact" class="button">Learn more</a>
      </div>
      
    </div>
  </header>

  <main id="main" role="content">
    <section id="content-slider">
    <div class="slide">
      <?php print render($page['listing']); ?>
    </div>
    <div class="slide">
      <?php print render($page['photos']); ?>
      <?php print render($page['articles']); ?>
    </div>
  </main>

</section>
<!-- site end -->