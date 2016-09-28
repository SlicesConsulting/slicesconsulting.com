<?php
if ( is_page('services-for-smes') ) :  
  
//Display 5 Custom post types
$cpt_args = [
	'post_type' => 'testimonial',
	'posts_per_page' => 2,
	'tag' => 'SME',
	
];?>

<div class="row">
	<div class="col-md-12">

		<h3>What our clients are saying</h3>
	</div>

<?php

$cpt = new WP_Query( $cpt_args );

while ( $cpt->have_posts() ) : $cpt->the_post(); 
?>

	<div class="col-md-12">
		<div class="testimonial-wrap">
			<?php the_post_thumbnail( 'full', array( 'class' => ('img-responsive logo-img') )); ?>
			<p><?php the_excerpt();?></p>
			<img src="<?php the_field('profile'); ?>" alt=""  class="testimonial-img alignleft"/>
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
				if(get_field('company'))
				{
				echo ' of ' . get_field('company');
				} ?>
			</h5>
		</div>
	</div>

<?php
endwhile;

wp_reset_postdata();?>
</div>

<?php
elseif ( is_page('services-for-large-companies') ) :  

//Display 5 Custom post types
$cpt_args = [
	'post_type' => 'testimonial',
	'posts_per_page' => 2,
	'tag' => 'Company',
	
];?>

<div class="row">
	<div class="col-md-12">

		<h3>What our clients are saying</h3>
	</div>

<?php

$cpt = new WP_Query( $cpt_args );

while ( $cpt->have_posts() ) : $cpt->the_post(); 
?>

	<div class="col-md-12">
		<div class="testimonial-wrap">
			<?php the_post_thumbnail( 'full', array( 'class' => ('img-responsive logo-img') )); ?>
			<p><?php the_excerpt();?></p>
			<img src="<?php the_field('profile'); ?>" alt=""  class="testimonial-img alignleft"/>
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
				if(get_field('company'))
				{
				echo ' of ' . get_field('company');
				} ?>
			</h5>
		</div>
	</div>

<?php
endwhile;

wp_reset_postdata();?>
</div>

<?php
elseif ( is_page('services-for-agencies') ) :  

//Display 5 Custom post types
$cpt_args = [
	'post_type' => 'testimonial',
	'posts_per_page' => 2,
	'tag' => 'Agency',
	
];?>
<div class="row">
	<div class="col-md-12">

		<h3>What our clients are saying</h3>
	</div>

<?php

$cpt = new WP_Query( $cpt_args );

while ( $cpt->have_posts() ) : $cpt->the_post(); 
?>

	<div class="col-md-12">
		<div class="testimonial-wrap">
			<?php the_post_thumbnail( 'full', array( 'class' => ('img-responsive logo-img') )); ?>
			<p><?php the_excerpt();?></p>
			<img src="<?php the_field('profile'); ?>" alt=""  class="testimonial-img alignleft"/>
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
				if(get_field('company'))
				{
				echo ' of ' . get_field('company');
				} ?>
			</h5>
		</div>
	</div>

<?php
endwhile;

wp_reset_postdata();?>
</div>

<?php
elseif ( is_page('clients') ) :
  dynamic_sidebar('sidebar-clients');
elseif ( is_page('contact') ) : 
  dynamic_sidebar('sidebar-contact');
else: 
  dynamic_sidebar('sidebar-primary');
endif;
?>