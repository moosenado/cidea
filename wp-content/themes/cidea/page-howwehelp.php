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

<div class="second-section-container">
	<h2><?php echo get_field('second_section_title'); ?></h2>

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xlg-6 remove-pad-marg">
		<div class="business-case-cont">
			<div class="centered-container">
				<div class="centered">
					<div class="content-container">
						<h3><?php echo get_field('business_case_section_one_title'); ?></h3>
						<div><?php echo get_field('business_case_section_one_paragraph'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xlg-6 remove-pad-marg">
		<div class="business-case-cont-img bg" style="background-image: url(<?php echo get_field('business_case_section_one_image')['url']; ?>)"></div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-push-6 col-md-6 col-lg-push-6 col-lg-6 col-xlg-push-6 col-xlg-6 remove-pad-marg">
		<div class="business-case-cont">
			<div class="centered-container">
				<div class="centered">
					<div class="content-container">
						<h3><?php echo get_field('business_case_section_two_title'); ?></h3>
						<div><?php echo get_field('business_case_section_two_paragraph'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-pull-6 col-md-6 col-lg-pull-6 col-lg-6 col-xlg-pull-6 col-xlg-6 remove-pad-marg">
		<div class="business-case-cont-img bg" style="background-image: url(<?php echo get_field('business_case_section_two_image')['url']; ?>)"></div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xlg-6 remove-pad-marg">
		<div class="business-case-cont">
			<div class="centered-container">
				<div class="centered">
					<div class="content-container">
						<h3><?php echo get_field('business_case_section_three_title'); ?></h3>
						<div><?php echo get_field('business_case_section_third_paragraph'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xlg-6 remove-pad-marg">
		<div class="business-case-cont-img bg" style="background-image: url(<?php echo get_field('business_case_section_three_image')['url']; ?>)"></div>
	</div>

	<div class="clearfix"></div>

</div>

<div class="clearfix"></div>

<div class="third-section-container">
	<h3><?php echo get_field('third_section_title'); ?></h3>
	<div class="third-section-content"><?php echo get_field('third_section_paragraph'); ?></div>
</div>


<?php get_footer(); ?>