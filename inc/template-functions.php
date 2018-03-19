<?php
/**
 * Additional features to allow styling of the templates
 */


/**
 * Checks to see if we're on the homepage or not.
 */
function is_site_frontpage() {
	return ( is_front_page() && ! is_home() );
}
