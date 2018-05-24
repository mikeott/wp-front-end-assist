<?php  /*
Plugin Name: WP Front-end Assist
Plugin URI: https://michaelott.id.au
Description: WordPress front-end assistant for developers.
Version: 1.0
Author: Michael Ott
Author URI: https://michaelott.id.au
Text Domain: front-end-assist
Domain Path: /languages/
*/

// Add custom CSS to front-end
add_action('wp_head', 'front_end_assist_css');
function front_end_assist_css() {
	$front_end_assist_css = '
	<!--/ Front-end assist CSS /-->
	<link rel="stylesheet" href="' . plugins_url( '/css/front-end-assist.css', __FILE__ ) . '" type="text/css" media="all" />';
	echo $front_end_assist_css;
	print "\n";
}

// Deubug to see current template in use.
add_action( 'before_body_end', 'front_end_assist' );
function front_end_assist() {
	global $template; ?>
    
    <div class="front-end-assist">
        <ul>
            <li><strong>Template location</strong>
                <?php print_r( $template ); ?>
            </li>
            <li>
                <strong>Post type</strong>
                <?php echo get_post_type( get_the_ID() ); ?>
            </li>
        </ul>
    </div>

<?php }