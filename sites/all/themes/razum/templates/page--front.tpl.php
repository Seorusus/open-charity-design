<?php
/**
 * @file
 * Needs to be documented.
 */

?>
<div class="body-inner">
    <header class="header body-inner__header">
      <div class="container">
        <?php if ($logo): ?>
<!-- Region Logo -->
        <div class="logo">
            <a href="<?php echo url('<front>'); ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
        </div>
        <?php endif; ?>
      </div>

    <?php if (!empty($page['navigation'])): ?>
    <nav id="navigation">
      <div class="container">
<!-- Region Navigation -->
      <?php print render($page['navigation']); ?>
      </div>
    </nav>
    <?php endif; ?>
    </header>
  <div id="main" class="main body-inner__main">
    <div class="container">
<!-- Region Intro banner -->
      <div class="intro-banner">
        <?php echo render($page['intro_banner']); ?>
      </div>
<!-- Region Involved -->
      <div class="involved">
        <?php echo render($page['involved']); ?>
      </div>
<!-- Region Content -->
      <?php if ($messages): ?>
<!-- messages -->
        <div id="messages" class="clear clearfix"><?php print $messages; ?></div>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      <div id="mission">
      <?php echo render($page['content']); ?>
      </div>
<!-- Region Members -->
      <div class="members">
        <?php echo render($page['members']); ?>
      </div>
<!-- Region Blog -->
      <div class="blog">
        <?php echo render($page['blog']); ?>
      </div>
    </div>
  </div>
  <div class="footer-wrapper">
    <footer class="footer page__footer">
      <div class="container">
        <?php if (!empty($page['footer'])) : ?>
<!-- Region Footer -->
          <div class="row">
            <?php echo render($page['footer']); ?>
          </div>
        <?php endif; ?>
      </div>
    </footer>
  </div>
</div>