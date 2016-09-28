<?php while (have_posts()) : the_post(); ?>
  <?php global $post ;
  get_template_part('templates/content-page', $post->post_name); ?>
<?php endwhile; ?>