<?php use Roots\Sage\Titles; ?>
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

<div class="page-header inner-header">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				  <h1><?= Titles\title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>