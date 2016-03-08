<?php

/*

Template Name: Edits 

*/

/**

 * The template for displaying all Surevey pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package CoursePress
 */
get_header(); ?>
<?php


global $post;

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
	echo "salad";

?>


	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">
<div class="container">

 </div>
 
 


	</main><!-- #main -->

	</div><!-- #primary -->



<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>