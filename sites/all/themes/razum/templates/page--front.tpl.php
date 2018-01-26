<?php
/**
 * @file
 * Needs to be documented.
 */

?>
<div class="body-inner">
  <div class="header-wrapper">
    <header>
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
    </header>
    <?php if (!empty($page['navigation'])): ?>
    <nav id="navigation">
      <div class="container">
<!-- Region Navigation -->
      <?php print render($page['navigation']); ?>
      </div>
    </nav>
    <?php endif; ?>
  </div>
  <div id="main">
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

      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <div class="h1-title"><h1><?php print $title; ?></h1></div>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($tabs = render($tabs)): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      <?php echo render($page['content']); ?>
<!-- Region Members -->
      <div class="members">
        <?php echo render($page['members']); ?>
      </div>
    </div>
  </div>
  <div class="footer-wrapper">
    <footer id="footer">
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