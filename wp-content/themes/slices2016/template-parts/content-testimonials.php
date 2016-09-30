<?php //Display 5 Custom post types
$cpt_args = [
	'post_type' => 'testimonial',
	'posts_per_page' => 4,
	
];

$cpt = new WP_Query( $cpt_args );

$count = 1;

while ( $cpt->have_posts() ) : $cpt->the_post(); 
?>

<div class="col-md-6 p1">
	<div class="testimonial-wrap">
		<div class="row">
			<div class="col-md-2">
					<img src="<?php the_field('profile'); ?>" alt=""  class="testimonial-img alignleft"/>								
			</div>
			<div class="col-md-10">
					<?php
					if(get_field('company'))
					{
						echo '<h3 class="textleft hidden-xs m0">' . get_field('company') . '</h3>';
					} ;?>
				<p><?php the_excerpt();?></p>
				<div class="row">
					<div class="col-xs-12 testimonial-content">
					<h5>
						<?php
						if(get_field('name'))
						{
							echo get_field('name');
						}
						if(get_field('position'))
						{
							echo ', ' . get_field('position');
						}
						;?>
					</h5>
						<?php
						if (has_post_thumbnail()) {
							the_post_thumbnail();
						};?>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

	<?php
	//$count++;

endwhile;

wp_reset_postdata();
?> 