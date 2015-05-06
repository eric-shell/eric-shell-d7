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

    <?php if ($messages): ?>
      <div id="messages"><?php print $messages; ?></div>
    <?php endif; ?>

    <?php if ($tabs = render($tabs)): ?>
      <div class="tabs"><?php print $tabs; ?></div>
    <?php endif; ?>

    <section class="content">

	    <section class="sidebar">

        <div id="profile-photo">
          <img src="sites/all/themes/eshell/images/eric-shell.jpg">
        </div>

	      <ul>
			    <li><a class="social-link" id="resume" href="../../../sites/default/files/resume.pdf">Download Resume</a></li>

          <div id="social-bg">
  			    <li><a class="social-link" id="github" href="http://www.github.com/eric-shell"><span class="platform">Github</span></a></li>
  			    <li><a class="social-link" id="flickr" href="http://www.flickr.com/photos/ericshell"><span class="platform">Flickr</span></a></li>
  			    <li><a class="social-link" id="vimeo" href="http://www.vimeo.com/eshell"><span class="platform">Vimeo</span></a></li>
  			    <li><a class="social-link" id="instagram" href="http://www.instagram.com/ericshell"><span class="platform">Instagram</span></a></li>
          </div>
	      </ul>

	    </section>
	    <!-- sidebar end -->
    
      <?php print render($page['content']); ?> 

    </section>
    <!-- main content end -->

  </section>
  <!-- main container end -->

</section>
<!-- site end -->

<?php print render($page['bottom']); ?>
