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

      <!-- content start -->
	    <section class="sidebar">

        <div id="profile-photo">
          <img src="sites/all/themes/eshell/images/eric-shell.jpg">
        </div>

	      <ul>
			    <li><a class="social-link" id="resume" href="../../../sites/default/files/resume.pdf">Download Resume</a></li>
			    <li><a class="social-link" id="github" href="http://www.github.com/eric-shell"><span class="platform">Github</span></a></li>
			    <li><a class="social-link" id="flickr" href="http://www.flickr.com/photos/ericshell"><span class="platform">Flickr</span></a></li>
			    <li><a class="social-link" id="vimeo" href="http://www.vimeo.com/eshell"><span class="platform">Vimeo</span></a></li>
			    <li><a class="social-link" id="instagram" href="http://www.instagram.com/ericshell"><span class="platform">Instagram</span></a></li>
	      </ul>

	    </section>
	    <!-- sidebar end -->
    
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
