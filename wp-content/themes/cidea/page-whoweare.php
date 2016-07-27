<?php /* Template Name: Cidea - Who We Are */ ?>

<?php get_header(); ?>

<div class="wwa-top-page-banner fadeInSlower" style="background-image: url(<?php echo get_field('page_banner')['url']; ?>);">
	<div class="centered-container">
		<div class="centered">
			<h1 class="hidden-xs scrollTime" data-animation="slideUpAnimation"><?php echo get_field('page_title'); ?></h1>
			<div class="no-opacity scrollTime" data-animation="rotateInAnimation" data-timeout="500">
				<object class="hidden-xs" data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/svg-logo-swirl-transparent.svg" type="image/svg+xml">
					<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-swirl-svg.png" class="hidden-xs" />
				</object>
			</div>
		</div>
	</div>
</div>

<div class="wwa-top-content-cont scrollTime" data-animation="slideUpAnimation" data-timeout="400">
	<h1 class="visible-xs"><?php echo get_field('page_title'); ?></h1>
	<?php echo get_field('page_information'); ?>
</div>

<div class="wwa-middle-content-cont">
	<div class="visible-xs visible-sm">
		<h2><?php echo get_field('bio_name'); ?></h2>
		<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/svg-logo-swirl-transparent.svg" class="wwa-svg" type="image/svg+xml">
			<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-swirl-svg.png" class="wwa-svg"/>
		</object>
	</div>
	<div class="col-md-12 wwa-bio-cont-desktop">
		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xlg-5 remove-pad-marg">
			<div class="wwa-bio-image">
				<img src="<?php echo get_field('bio_image')['url']; ?>" class="no-opacity scrollTime" data-animation="slideLeftAnimationFar"/>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xlg-7 remove-pad-marg">
			<div class="wwa-info-cont">
				<div class="no-opacity scrollTime" data-animation="slideRightAnimationFar">
					<div class="hidden-xs hidden-sm">
						<h2><?php echo get_field('bio_name'); ?></h2>
					</div>
					<h3><?php echo get_field('bio_information_title'); ?></h3>
					<div class="wwa-bio-info">
						<?php echo get_field('bio_paragraph'); ?>
					</div>
					<div class="wwa-social-media-icon hidden-xs hidden-sm">
						<a href="<?php echo get_field('linkedin_url'); ?>" target="_blank">
							<img src="<?php echo get_field('social_media_icon')['url']; ?>" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wwa-social-media-icon visible-xs visible-sm">
		<a href="<?php echo get_field('linkedin_url'); ?>" target="_blank">
			<img src="<?php echo get_field('social_media_icon')['url']; ?>" />
		</a>
	</div>
	<h3 class="no-opacity scrollTime" data-animation="slideUpAnimation" data-timeout="400"><?php echo get_field('client_section_title'); ?></h3>
	<div class="wwa-client-list-cont">
		<ul>
			<?php for ($x = 1; $x <= 15; $x++) : 
				if (empty(get_field('client_'.$x)['url'])) break;
			?>
	    		<li class="no-opacity scrollTime" data-animation="zoomInAnimation" data-timeout="400"><a href="<?php echo get_field('client_'.$x.'_url'); ?>" target="_blank"><img src="<?php echo get_field('client_'.$x)['url']; ?>" /></a></li>
	   		<?php endfor; ?>
		</ul>
	</div>
</div>
<?php get_footer(); ?>