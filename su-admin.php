<?php

/*

Template Name: Admin Page. 


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


<!--object(stdClass)#762 (4) { ["user_id"]=> string(2) "94" ["meta_value"]=> string(272) "a:13:{s:4:"Time";i:1446049785;s:7:"user-ip";s:14:"63.145.119.114";s:11:"Survey_type";s:8:"thoughts";s:2:"Q1";s:1:"3";s:2:"Q2";s:1:"1";s:2:"Q3";s:1:"4";s:2:"Q4";s:1:"1";s:2:"Q5";s:1:"3";s:2:"Q6";s:1:"1";s:2:"Q7";s:1:"1";s:2:"Q8";s:1:"1";s:2:"Q9";s:1:"1";s:3:"Q10";s:1:"1";}" ["display_name"]=> string(6) "Stacey" ["user_email"]=> string(36) "stacey.ripp+survey@redjacketwest.com" } 
-->
<?php


//$l= serialize($first_name);
$select_statement = "SELECT wp_usermeta.user_id, wp_usermeta.meta_value, wp_users.display_name, wp_users.user_email FROM  `wp_usermeta` inner join wp_users on wp_usermeta.user_id = wp_users.ID WHERE wp_usermeta.meta_key = 'Quiz_Results'";

$r = $wpdb->get_results($select_statement);

//$r = get_user_by_meta_data( 'test_value' );
//var_dump($r);

var_dump($r[1]);
var_dump($r[2]);


print count($r);


$a = array();

for ($i = 0; $i < count($r); $i++){


	print $r[$i]['display_name'].'<br/>';


	}



?>

<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>