<?php

require_once('classes/email.php');

// Allow SVG uploads
if (!function_exists('cc_mime_types'))
{
	function cc_mime_types($mimes) {
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');
}

// if (!function_exists('contact_form_process'))
// {
// 	function contact_form_process() {
// 	    echo 'hithere';
// 	}

// 	add_action("wp_ajax_contact_form", "contact_form_process");
// 	add_action("wp_ajax_nopriv_contact_form", "contact_form_process");
// }

//Style and Scripts
if (!function_exists('styles_and_scripts'))
{
	function styles_and_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
		wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), NULL, true );
	}

	add_action( 'wp_enqueue_scripts', 'styles_and_scripts' );
}

// Global Footer Options
if (!function_exists('add_global_custom_options'))
{
	function add_global_custom_options()
	{
	    add_options_page('Footer Options', 'Footer Options', 'manage_options', 'functions','global_custom_options');
	}

	add_action('admin_menu', 'add_global_custom_options');

	function global_custom_options()
	{
	?>
	    <div class="wrap">
	        <h2>Footer Options</h2>
	        <form method="post" action="options.php">
	            <?php wp_nonce_field('update-options') ?>
	            <p><strong>Address:</strong><br />
	                <input type="text" name="address" size="45" value="<?php echo get_option('address'); ?>" />
	            </p>
	            <p><strong>City:</strong><br />
	                <input type="text" name="city" size="45" value="<?php echo get_option('city'); ?>" />
	            </p>
	            <p><strong>Postal Code:</strong><br />
	                <input type="text" name="postalcode" size="45" value="<?php echo get_option('postalcode'); ?>" />
	            </p>
	            <p><strong>Phone Number:</strong><br />
	                <input type="text" name="phonenumber" size="45" value="<?php echo get_option('phonenumber'); ?>" />
	            </p>
	            <p><strong>Email:</strong><br />
	                <input type="text" name="email" size="45" value="<?php echo get_option('email'); ?>" />
	            </p>
	            <p><strong>LinkedIn URL:</strong><br />
	                <input type="text" name="linkedin" size="45" value="<?php echo get_option('linkedin'); ?>" />
	            </p>
	          	<p><strong>Facebook URL:</strong><br />
	                <input type="text" name="facebook" size="45" value="<?php echo get_option('facebook'); ?>" />
	            </p>
	           	<p><strong>Twitter URL:</strong><br />
	                <input type="text" name="twitter" size="45" value="<?php echo get_option('twitter'); ?>" />
	            </p>
	           	<p><strong>Instagram URL:</strong><br />
	                <input type="text" name="instagram" size="45" value="<?php echo get_option('instagram'); ?>" />
	            </p>
	            <p><input type="submit" name="Submit" value="Save" /></p>
	            <input type="hidden" name="action" value="update" />
	            <input type="hidden" name="page_options" value="address,city,postalcode,phonenumber,email,linkedin,facebook,twitter,instagram" />
	        </form>
	    </div>
	<?php
	}
}
?>