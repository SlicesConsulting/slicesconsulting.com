<section id="hero">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="hero-wrapper">
					<?php
						if(get_field('hero_title'))
						{
							echo '<h1>' . get_field('hero_title') . '</h1>';
					} ;?>
					<?php
						if(get_field('hero_text'))
						{
							echo '<p>' . get_field('hero_text') . '</p>';
					} ;?>
		 				<div class="hero-embed">
		 				<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script>
		 					<span class="wistia_embed wistia_async_i8hrq8g9ng popover=true popoverContent=link" style="display:inline">
		 						<a href="#">
		 						<?php
									if(get_field('hero_button_text'))
									{
										echo '<button class="case-button btn-2 icon-play btn-2a aligncenter">' . get_field('hero_button_text') . '</button>';
								} ;?>				 					
			 					</a>
		 					</span>
						</div>	
				</div>
			</div>
		</div>
	</div>	
	<div class="container-fluid">	
		<div class="row endorsed">
			<div class="container">
				<div class="col-md-12 p0">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/brands.png" class="brands aligncenter"/>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="mobile-brands" class="hidden-sm hidden-md hidden-lg">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/brands-mobile.png" class="brands-mobile aligncenter"/>
			</div>
		</div>
	</div>
</section>

<section id="intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8">
						<?php
							if(get_field('intro_title1'))
							{
								echo '<h1>' . get_field('intro_title1') . '</h1>';
						} ;?>
						<?php
							if(get_field('intro_title2'))
							{
								echo '<h1>' . get_field('intro_title2') . '</h1>';
							} 
						;?>
						<?php
							if(get_field('intro_text1'))
							{
								echo '<p>' . get_field('intro_text1') . '</p>';
							} 
						;?>
 						<?php
							if(get_field('intro_text2'))
							{
								echo '<p>' . get_field('intro_text2') . '</p>';
							} 
						;?>
						<?php
							if(get_field('intro_list'))
							{
								echo get_field('intro_list');
							} 
						;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

					<div class="row">
						<div class="col-md-6 col-md-offset-6">
							<?php
								if(get_field('case_title'))
								{
									echo '<h2>' . get_field('case_title') . '</h2>';
								} 
							;?>
							<?php
								if(get_field('case_text1'))
								{
									echo '<p>' . get_field('case_text1') . '</p>';
								} 
							;?>
							<?php
								if(get_field('case_name'))
								{
									echo '<p class="italic">' . get_field('case_name') . '</p>';
								} 
							;?>
							<?php
								if(get_field('case_text2'))
								{
									echo '<p class="hidden-xs">' . get_field('case_text2') . '</p>';
								} 
							;?>
							<?php 
								if(get_field('case_list'))
								{
									echo get_field('case_list');
								} 
							;?>
								
						</div>
					</div>
					
				</div>
			</div>
		</div>
</section>

<section id="case-studies">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					if(get_field('test_title'))
					{
						echo '<h1 class="hidden-xs">' . get_field('test_title') . '</h1>';
					} 
				;?>
			</div>
		</div>
		<div class="row p2">
			<?php //Display 5 Custom post types
			$cpt_args = [
				'post_type' => 'testimonial',
				'posts_per_page' => 4,
				
			];

			$cpt = new WP_Query( $cpt_args );
			
			$count = 1;

			while ( $cpt->have_posts() ) : $cpt->the_post(); 
				
				// if(is_int($count/3)){
		  //           echo '</div>';
		  //       }
				// if($count==1 OR is_int($count/3)){
		  //           echo '<div class="row p3">';
		  //       } ?>

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
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="textcenter p5">
						<a href="<?php echo get_site_url();?>/clients">
							<?php
								if(get_field('test_button_text'))
								{
									echo '<button class="case-button btn-2 btn-2a"/>' . get_field('test_button_text') . '</button>';
								} 
							;?>
						</a>
					</div>
				</div>
			</div>

			</div>
		</div>
	</div>
</section>