<div class="container">
<div class="row navigasjon">
    <div class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <div class="logo logotyp-img">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/logo.png" class="logo">
          </div>      
          <div class="logotyp">
            <h1>Cinema </br>Neuf</h1>
          </div>
          </a>
          </div>
<div class="meny">
      <?php
        wp_nav_menu();
      ?>
      </div>

<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>

        <div class="mobil-meny">  
      <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars" aria-hidden="true"></i>
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
      </button>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap4_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav></div>
  </div>  </div>
