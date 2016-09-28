<header class="banner">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
      
            <a class="brand navbar-left" href="<?= esc_url(home_url('/')); ?>">
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.png" />
            </a>

            <div class="navbar-header">
                
                <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    Menu
                </button> -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <i class="fa fa-bars"></i> Menu
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <nav class="nav-primary navbar-right">
                <?php
                if (has_nav_menu('primary_navigation')) :
                  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                endif;
                ?>
              </nav>
            </div>
        </div>
    </div>
  </div>
</header>
<div class="mobile-header hidden-sm hidden-md hidden-lg">
  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-xs-4 p0 br">
        <a href="<?php echo get_site_url();?>/clients">Clients</a>
      </div>
      <div class="col-xs-4 p0 br">
        <a href="<?php echo get_site_url();?>/about">About</a>
      </div>
      <div class="col-xs-4 p0">
        <a href="<?php echo get_site_url();?>/contact">Contact</a>
      </div>
    </div>
  </div>
</div>