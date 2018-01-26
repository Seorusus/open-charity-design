<?php
/**
 * @file
 * Needs to be documented.
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>">
  <div id="page">
<div id="logotype">
          <img src="/sites/all/themes/idevtheme/logo.png" alt="Home" title="Home" width="75" height="82">
</div>
    <div id="header" class="container">
      <?php if (!empty($header)): ?>
        <div id="header-region">
          <?php print $header; ?>
        </div>
      <?php endif; ?>

    </div> <!-- /header -->

    <div class="container">

      <?php if (!empty($sidebar_first)): ?>
        <div id="sidebar-first" class="column sidebar">
          <?php print $sidebar_first; ?>
        </div> <!-- /sidebar-first -->
      <?php endif; ?>

      <div id="main" class="column">
        <div id="main-squeeze">

        <div id="content">
          <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php if (!empty($messages)): print $messages; endif; ?>
          <div id="content-content" class="clearfix">
            <?php print $content; ?>
          </div> <!-- /content-content -->
        </div> <!-- /content -->

      </div></div> <!-- /main-squeeze /main -->

      <?php if (!empty($sidebar_second)): ?>
        <div id="sidebar-second" class="column sidebar">
          <?php print $sidebar_second; ?>
        </div> <!-- /sidebar-second -->
      <?php endif; ?>

    </div> <!-- /container -->

    <div id="footer-wrapper">
      <div id="footer">
        <?php if (!empty($footer)): print $footer; endif; ?>
      </div> <!-- /footer -->
    </div> <!-- /footer-wrapper -->

  </div> <!-- /page -->

</body>
</html>
