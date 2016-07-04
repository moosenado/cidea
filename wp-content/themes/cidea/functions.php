<?php

// Allow SVG uploads
if (!function_exists('cc_mime_types'))
{
	function cc_mime_types($mimes) {
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');
}