<?php //Display 5 Custom post types
$cpt_args = [
	'post_type' => 'testimonial',
	'posts_per_page' => 4,
	
];

$cpt = new WP_Query( $cpt_args );

$count = 1;

?>


<div class="col-md-7 p1">

	<h3>What our clients are saying</h3>

	<ul class="testimonials">
	<?php while ( $cpt->have_posts() ) : $cpt->the_post(); ?>

	<li>				
		<div class="quote">
			<?php the_excerpt();?>
		</div>


		<div class="testimonial-source">
			<div class="logo">
			<?php if (has_post_thumbnail()) {
				the_post_thumbnail();
			}; ?>
			</div>

			<?php if(get_field('name')) { ?>
				<div class="name"><?php echo get_field('name'); ?></div>
			<?php }; ?>

			<?php if(get_field('position')) { ?>
				<div class="title"><?php echo get_field('position'); ?></div>
			<?php }; ?>
		</div>

		<img src="<?php the_field('profile'); ?>" alt=""  class="testimonial-img"/>								
	</li>

	<?php endwhile; ?>
	</ul>

</div>

<div class="col-md-5 p1">
	<ul id="pager">
	</ul>
</div>


<?php wp_reset_postdata(); ?> 