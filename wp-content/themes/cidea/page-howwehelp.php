<?php /* Template Name: Cidea - How We Help */ ?>

<?php get_header(); ?>

<div class="top-section-container">
	<h1 class="scrollTime" data-animation="slideUpAnimation"><?php echo get_field('page_title'); ?></h1>
	<div class="large-title-swirl scrollTime" data-animation="rotateInAnimation" data-timeout="500">
		<div>
			<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/svg-logo-swirl-transparent.svg" type="image/svg+xml">
				<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-swirl-svg.png" />
			</object>
		</div>
	</div>
	<div class="no-opacity scrollTime" data-animation="slideUpAnimation" data-timeout="200">

		<div class="top-section-content">
			<p><?php echo get_field('paragraph_one'); ?></p>
			<div class="no-opacity scrollTime" data-animation="rotateInAnimation" data-timeout="200">
				<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/svg-logo-swirl-transparent.svg" type="image/svg+xml">
					<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-swirl-svg.png" />
				</object>
			</div>
		</div>

		<div class="top-section-content">
			<p><?php echo get_field('paragraph_two'); ?></p>
			<div class="no-opacity scrollTime" data-animation="rotateInAnimation" data-timeout="200">
				<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/svg-logo-swirl-transparent.svg" type="image/svg+xml">
					<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-swirl-svg.png" />
				</object>
			</div>
		</div>

		<div class="top-section-content">
			<p><?php echo get_field('paragraph_three'); ?></p>
			<div class="no-opacity scrollTime" data-animation="rotateInAnimation" data-timeout="200">
				<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/svg-logo-swirl-transparent.svg" type="image/svg+xml">
					<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-swirl-svg.png" />
				</object>
			</div>
		</div>

		<div class="top-section-content">
			<p><?php echo get_field('paragraph_four'); ?></p>
		</div>

	</div>
</div>

<div class="second-section-container">
	<h2 class="scrollTime no-opacity" data-animation="slideUpAnimation" data-timeout="400"><?php echo get_field('second_section_title'); ?></h2>

	<div id="hwh-section1" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xlg-6 remove-pad-marg">
		<div class="business-case-cont scrollTime" data-animation="slideUpAnimationSlow" data-timeout="600">
			<div class="centered-container">
				<div class="centered one-hundred">
					<div class="content-container">
						<h3><?php echo get_field('business_case_section_one_title'); ?></h3>
						<?php echo get_field('business_case_section_one_paragraph'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xlg-6 remove-pad-marg">
		<div class="business-case-cont-img bg scrollTime" data-animation="fadeInSlowWFilter" data-timeout="600" style="background-image: url(<?php echo get_field('business_case_section_one_image')['url']; ?>)"></div>
	</div>

	<div id="hwh-section2" class="col-xs-12 col-sm-12 col-md-push-6 col-md-6 col-lg-push-6 col-lg-6 col-xlg-push-6 col-xlg-6 remove-pad-marg">
		<div class="business-case-cont scrollTime" data-animation="slideUpAnimationSlow" data-timeout="600">
			<div class="centered-container">
				<div class="centered one-hundred">
					<div class="content-container">
						<h3><?php echo get_field('business_case_section_two_title'); ?></h3>
						<?php echo get_field('business_case_section_two_paragraph'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-pull-6 col-md-6 col-lg-pull-6 col-lg-6 col-xlg-pull-6 col-xlg-6 remove-pad-marg">
		<div class="business-case-cont-img bg scrollTime" data-animation="fadeInSlowWFilter" data-timeout="600" style="background-image: url(<?php echo get_field('business_case_section_two_image')['url']; ?>)"></div>
	</div>

	<div id="hwh-section3" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xlg-6 remove-pad-marg">
		<div class="business-case-cont scrollTime" data-animation="slideUpAnimationSlow" data-timeout="600">
			<div class="centered-container">
				<div class="centered one-hundred">
					<div class="content-container">
						<h3><?php echo get_field('business_case_section_three_title'); ?></h3>
						<?php echo get_field('business_case_section_third_paragraph'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xlg-6 remove-pad-marg">
		<div class="business-case-cont-img bg scrollTime" data-animation="fadeInSlowWFilter" data-timeout="600" style="background-image: url(<?php echo get_field('business_case_section_three_image')['url']; ?>)"></div>
	</div>

	<div class="clearfix"></div>

</div>

<div class="clearfix"></div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xlg-12 remove-pad-marg">
	<div class="third-section-container" style="background-image: url(<?php echo get_field('third_section_background')['url']; ?>)">
		<div class="third-section-bg-overlay scrollTime" data-animation="lowerOpacitySlower" data-timeout="400"></div>
		<h3 class="scrollTime" data-animation="slideUpAnimation" data-timeout="400"><?php echo get_field('third_section_title'); ?></h3>
		<p class="third-section-content scrollTime" data-animation="slideRightAnimation" data-timeout="600"><?php echo get_field('third_section_paragraph'); ?></p>
	</div>
</div>


<?php get_footer(); ?>