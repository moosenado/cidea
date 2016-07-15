<?php /* Template Name: Cidea - How We Help */ ?>

<?php get_header(); ?>

<div class="top-section-container">
	<h1><?php echo get_field('page_title'); ?></h1>
	<div class="large-title-swirl">
		<div>
			<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/svg-logo-swirl-transparent.svg" type="image/svg+xml">
				<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-swirl-svg.png" />
			</object>
		</div>
	</div>
	<div class="top-section-content">
		<?php echo get_field('paragraph_one'); ?>
		<div>
			<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/svg-logo-swirl-transparent.svg" type="image/svg+xml">
				<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-swirl-svg.png" />
			</object>
		</div>
	</div>
	<div class="top-section-content">
		<?php echo get_field('paragraph_two'); ?>
		<div>
			<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/svg-logo-swirl-transparent.svg" type="image/svg+xml">
				<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-swirl-svg.png" />
			</object>
		</div>
	</div>
	<div class="top-section-content">
		<?php echo get_field('paragraph_three'); ?>
		<div>
			<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/svg-logo-swirl-transparent.svg" type="image/svg+xml">
				<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-swirl-svg.png" />
			</object>
		</div>
	</div>
	<div class="top-section-content">
		<?php echo get_field('paragraph_four'); ?>
	</div>
</div>


<?php get_footer(); ?>