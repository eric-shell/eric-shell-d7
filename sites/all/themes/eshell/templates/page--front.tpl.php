<section id="site">

  <div class="site-options">
    <?php if ($messages): ?>
      <div id="messages"><?php print $messages; ?></div>
    <?php endif; ?>
  </div>

  <header id="header" role="header">

    <div class="hide-for-xlarge-up">
      <?php include "navigation.tpl.php"; ?>
    </div>
    
    <div id="header-container">

      <div id="profile">
        <div id="headshot">
          <img src="sites/all/themes/eshell/assets/images/profile-alt.jpg">
        </div>
        <a href="<?php print $front_page; ?>" title="<?php print t('Eric Shell'); ?>" rel="home" id="logo"><img src="/sites/all/themes/eshell/assets/images/logo.svg" title="<?php print t('Eric Shell'); ?>" alt="<?php print t('Eric Shell'); ?>"></a>
      </div>

      <div id="intro">
        <div class="content">
          <?php print render($node->body['und']['0']['value']); ?>
        </div>
        <div id="learn-more">
          <a href="/contact">Learn more</a>
        </div>
      </div>
      
    </div>

  </header>

  <main id="main" role="content">
    <?php print render($page['photos']); ?>
    <?php print render($page['articles']); ?>
  </main>
  <!-- main end -->

</section>
<!-- site end -->