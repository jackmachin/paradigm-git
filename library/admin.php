<?php
/*
This file handles the admin area and functions.
You can use this file to make changes to the
dashboard. Updates to this page are coming soon.
It's turned off by default, but you can call it
via the functions file.

Developed by: Eddie Machado
URL: http://themble.com/bones/

Special Thanks for code & inspiration to:
@jackmcconnell - http://www.voltronik.co.uk/
Digging into WP - http://digwp.com/2010/10/customize-wordpress-dashboard/

*/

/************* DASHBOARD WIDGETS *****************/

// disable default dashboard widgets
function disable_default_dashboard_widgets() {
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'core' );    // Right Now Widget
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'core' ); // Comments Widget
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'core' );  // Incoming Links Widget
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'core' );         // Plugins Widget

	remove_meta_box('dashboard_quick_press', 'dashboard', 'core' );  // Quick Press Widget
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'core' );   // Recent Drafts Widget
	remove_meta_box( 'dashboard_primary', 'dashboard', 'core' );         //
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'core' );       //

	// removing plugin dashboard boxes
	remove_meta_box( 'yoast_db_widget', 'dashboard', 'normal' );         // Yoast's SEO Plugin Widget
	remove_meta_box( 'bbp-dashboard-right-now', 'dashboard', 'core');	//bbPress right now
	remove_meta_box( 'welcome-panel', 'dashboard', 'core');				//annoying welcome message

	/*
	have more plugin widgets you'd like to remove?
	share them with us so we can get a list of
	the most commonly used. :D
	https://github.com/eddiemachado/bones/issues
	*/
}

/*
Now let's talk about adding your own custom Dashboard widget.
Sometimes you want to show clients feeds relative to their
site's content. For example, the NBA.com feed for a sports
site. Here is an example Dashboard Widget that displays recent
entries from an RSS Feed.

For more information on creating Dashboard Widgets, view:
http://digwp.com/2010/10/customize-wordpress-dashboard/
*/

// RSS Dashboard Widget
function bones_rss_dashboard_widget() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               // include the required file
		$feed = fetch_feed( 'http://themble.com/feed/rss/' );        // specify the source feed
		$limit = $feed->get_item_quantity(7);                      // specify number of items
		$items = $feed->get_items(0, $limit);                      // create an array of items
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';   // fallback message
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'bonestheme' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

