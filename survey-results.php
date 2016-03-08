<?php

/*

Template Name: Results

*/



get_header(); ?>



<?php

global $post;

?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">





<hr/>

<h1>Thank you for saving your results!</h1>
<br>
<br>

<h2>In the future, we’ll use these results to show you how your mental strength has progressed.</h2>

<a href="http://courses.amymorinlcsw.com/custom-course-details"><button> Go back to the course </button> 

<button onclick="close_window">Close</button>

<script>
function close_window() {
  if (confirm("Close Window?")) {
    close();
  }
}
</script>
<hr/>
<?php
global $current_user;
	get_currentuserinfo();
$user_id = $current_user->ID; 


		$key = 'thoughts_counter';
		$livesLeft = get_user_meta($user_id, $key);
		$lives = $livesLeft[0];
		
		if($lives < 2){
		print "";
		} else {
		print "<a href=\"/survey/?quiz=thoughts\"><button style =\"margin: 5px\">Thoughts Results</button></a>";
		}
		
		
			$key2 = 'emotions_counter';
		$livesLeft = get_user_meta($user_id, $key2);
		$lives = $livesLeft[0];
		if($lives < 2){
		print "";
		} else {
		print "<a href=\"/survey/?quiz=emotions\"><button style =\"margin: 5px\" >Emotions Results</button></a>";
		}
		
			$key3 = 'behavior_counter';
		$livesLeft = get_user_meta($user_id, $key3);
		$lives = $livesLeft[0];
		if($lives < 2){
		print "";
		} else {
		print "<a href=\"/survey/?quiz=behavior\"><button style =\"margin: 5px\" >Behavior Results</button></a>";
		}
		
		







?>



		</main><!-- #main -->

	</div><!-- #primary -->



<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>