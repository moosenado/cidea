<html>
<head>
	<title>Cidea | <?php the_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Cidea">
	<meta name="keywords" content="Cidea">
	<meta name="author" content="Cidea">
	<meta name="theme-color" content="#4bc3c4">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>
	<header>
		<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-svg-transparent-final.svg" type="image/svg+xml">
        	<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-svg-transparent-final.png" />
        </object>
        <nav>
        	<?php wp_nav_menu(); ?>
        </nav>
	</header>
	<div class="cidea-burger">
		<div class="bar-container">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
	</div>