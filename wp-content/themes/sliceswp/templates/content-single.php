<?php while (have_posts()) : the_post(); ?>
<div class="single-hero">
      <div class="single-image-wrap"> 
        <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();}
        ;?> 
        <div class="single-overlay">
            <div class="single-overlay-content">
              <h1><?php the_title(); ?></h1>
              <?php get_template_part('templates/entry-meta'); ?>
            </div>
        </div>
      </div>
</div>

  <div class="container">
    <div class="content">
      <main class="main">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">

            <article <?php post_class(); ?>>
              <div class="entry-content">
                <?php the_content(); ?>
              </div>
              <?php comments_template('/templates/comments.php'); ?>
            </article>
<?php endwhile; ?>
          </div>
        </div>
      </main>
    </div>
  </div>
