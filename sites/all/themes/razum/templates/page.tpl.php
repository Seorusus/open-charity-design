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