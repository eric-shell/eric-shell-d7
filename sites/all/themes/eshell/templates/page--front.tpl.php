<section id="site">

  <?php if ($messages): ?>
    <div id="messages"><?php print $messages; ?></div>
  <?php endif; ?>

  <header id="header" role="header">
    <div id="header-container">

      <div id="header-left">
        <div id="profile">
          <img src="sites/all/themes/eshell/assets/images/profile-alt.jpg">
        </div>
        <a href="<?php print $front_page; ?>" title="<?php print t('Eric Shell'); ?>" rel="home" id="logo"><img src="/sites/all/themes/eshell/assets/images/logo.svg" title="<?php print t('Eric Shell'); ?>" alt="<?php print t('Eric Shell'); ?>"></a>
      </div>

      <div id="header-right">
        <div id="intro">
          <?php print render($node->body['und']['0']['value']); ?>
        </div>
      </div>
      
    </div>
  </header>

  <main id="main" role="content">
    <?php print render($page['content']); ?>
  </main>
  <!-- main end -->

</section>
<!-- site end -->
