<?php
/**
* ppl functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package ppl
*/

if ( ! function_exists( 'ppl_setup' ) ) :
	/**
	* Sets up theme defaults and registers support for various WordPress features.
	*
	* Note that this function is hooked into the after_setup_theme hook, which
	* runs before the init hook. The init hook is too late for some features, such
	* as indicating support for post thumbnails.
	*/
	function ppl_setup() {
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ppl, use a find and replace
		* to change 'ppl' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'ppl', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );

		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ppl' ),
		) );

		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ppl_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		* Add support for core custom logo.
		*
		* @link https://codex.wordpress.org/Theme_Logo
		*/
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ppl_setup' );

/**
* Set the content width in pixels, based on the theme's design and stylesheet.
*
* Priority 0 to make it available to lower priority callbacks.
*
* @global int $content_width
*/
function ppl_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ppl_content_width', 640 );
}
add_action( 'after_setup_theme', 'ppl_content_width', 0 );

/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function ppl_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ppl' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ppl' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ppl_widgets_init' );

/**
* Enqueue scripts and styles.
*/
function ppl_scripts() {
	wp_dequeue_script('jquery');
	wp_deregister_script('jquery');

	wp_register_script('jquery-custom', '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3', 'true');
	wp_enqueue_script('jquery-custom');

	wp_enqueue_style( 'ppl-style', get_stylesheet_uri() );
	wp_enqueue_style( 'slick-slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
	wp_enqueue_style( 'wow-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' );
	wp_enqueue_style(	'styles', get_template_directory_uri() . '/assets/css/styles.css', [] );

	wp_enqueue_script( 'slick-slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ppl-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'ppl-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'register-js', get_template_directory_uri() . '/assets/js/register.js', array(), '20151215', true );
	wp_enqueue_script( 'ppl-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );

	$ajax_url = array( 'ajaxUrl' => get_template_directory_uri().'/inc/register.php');
	wp_localize_script( 'register-js', 'object_name', $ajax_url );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ppl_scripts' );

function plusPpl_img($path){
	$base = get_template_directory_uri() . '/assets';
	echo $base . $path;
}


/**
* Implement the Custom Header feature.
*/
require get_template_directory() . '/inc/custom-header.php';

/**
* Custom template tags for this theme.
*/
require get_template_directory() . '/inc/template-tags.php';

/**
* Functions which enhance the theme by hooking into WordPress.
*/
require get_template_directory() . '/inc/template-functions.php';

/**
* Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';

/**
* Load Jetpack compatibility file.
*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



add_action('show_user_profile', 'custom_user_profile_fields');
add_action('edit_user_profile', 'custom_user_profile_fields');

function custom_user_profile_fields( $user ) {
	$allShops = get_the_author_meta( 'shops', $user->ID );
	$allInst = get_the_author_meta( 'inst', $user->ID );
	$allMails = get_the_author_meta( 'mails', $user->ID );
?>
    <table class="form-table">
        <tr>
            <th>
                <p><?php _e( 'User Shops' ); ?></p>
            </th>
            <td>
				<?php foreach ( $allShops as $allShop ) { echo "<p>" . $allShop . "</p>"; } ?>
            </td>
        </tr>
		<tr>
            <th>
                <p><?php _e( 'User Instagram' ); ?></p>
            </th>
            <td>
				<?php foreach ( $allInst as $allIns ) { echo "<p>" . $allIns . "</p>"; } ?>
            </td>
        </tr>
		<tr>
            <th>
                <p><?php _e( 'User Mails' ); ?></p>
            </th>
            <td>
				<?php foreach ( $allMails as $allMail ) { echo "<p>" . $allMail . "</p>"; } ?>
            </td>
        </tr>
    </table>
<?php
}

function st_ajaxurl(){ ?>

		<script>

		var ajaxurl = '<?php echo admin_url('admin-ajax.php') ?>';

	</script>

	<?php
}
add_action('wp_head','st_ajaxurl');



function st_handle_registration(){

	if( $_POST['action'] == 'register_action' ) {

		$error = '';

		$uname = trim( $_POST['mail'] );
		$email = trim( $_POST['mail'] );
		$fname = trim( $_POST['name'] );
		$lname = trim( $_POST['lastname'] );
		$shops = isset($_POST['shops']) ? $_POST['shops'] : [];
		$mails = isset($_POST['mails']) ? $_POST['mails'] : [];
		$inst = isset($_POST['inst']) ? $_POST['inst'] : [];

		$json = ['success' => false];

		if( empty( $_POST['name'] ) )
		$error .= 'Enter Username';

		if( empty( $_POST['mail'] ) )
		$error .= 'Enter Email Id';
		elseif( !filter_var($email, FILTER_VALIDATE_EMAIL) )
		$error .= 'Enter Valid Email';

		if( empty( $_POST['name'] ) )
		$error .= 'Enter First Name';
		elseif( !preg_match("/^[a-zA-Z'-]+$/",$fname) )
		$error .= 'Enter Valid First Name';

		if( empty( $_POST['lastname'] ) )
		$error .= 'Enter Last Name';
		elseif( !preg_match("/^[a-zA-Z'-]+$/",$lname) )
		$error .= 'Enter Valid Last Name';

		if( empty( $error ) ){

			$user_id = wp_create_user( $uname, $pswrd ,$email );
			//$fname $lname $shops $mails $inst
			//$status = add_user_meta();

			if( is_wp_error($user_id) ){

				$json['message'] .= $user_id->get_error_message();

			}else{

				$user_meta = compact('fname', 'lname', 'shops', 'mails', 'inst');
				update_user_meta($user_id, 'first_name', $fname);
				update_user_meta($user_id, 'last_name', $lname);
				foreach($user_meta as $key => $value) {
					update_user_meta($user_id, $key, $value);
				}

				$json['message'] = 'Registration Successful';
				$json['success'] = true;
			}

		}
		else{
		    $json['message'] = $error;
			$json['success'] = false;
		}


		die(json_encode($json));
	}
}
add_action( 'wp_ajax_register_action', 'st_handle_registration' );
add_action( 'wp_ajax_nopriv_register_action', 'st_handle_registration' );



// $providerID = 'facebook';
// if (NextendSocialLogin::isProviderEnabled($providerID)) {
//   $provider = NextendSocialLogin::$enabledProviders[$providerID];
//   try {
//       $socialID = $provider->findSocialIDByAccessToken($accessToken);
//   } catch (Exception $e) {
//
//   }
// }
// if (NextendSocialLogin::isProviderEnabled($providerID)) {
//   $provider = NextendSocialLogin::$enabledProviders[$providerID];
//   $provider->linkUserToProviderIdentifier($wordpress_user_id, $socialID);
//
//
// }
