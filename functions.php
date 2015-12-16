<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once( 'library/bones.php' ); // if you remove this, bones will break
/*
2. library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
*/
require_once( 'library/custom-post-type.php' ); // you can disable this if you like
/*
3. library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
require_once( 'library/target-post-type.php' ); // you can disable this if you like
/*
4. library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
require_once( 'library/admin.php' ); // this comes turned off by default
/*
5. library/translation/translation.php
	- adding support for other languages
*/

require_once( 'library/widgets.php' ); // this comes turned off by default
/*
6. Widget shenanigans
*/
// require_once( 'library/translation/translation.php' ); // this comes turned off by default

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'bonestheme' ),
		'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));


	register_sidebar(array(
		'id' => 'sidebar-members',
		'name' => __( 'Members Sidebar', 'bonestheme' ),
		'description' => __( 'The members sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'sidebar-learning',
		'name' => __( 'Learning Sidebar', 'bonestheme' ),
		'description' => __( 'The Learning sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'sidebar-technical',
		'name' => __( 'Technical Services Sidebar', 'bonestheme' ),
		'description' => __( 'The technical services sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

  register_sidebar(array(
		'id' => 'sidebar-right',
		'name' => __( 'Right Sidebar', 'bonestheme' ),
		'description' => __( 'The right sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

    register_sidebar(array(
		'id' => 'sidebar-footer',
		'name' => __( 'Footer Widget', 'bonestheme' ),
		'description' => __( 'The Footer sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

    register_sidebar(array(
		'id' => 'sidebar-top',
		'name' => __( 'Top Widget', 'bonestheme' ),
		'description' => __( 'The widgetised area at the top of the page', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="fourcol top-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="top-widget-title">',
		'after_title' => '</h3>',
	));
	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'Sidebar 2', 'bonestheme' ),
		'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<!-- custom gravatar call -->
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
				<!-- end custom gravatar call -->
				<?php printf(__( '<cite class="fn">%s</cite>', 'bonestheme' ), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>
				<?php edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<label class="screen-reader-text" for="s">' . __( 'Search for:', 'bonestheme' ) . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . esc_attr__( 'Search the Site...', 'bonestheme' ) . '" />
	<input type="submit" id="searchsubmit" value="' . esc_attr__( 'Search' ) .'" />
	</form>';
	return $form;
} // don't remove this bracket!


add_action( 'wp_print_styles', 'my_deregister_styles', 100 );
function my_deregister_styles() {
wp_deregister_style( 'sgjvsscrollerstyle' );
}

add_filter('widget_text', 'do_shortcode');

//Password Form

function pippin_change_password_form() {
	global $post;

   	if (is_singular()) :
   		$current_url = get_permalink($post->ID);
   	else :
   		$pageURL = 'http';
   		if ($_SERVER["HTTPS"] == "on") $pageURL .= "s";
   		$pageURL .= "://";
   		if ($_SERVER["SERVER_PORT"] != "80") $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
   		else $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
   		$current_url = $pageURL;
   	endif;
	$redirect = $current_url;

	ob_start();

		// show any error messages after form submission
		pippin_show_error_messages(); ?>

		<?php if(isset($_GET['password-reset']) && $_GET['password-reset'] == 'true') { ?>
			<div class="pippin_message success">
				<span><?php _e('Password changed successfully', 'rcp'); ?></span>
			</div>
		<?php } ?>
		<form id="pippin_password_form" method="POST" action="<?php echo $current_url; ?>">
			<fieldset style="border:none;width: 50%;">
				<p>
					<label for="pippin_user_pass"><?php _e('New Password', 'rcp'); ?></label>
					<input name="pippin_user_pass" id="pippin_user_pass" class="required" type="password"/>
				</p>
				<p>
					<label for="pippin_user_pass_confirm"><?php _e('Password Confirm', 'rcp'); ?></label>
					<input name="pippin_user_pass_confirm" id="pippin_user_pass_confirm" class="required" type="password"/>
				</p>
				<p>
					<input type="hidden" name="pippin_action" value="reset-password"/>
					<input type="hidden" name="pippin_redirect" value="<?php echo $redirect; ?>"/>
					<input type="hidden" name="pippin_password_nonce" value="<?php echo wp_create_nonce('rcp-password-nonce'); ?>"/>
					<input class="button" id="pippin_password_submit" type="submit" value="<?php _e('Change Password', 'pippin'); ?>"/>
				</p>
			</fieldset>
		</form>
	<?php
	return ob_get_clean();
}

// password reset form
function pippin_reset_password_form() {
	if(is_user_logged_in()) {
		return pippin_change_password_form();
	}
}
add_shortcode('password_form', 'pippin_reset_password_form');


function pippin_reset_password() {
	// reset a users password
	if(isset($_POST['pippin_action']) && $_POST['pippin_action'] == 'reset-password') {

		global $user_ID;

		if(!is_user_logged_in())
			return;

		if(wp_verify_nonce($_POST['pippin_password_nonce'], 'rcp-password-nonce')) {

			if($_POST['pippin_user_pass'] == '' || $_POST['pippin_user_pass_confirm'] == '') {
				// password(s) field empty
				pippin_errors()->add('password_empty', __('Please enter a password, and confirm it', 'pippin'));
			}
			if($_POST['pippin_user_pass'] != $_POST['pippin_user_pass_confirm']) {
				// passwords do not match
				pippin_errors()->add('password_mismatch', __('Passwords do not match', 'pippin'));
			}

			// retrieve all error messages, if any
			$errors = pippin_errors()->get_error_messages();

			if(empty($errors)) {
				// change the password here
				$user_data = array(
					'ID' => $user_ID,
					'user_pass' => $_POST['pippin_user_pass']
				);
				wp_update_user($user_data);
				// send password change email here (if WP doesn't)
				wp_redirect(add_query_arg('password-reset', 'true', $_POST['pippin_redirect']));
				exit;
			}
		}
	}
}
add_action('init', 'pippin_reset_password');

if(!function_exists('pippin_show_error_messages')) {
	// displays error messages from form submissions
	function pippin_show_error_messages() {
		if($codes = pippin_errors()->get_error_codes()) {
			echo '<div class="pippin_message error">';
			    // Loop error codes and display errors
			   foreach($codes as $code){
			        $message = pippin_errors()->get_error_message($code);
			        echo '<span class="pippin_error"><strong>' . __('Error', 'rcp') . '</strong>: ' . $message . '</span><br/>';
			    }
			echo '</div>';
		}
	}
}

if(!function_exists('pippin_errors')) {
	// used for tracking error messages
	function pippin_errors(){
	    static $wp_error; // Will hold global variable safely
	    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
	}
}
function custom_login_message() {
$message = "Welcome to the new Paradigm website. You may have been redirected here from a bookmark on the old site. To access the members area simply enter your username and password below. These details should be the same as they were on the oldsite, but if you have having any trouble, please don't hesitate to contact  Paradigm's in-house web developer <a href='mailto:jack.machin@paradigmgroup.eu'>Jack Machin</a> ";
return $message;
}
add_filter('login_message', 'custom_login_message');

function new_wp_trim_excerpt($text) {
    $raw_excerpt = $text;
    if ( '' == $text ) {
        $text = get_the_content('');

        $text = strip_shortcodes( $text );

        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
        $text = strip_tags($text, '<a>');
        $excerpt_length = apply_filters('excerpt_length', 55);

        $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
        $words = preg_split('/(<a.*?a>)|\n|\r|\t|\s/', $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE );
        if ( count($words) > $excerpt_length ) {
            array_pop($words);
            $text = implode(' ', $words);
            $text = $text . $excerpt_more;
        } else {
            $text = implode(' ', $words);
        }
    }
    return apply_filters('new_wp_trim_excerpt', $text, $raw_excerpt);

}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'new_wp_trim_excerpt');

    add_action('register_form','myplugin_register_form');
    function myplugin_register_form (){
        $first_name = ( isset( $_POST['firm_name'] ) ) ? $_POST['firm_name']: '';
        ?>
        <p>
            <label for="firm_name"><?php _e('Firm','paradigmgroup.eu') ?><br />
                <input type="text" name="firm_name" id="firm_name" class="input" value="<?php echo esc_attr(stripslashes($firm_name)); ?>" size="25" /></label>
        </p>
        <?php
    }

    //2. Add validation. In this case, we make sure first_name is required.
    add_filter('registration_errors', 'myplugin_registration_errors', 10, 3);
    function myplugin_registration_errors ($errors, $sanitized_user_login, $user_email) {

        if ( empty( $_POST['first_name'] ) )
            $errors->add( 'firm_name_error', __('<strong>ERROR</strong>: You must include a firm name.','paradigmgroup.eu') );

        return $errors;
    }

    //3. Finally, save our extra registration user meta.
    add_action('user_register', 'myplugin_user_register');
    function myplugin_user_register ($user_id) {
        if ( isset( $_POST['firm_name'] ) )
            update_user_meta($user_id, 'firm_name', $_POST['firm_name']);
    }

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		<tr>
			<th><label for="firm_name">Company</label></th>

			<td>
				<input type="text" name="firm_name" id="firm_name" value="<?php echo esc_attr( get_the_author_meta( 'firm_name', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter the company name.</span>
			</td>
		</tr>

	</table>
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_usermeta( $user_id, 'firm_name', $_POST['firm_name'] );
}


add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

function bones_fonts() {
    //wp_register_style('google-fonts', 'http://fonts.googleapis.com/css?family=Lato|PT+Sans|PT+Serif|Open+Sans');
    //wp_enqueue_style( 'google-fonts');
}

//add_action('wp_print_styles', 'bones_fonts');

add_action( 'init', 'my_add_shortcodes' );

function my_add_shortcodes() {

	add_shortcode( 'my-login-form', 'my_login_form_shortcode' );
}

function my_login_form_shortcode() {

	if ( is_user_logged_in() )
		return '';

	return wp_login_form( array( 'echo' => false ) );
}


add_filter( 'gform_duplicate_message_24', 'change_message', 10, 2 );
function change_message( $message, $form ) {
  return 'Congratulations! Our records indicate you have already registered for this event';
}
?>
