<?php




//testing awnswer values

  function test_input_in($intdata) {
    
	if (is_numeric($intdata)){
	 if ($intdata > 0 && $intdata < 6) {
         return TRUE;
       	} else {
			exit(); 
			}
	  } else {
		  exit();
		  }
	      
    
 }
//testing form value
 function test_form_type($data) {

           if (is_numeric($data)) {
            exit();
           } else {
                 $data = trim($data);
                 $data = stripslashes($data);
                 $data = htmlspecialchars($data);
                   if ($data ==='behavior'||$data ==='emotions'||$data ==='thoughts'){
                        return $data;
                   } else {
                    exit();}

                 }
     }




if (test_form_type($_POST["form-type"])) {
     $postType = $_POST["form-type"];
   } else {
     $output ="Invalid form type";
   }



  if (test_input_in($_POST["radios-1"])) {
        $Question1 = $_POST["radios-1"];
      } else {
        $output ="Invalid input value 1";
      }


     if (test_input_in($_POST["radios-2"])) {
        $Question2 = $_POST["radios-2"];
      } else {
        $output ="Invalid input value 2";
      }
if (test_input_in($_POST["radios-3"])) {
        $Question3 = $_POST["radios-3"];
      } else {
        $output ="Invalid input value 3";
      }
if (test_input_in($_POST["radios-4"])) {
        $Question4 = $_POST["radios-4"];
      } else {
        $output ="Invalid input value 4";
      }
if (test_input_in($_POST["radios-5"])) {
        $Question5 = $_POST["radios-5"];
      } else {
        $output ="Invalid input value 5";
      }
if (test_input_in($_POST["radios-6"])) {
        $Question6 = $_POST["radios-6"];
      } else {
        $output ="Invalid input value 6";
      }
if (test_input_in($_POST["radios-7"])) {
        $Question7 = $_POST["radios-7"];
      } else {
        $output ="Invalid input value 7";
      }
if (test_input_in($_POST["radios-8"])) {
        $Question8 = $_POST["radios-8"];
      } else {
        $output ="Invalid input value 8";
      }
if (test_input_in($_POST["radios-9"])) {
        $Question9 = $_POST["radios-9"];
      } else {
        $output ="Invalid input value 9";
      }
if (test_input_in($_POST["radios-10"])) {
        $Question10 = $_POST["radios-10"];
      } else {
        $output ="Invalid input value 10";
      }

                               

                                 $Test_results_single = array(
                                   'Time' =>  time(),
                                   'user-ip'=> $_SERVER['REMOTE_ADDR'],
                                   'Survey_type' => $postType,
                                   'Q1' => $Question1,
                                   'Q2' => $Question2,
                                   'Q3' => $Question3,
                                   'Q4' => $Question4,
                                   'Q5' => $Question5,
                                   'Q6' => $Question6,
                                   'Q7' => $Question7,
                                   'Q8' => $Question8,
                                   'Q9' => $Question9,
                                   'Q10' => $Question10,
                                  );

                                
								
								
																	
									$current_user = wp_get_current_user();
									$user_ID = $current_user->ID;
									
									
									$sur_type = $Test_results_single['Survey_type'];
									$id_set = $user_ID;
									
									
									
									
									
									
									$user_email =  $current_user->user_email;
									$meta_key = 'Quiz_Results';
									$RJW_survey_track = array_slice($Test_results_single, 2, 12);
									
									if(isset($sur_type) && $id_set > 0 ){ 
									add_user_meta( $user_ID, $meta_key, $Test_results_single );
									}else{
										wp_redirect( '/'); exit;
										}
									
									//Limits # of attempts
									
									$key = $postType."_counter";
									$livesLeft = get_user_meta($user_ID, $key);
									$lives = $livesLeft[0];
									$oneLife = $lives + 1;
									update_user_meta( $user_ID, $key, $oneLife);
									
									
									
									//conveyour_track($user_email,$meta_key,$RJW_survey_track);
								
								
							wp_redirect( 'survey/?quiz=results'); exit;
								
								
								// return $RJW_survey_track; // todo -- Remove
								// return $Test_results_single; // todo -- Remove
								 
								 
								 
								

								 


?>
