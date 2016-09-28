<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
      
      if(is_single()){ 
               } else { 
      get_template_part('templates/page', 'header');
       }

    ?>      

    <?php if(is_single()){ ?>
    <div class="wrap container-fluid p0" role="document">
      <?php } else { ?>
    <div class="wrap container-fluid" role="document">
      <div class="container">
        <div class="content">
          <main class="main">
            <div class="row">
              <div class="col-md-12">
                <?php };?>
                   <?php include Wrapper\template_path(); ?>
                    </div>
                </div>
          </div>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar p4">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    </div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>