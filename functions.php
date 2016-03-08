<?php

/*get style sheet*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );

}



/*force SSL to lockdown*/

add_filter('theme_mod_coursepress_logo', 'theme_mod_coursepress_logo_https');

function theme_mod_coursepress_logo_https($url)

{

    if ( !empty( $_SERVER['HTTPS'] ) ) {

	    $url = str_replace('http://', 'https://', $url );

		return $url;

	}	else {

        return $url;

    }

}



/*Hides admin bar from basic users*/

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {

 if (!current_user_can('administrator') && !is_admin()) {

      show_admin_bar(false);

 }

}





/*Makes State Field not required*/

add_filter( 'woocommerce_billing_fields', 'wc_npr_filter_state', 10, 1 );

 

function wc_npr_filter_state( $state_field ) {

$state_field['billing_state']['required'] = false;

return $state_field;

}



/*Lets you add a form to login anywhere*/

function login_form_anywhere( $atts, $content = null ) {

	extract( shortcode_atts( array('redirect' => ''), $atts ) );



	if (!is_user_logged_in()) {

		if($redirect) {

			$redirect_url = $redirect;

		} else {

			$redirect_url = '';

		}

		$form = wp_login_form(array('echo' => false, 'redirect' => $redirect_url ));

	} 

	return $form;

}

add_shortcode('loginanywhere', 'login_form_anywhere');



///////////// Shortcode Redirect

add_shortcode('redirect', 'scr_do_redirect');

function scr_do_redirect($atts)

{

ob_start();

$myURL = (isset($atts['url']) && !empty($atts['url']))?esc_url($atts['url']):"";

$mySEC = (isset($atts['sec']) && !empty($atts['sec']))?esc_attr($atts['sec']):"0";

if(!empty($myURL))

{

?>

<meta http-equiv="refresh" content="<?php echo $mySEC; ?>; url=<?php echo $myURL; ?>">

Please wait while you are redirected...or <a href="<?php echo $myURL; ?>">Click Here</a> if you do not want to wait.

<?php

}

return ob_get_clean();

}



// Woo commerce 
function add_quiz_counters ($order_id){
	
	  global $current_user;
      get_currentuserinfo();
	  $user = $current_user->ID;
	  $meta_value = 0;
	  $meta_key = "emotions_counter";
	  $meta_key2 = "behavior_counter";
	  $meta_key3 = "thoughts_counter";
	
	add_user_meta( $user, $meta_key, $meta_value);
	
	add_user_meta( $user, $meta_key2, $meta_value);
	
	add_user_meta( $user, $meta_key3, $meta_value);
	
}

add_action( 'woocommerce_payment_complete', 'add_quiz_counters', 10, 2 );


/*Allows customization of Admin Login page*/
function my_login_logo() { 
 $logo_image_url = get_theme_mod('coursepress_logo');
?>
    <style type="text/css">
        #login {
            background-image: url(<?php echo $logo_image_url; ?>);
			background-size: 100%;
   			background-repeat: no-repeat;
        }
		.login h1 a {
            background-image: url();
            padding-bottom: 30px;
			 -webkit-background-size: 0px;
			background-size: 0px;
			height: 100px;
			line-height: 0em;
			margin: 0;
			padding: 0;
			outline: 0;
			display: block;
        }
		
		body {
    background-color:;
	background-image: url();
		}		
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