function bones_custom_dashboard_widget() { ?>
		<h4>Doing a Strategic Partner Update(SPU)</h4>
			<ol>
				<li>Have a SPU to do. <a href="/wordpress/wp-admin/post-new.php" target="_blank">Click this link.</a></li>
				<li>Paste in article title where it says "Enter title here"</li>
				<li>Paste in article content in the big blank white box you see in front of you</li>
				<li>Correctly categorise the article, by ticking the Breaking News and the <b>relevant strategic partner</b> (RSP) check box in the categories box. (You may have to scroll down to find it.)</li>
				<li>Stop those pesky non members seeing our articles, scroll down the Content Permissions box and tick Member, Staff and the RSP to the article.</li>
				<li>Where it says Tags, start typing in the name of the Strategic  Partner the update is for. It <i>should</i> already be there as a tag, click it.</li>
				<li>Hit the big blue publish button, because you're fearless. (Feels good right?)</li>
				<li>Check the news feed in the members area. The story is in the News Feed! You did that!</li>
			</ol>
		<h4>Adding the story to the Strategic Partner page</h4>
			<ol>
				<li>We're working with Pages as well as posts now, scary stuff.</li>
				<li>From the left hand sidebar, click Pages and open up either Tree View or Column View, depending on whether you prefer Trees or Columns</li>
				<li>Click find your way to the Strategic Partners page, Members Area -> Strategic Partners -> Whoever you just did the update for, click edit on this page</li>
				<li>There's a list of 5 stories under the Breaking News tab, delete the bottom one</li>
				<li>Above the top one, add another bullet point</li>
				<li>Flick back to your post, copy the headline</li>
				<li>Paste the headline next to the bullet point</li>
				<li>Back on the post, copy the URL, (right click and Copy URL where it says View Post</li>
				<li>Select the headline you just pasted, then click the Link button (hint, it looks like a link) at the top of the WYSIWYG</li>
				<li>Paste the URL in the URL field, give it a title or leave it blank, not that important</li>
				<li>Tick the Open in New Window box</li>
				<li>Hit the big blue update button</li>
				<li>Done</li>
			</ol>
		<h4>Categories are Cool!</h4>
			<p>The most important part of the post editor screen after the WYSIWYG and the big blue publish button is almost definitely the Category box. Which category you tick makes a big difference to where the post appears on the site and how it looks. Ticking an SP box for example will style the post so it fits with the SPs colour scheme. If you click Breaking News, this tells WordPress you want it to appear in the News Feed in the Members Area. The Paradigm Blog, Regulatory Updates and all work on the same logic.</p>
		<h4><b>IT'S POWERFUL YEAH!?</b></h4>
	<?php }

// calling all custom dashboard widgets
function bones_custom_dashboard_widgets() {
	//wp_add_dashboard_widget( 'bones_rss_dashboard_widget', __( 'Recently on Themble (Customize on admin.php)', 'bonestheme' ), 'bones_rss_dashboard_widget' );
	wp_add_dashboard_widget( 'bones_custom_dashboard_widget', __( 'GREETINGS HUMAN', 'bonestheme' ), 'bones_custom_dashboard_widget' );
	/*
	Be sure to drop any other created Dashboard Widgets
	in this function and they will all load.
	*/
}


// removing the dashboard widgets
add_action( 'admin_menu', 'disable_default_dashboard_widgets' );
// adding any custom widgets
add_action( 'wp_dashboard_setup', 'bones_custom_dashboard_widgets' );

add_action('set_current_user', 'csstricks_hide_admin_bar');
function csstricks_hide_admin_bar() {
  if (!current_user_can('edit_posts')) {
    show_admin_bar(false);
  }
}
function remove_the_dashboard () {
if (current_user_can('level_10')) {
return;}else {
global $menu, $submenu, $user_ID;
$the_user = new WP_User($user_ID);
reset($menu); $page = key($menu);
while ((__('Dashboard') != $menu[$page][0]) && next($menu))
$page = key($menu);
if (__('Dashboard') == $menu[$page][0]) unset($menu[$page]);
reset($menu); $page = key($menu);
while (!$the_user->has_cap($menu[$page][1]) && next($menu))
$page = key($menu);
if (preg_match('#wp-admin/?(index.php)?$#',$_SERVER['REQUEST_URI']) && ('index.php' != $menu[$page][2]))
wp_redirect(get_option('siteurl') . '/wp-admin/post-new.php');}}
add_action('admin_menu', 'remove_the_dashboard');


/************* CUSTOM LOGIN PAGE *****************/

// calling your own login css so you can style it

//Updated to proper 'enqueue' method
//http://codex.wordpress.org/Plugin_API/Action_Reference/login_enqueue_scripts
function bones_login_css() {
	wp_enqueue_style( 'bones_login_css', get_template_directory_uri() . '/library/css/login.css', false );
}

// changing the logo link from wordpress.org to your site
function bones_login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function bones_login_title() { return get_option( 'blogname' ); }

// calling it only on the login page
add_action( 'login_enqueue_scripts', 'bones_login_css', 10 );
add_filter( 'login_headerurl', 'bones_login_url' );
add_filter( 'login_headertitle', 'bones_login_title' );


/************* CUSTOMIZE ADMIN *******************/

/*
I don't really recommend editing the admin too much
as things may get funky if WordPress updates. Here
are a few funtions which you can choose to use if
you like.
*/

// Custom Backend Footer
function bones_custom_admin_footer() {
	_e( '<span id="footer-thankyou">Developed by <a href="http://jackmach.in" target="_blank">Jack Machin</a></span>.' );
}

// adding it to the admin area
add_filter( 'admin_footer_text', 'bones_custom_admin_footer' );

add_filter('manage_post_posts_columns', 'bs_event_table_head');
function bs_event_table_head( $defaults ) {
    $defaults['members-cp']  = 'Content Permissions';
    return $defaults;
}

add_action( 'manage_post_posts_custom_column', 'bs_event_table_content', 10, 2 );

function bs_event_table_content( $column_name, $post_id ) {
    if ($column_name == 'members-cp') {
    $permissions = get_post_meta( $post_id, '_members_access_role', true );
        foreach ($permissions as $permission) {
            echo $permission;
        }
    }
}

?>
