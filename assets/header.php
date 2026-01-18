<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  echo "\n<!-- DEBUG: stylesheet_uri = " . esc_url(get_stylesheet_uri()) . " -->\n";
  echo "<link rel='stylesheet' href='" . esc_url(get_stylesheet_uri()) . "?v=" . time() . "' />\n";
  ?>
<style>
  body { background: #ffe4e6 !important; }
  h1 { border: 6px solid #16a34a !important; padding: 10px !important; }
</style>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div style="position:fixed;bottom:10px;left:10px;z-index:99999;background:#ff0033;color:#fff;padding:8px 10px;border-radius:8px;font:14px Arial;">
  HEADER LOADED ✅
</div>

<?php wp_body_open(); ?>

<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <span class="brand-mark">DemTech</span>
    </a>

    <nav class="site-nav" aria-label="Primary navigation">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'menu',
        'fallback_cb' => false,
      ]);
      ?>
    </nav>
  </div>
</header>
