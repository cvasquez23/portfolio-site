<?php
/**
  * The header for Portfolio
  *
  * @package Portfolio
  * @since Portfolio 1.0
**/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
    } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="/cv.ico" type="image/x-icon" />
  </head>
  <body>
    <header>
      <div id="nav" class="menu-collapsed" onclick="menuToggle()">
        <div class="toggler"></div>
        <nav>
          <ul>
            <li><a id="slide1" class="nav-link">Home</a></li>
            <li>
              <a id="slide2" class="nav-link" onclick="menuCollapse()">
                About
              </a>
            </li>
            <li><a class="nav-link" href="#section-3">Skills</a></li>
            <li><a class="nav-link" href="#section-4">Projects</a></li>
            <li><a class="nav-link" href="#section-5">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>