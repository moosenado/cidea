<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Cidea simplifies business growth through customer-centric , scalable strategies that help businesses market, manage and sell.">
	<meta name="keywords" content="Growth Strategy, Marketing, Management, Lead Generation, Relationship Management">
	<meta name="author" content="Cidea">
	<meta name="theme-color" content="#4bc3c4">
	<title>Cidea | <?php the_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<?php wp_head(); ?>
	<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>
	<header>
		<div class="header-svg-container">
			<a href="<?php echo home_url(); ?>" class="svg">
				<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/svg-full-logo-transparent.svg" type="image/svg+xml">
		        	<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-svg-transparent-final.png" />
		        </object>
		    </a>
	    </div>
        <nav>
        	<?php wp_nav_menu(); ?>
        </nav>
	</header>
	<div class="header-fake"></div>
	<div class="cidea-burger">
		<div class="moving-cont">
			<div class="bar-container">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<div class="close-container">
				<div class="close1"></div>
				<div class="close2"></div>
			</div>
		</div>
	</div>
	<?php include('menu.php'); ?>