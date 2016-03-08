	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<hr/>
<?php
require_once('survey-types/results.php');
$current_user = wp_get_current_user();
$user_id = $current_user->ID; 
$key = 'Quiz_Results';
$user_tests = get_user_meta($user_id, $key);
// filter out for Quiz type
$my_test_results = my_filter_funk($user_tests,$type);
// Check which quiz was take first. 
$t = my_time_comp_funk($my_test_results);
// separate the arrays
$v = $t['first'];
$v1 = $t['sec'];
// total the arrays
$total = my_total_funk($v);
$total1 = my_total_funk($v1);

//$vaz = my_number_percent_chang_funk($total1,$total2);
	
//	echo $vaz;
$q1_1 = $v['Q1'];
$q1_2 = $v1['Q1'] ;
$q1_dif = my_number_percent_chang_funk($q1_1,$q1_2);

$q2_1 = $v['Q2'];
$q2_2 = $v1['Q2'] ;
$q2_dif = my_number_percent_chang_funk($q2_1,$q2_2);

$q3_1 = $v['Q3'];
$q3_2 = $v1['Q3'] ;
$q3_dif = my_number_percent_chang_funk($q3_1,$q3_2);

$q4_1 = $v['Q4'];
$q4_2 = $v1['Q4'] ;
$q4_dif = my_number_percent_chang_funk($q4_1,$q4_2);

$q5_1 = $v['Q5'];
$q5_2 = $v1['Q5'] ;
$q5_dif = my_number_percent_chang_funk($q5_1,$q5_2);

$q6_1 = $v['Q6'];
$q6_2 = $v1['Q6'] ;
$q6_dif = my_number_percent_chang_funk($q6_1,$q6_2);

$q7_1 = $v['Q7'];
$q7_2 = $v1['Q7'] ;
$q7_dif = my_number_percent_chang_funk($q7_1,$q7_2);

$q8_1 = $v['Q8'];
$q8_2 = $v1['Q8'] ;
$q8_dif = my_number_percent_chang_funk($q8_1,$q8_2);


$q9_1 = $v['Q9'];
$q9_2 = $v1['Q9'] ;
$q9_dif = my_number_percent_chang_funk($q9_1,$q9_2);

$q10_1 = $v['Q10'];
$q10_2 = $v1['Q10'] ;
$q10_dif = my_number_percent_chang_funk($q10_1,$q10_2);

$Sumtotal = $q1_1 + $q2_1 + $q3_1 + $q4_1 + $q5_1 + $q6_1 + $q7_1 + $q8_1 + $q9_1 + $q10_1;
$Sumtotal1 = $q1_2 + $q2_2 + $q3_2 + $q4_2 + $q5_2 + $q6_2 + $q7_2 + $q8_2 + $q9_2 + $q10_2;

$Sumtotal_dif = my_number_percent_chang_funk($Sumtotal,$Sumtotal1);


?>
<div class="container">

<h2>Results</h2>

<p>1. I have difficulty setting boundaries but then feel resentful toward people who take up my time and energy.</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Difference</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q1_1;?></td>
          <td><?php print $q1_2;?></td>
          <td><?php print $q1_dif;?></td>
        </tr>
      </tbody>
    </table>
<hr />


<p>2. I change my behavior based on what I think other people want to see.</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Difference</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q2_1;?></td>
          <td><?php print $q2_2;?></td>
          <td><?php print $q2_dif;?></td>
        </tr>
      </tbody>
    </table>
<hr />



<p>3. I prefer to avoid conflict, rather than address a problem directly.</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Difference</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q3_1;?></td>
          <td><?php print $q3_2;?></td>
          <td><?php print $q3_dif;?></td>
        </tr>
      </tbody>
    </table>
<hr />



<p>4. When I set goals for myself I struggle to turn my intentions into action.</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Difference</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q4_1;?></td>
          <td><?php print $q4_2;?></td>
          <td><?php print $q4_dif;?></td>
        </tr>
      </tbody>
    </table>
<hr />



<p>5. I find it hard to give up some of my bad habits because I keep falling back on my old ways.</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Difference</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q5_1;?></td>
          <td><?php print $q5_2;?></td>
          <td><?php print $q5_dif;?></td>
        </tr>
      </tbody>
    </table>
<hr />


<p>6.Sometimes I say, "I'll never do that again," only to find myself doing the same things over and over.</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Difference</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q6_1;?></td>
          <td><?php print $q6_2;?></td>
          <td><?php print $q6_dif;?></td>
        </tr>
      </tbody>
    </table>
<hr />


<p>7. I'd rather show off the skills I already have rather than learn new ones.</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Difference</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q7_1;?></td>
          <td><?php print $q7_2;?></td>
          <td><?php print $q7_dif;?></td>
        </tr>
      </tbody>
    </table>
<hr />


<p>8. I avoid facing the fears that could help me achieve my goals.</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Difference</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q8_1;?></td>
          <td><?php print $q8_2;?></td>
          <td><?php print $q8_dif;?></td>
        </tr>
      </tbody>
    </table>
<hr />


<p>9. If I fail at something, I don't try again.</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Difference</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q9_1;?></td>
          <td><?php print $q9_2;?></td>
          <td><?php print $q9_dif;?></td>
        </tr>
      </tbody>
    </table>
<hr />


<p>10. I spend more energy on making excuses for my mistakes, rather than learning from them.</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Difference</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q10_1;?></td>
          <td><?php print $q10_2;?></td>
          <td><?php print $q10_dif;?></td>
        </tr>
      </tbody>
    </table>
<hr />

 <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>Total First</th>
        <th>Total Second</th>
        <th>Difference of Total</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $Sumtotal;?></td>
          <td><?php print $Sumtotal1;?></td>
          <td><?php print $Sumtotal_dif;?></td>
        </tr>
      </tbody>
    </table>




</div>



		</main><!-- #main -->

	</div><!-- #primary -->
