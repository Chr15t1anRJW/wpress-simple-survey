<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">





<?php $postid = get_the_ID();?>



 <div class="container">

   <form class="form-horizontal" method="post" action="<?php echo get_page_link($postid) ?>">

   <fieldset>



   <!-- Form Name -->

   <legend>Do your thoughts prevent you from being mentally strong?</legend>



  

 <p>Welcome to the first mental strength assessment.</p>
 
  <p>You will take a total of three assessments throughout this course that gauge how mentally strong you are in the three core factors: thoughts, behaviors and emotions.

 <br> 

<br>

Once you complete the assessment, click submit. Once you click submit you'll be able to see your score and what it means for you.</p> 

<p> In the last unit, you'll complete a mental strength plan that incorporates everything that you'll learn in this course. After finishing the course and sticking to your plan for a month, you'll be prompted via text message to take each assessment again. You'll receive one assessment per week for three weeks. After you complete the second round of assessments, you'll see a results button for each category. Click the button and see how you improved in each core factor.</p> 


<p>Now that you have the context, it's time to see if your thoughts prevent you from being mentally strong. It's important to understand the way you think, because your thoughts play a major role in the way you feel and behave. Unproductive and unhealthy thoughts can hold you back from reaching your greatest potential.  

<br>

<br> 

Always = 1, Frequently = 2, Sometimes = 3, Rarely = 4, Never = 5</p>





 <input name="form-type" type="" class="hidden" value="thoughts">

   <!-- Q1 -->

   <div class="form-group">

     <label class="col-md-4 control-label" for="radios"> 1. When reflecting on my day, I'm more likely to recall the bad things that happened, rather than good things.</label>

     <div class="col-md-4">

       <label class="radio-inline" >

         <input type="radio" name="radios-1" id="radios-0" value="1" checked="checked">

         1

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-1" id="radios-1" value="2">

         2

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-1" id="radios-2" value="3">

         3

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-1" id="radios-3" value="4">

         4

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-1" id="radios-4" value="5">

         5 

       </label>

     </div>

   </div>







   <!-- Q2 -->

   <div class="form-group">

     <label class="col-md-4 control-label" for="radios">  2. I keep my expectations low, because I don't want to be disappointed.</label>

     <div class="col-md-4">

       <label class="radio-inline" >

         <input type="radio" name="radios-2" id="radios-0" value="1" checked="checked">

         1

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-2" id="radios-1" value="2">

         2

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-2" id="radios-2" value="3">

         3

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-2" id="radios-3" value="4">

         4

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-2" id="radios-4" value="5">

         5

       </label>

     </div>

   </div>

   <!-- Q3 -->

   <div class="form-group">

     <label class="col-md-4 control-label" for="radios"> 3. When I think about making a change in my life, I spend more time thinking about possible worst-case scenarios rather than best-case scenarios.</label>

     <div class="col-md-4">

       <label class="radio-inline" >

         <input type="radio" name="radios-3" id="radios-0" value="1" checked="checked">

         1

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-3" id="radios-1" value="2">

         2

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-3" id="radios-2" value="3">

         3

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-3" id="radios-3" value="4">

         4

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-3" id="radios-4" value="5">

         5

       </label>

     </div>

   </div>  <!-- Q4 -->

     <div class="form-group">

       <label class="col-md-4 control-label" for="radios">  4. I compare myself to other people in areas like wealth, appearance, or status.</label>

       <div class="col-md-4">

         <label class="radio-inline" >

           <input type="radio" name="radios-4" id="radios-0" value="1" checked="checked">

           1

         </label>

         <label class="radio-inline" >

           <input type="radio" name="radios-4" id="radios-1" value="2">

           2

         </label>

         <label class="radio-inline" >

           <input type="radio" name="radios-4" id="radios-2" value="3">

           3

         </label>

         <label class="radio-inline" >

           <input type="radio" name="radios-4" id="radios-3" value="4">

           4

         </label>

         <label class="radio-inline" >

           <input type="radio" name="radios-4" id="radios-4" value="5">

           5

         </label>

       </div>

     </div>  <!-- Q5 -->

       <div class="form-group">

         <label class="col-md-4 control-label" for="radios">  5. I have bad luck.</label>

         <div class="col-md-4">

           <label class="radio-inline" >

             <input type="radio" name="radios-5" id="radios-0" value="1" checked="checked">

             1

           </label>

           <label class="radio-inline" >

             <input type="radio" name="radios-5" id="radios-1" value="2">

             2

           </label>

           <label class="radio-inline" >

             <input type="radio" name="radios-5" id="radios-2" value="3">

             3

           </label>

           <label class="radio-inline" >

             <input type="radio" name="radios-5" id="radios-3" value="4">

             4

           </label>

           <label class="radio-inline" >

             <input type="radio" name="radios-5" id="radios-4" value="5">

             5

           </label>

         </div>

       </div>  <!-- Q6 -->

         <div class="form-group">

           <label class="col-md-4 control-label" for="radios"> 6. I think I deserve better things in my life than what I have now.</label>

           <div class="col-md-4">

             <label class="radio-inline" >

               <input type="radio" name="radios-6" id="radios-0" value="1" checked="checked">

               1

             </label>

             <label class="radio-inline" >

               <input type="radio" name="radios-6" id="radios-1" value="2">

               2

             </label>

             <label class="radio-inline" >

               <input type="radio" name="radios-6" id="radios-2" value="3">

               3

             </label>

             <label class="radio-inline" >

               <input type="radio" name="radios-6" id="radios-3" value="4">

               4

             </label>

             <label class="radio-inline" >

               <input type="radio" name="radios-6" id="radios-4" value="5">

               5

             </label>

           </div>

         </div>  <!-- Q7 -->

           <div class="form-group">

             <label class="col-md-4 control-label" for="radios"> 7. I criticize myself.</label>

             <div class="col-md-4">

               <label class="radio-inline" >

                 <input type="radio" name="radios-7" id="radios-0" value="1" checked="checked">

                 1

               </label>

               <label class="radio-inline" >

                 <input type="radio" name="radios-7" id="radios-1" value="2">

                 2

               </label>

               <label class="radio-inline" >

                 <input type="radio" name="radios-7" id="radios-2" value="3">

                 3

               </label>

               <label class="radio-inline" >

                 <input type="radio" name="radios-7" id="radios-3" value="4">

                 4

               </label>

               <label class="radio-inline" >

                 <input type="radio" name="radios-7" id="radios-4" value="5">

                 5

               </label>

             </div>

           </div>  <!-- Q8 -->

             <div class="form-group">

               <label class="col-md-4 control-label" for="radios"> 8. I think I have little control over the things that happen to me.</label>

               <div class="col-md-4">

                 <label class="radio-inline" >

                   <input type="radio" name="radios-8" id="radios-0" value="1" checked="checked">

                   1

                 </label>

                 <label class="radio-inline" >

                   <input type="radio" name="radios-8" id="radios-1" value="2">

                   2

                 </label>

                 <label class="radio-inline" >

                   <input type="radio" name="radios-8" id="radios-2" value="3">

                   3

                 </label>

                 <label class="radio-inline" >

                   <input type="radio" name="radios-8" id="radios-3" value="4">

                   4

                 </label>

                 <label class="radio-inline" >

                   <input type="radio" name="radios-8" id="radios-4" value="5">

                   5

                 </label>

               </div>

             </div>  <!-- Q9 -->

               <div class="form-group">

                 <label class="col-md-4 control-label" for="radios"> 9. When I have a presentation, performance, or activity coming up, I tend to predict a negative outcome.</label>

                 <div class="col-md-4">

                   <label class="radio-inline" >

                     <input type="radio" name="radios-9" id="radios-0" value="1" checked="checked">

                     1

                   </label>

                   <label class="radio-inline" >

                     <input type="radio" name="radios-9" id="radios-1" value="2">

                     2

                   </label>

                   <label class="radio-inline" >

                     <input type="radio" name="radios-9" id="radios-2" value="3">

                     3

                   </label>

                   <label class="radio-inline" >

                     <input type="radio" name="radios-9" id="radios-3" value="4">

                     4

                   </label>

                   <label class="radio-inline" >

                     <input type="radio" name="radios-9" id="radios-4" value="5">

                     5

                   </label>

                 </div>

               </div>



               <!-- Q10 -->

                 <div class="form-group">

                   <label class="col-md-4 control-label" for="radios"> 10. I have trouble accepting compliments from other people.</label>

                   <div class="col-md-4">

                     <label class="radio-inline" >

                       <input type="radio" name="radios-10" id="radios-0" value="1" checked="checked">

                       1

                     </label>

                     <label class="radio-inline" >

                       <input type="radio" name="radios-10" id="radios-1" value="2">

                       2

                     </label>

                     <label class="radio-inline" >

                       <input type="radio" name="radios-10" id="radios-2" value="3">

                       3

                     </label>

                     <label class="radio-inline" >

                       <input type="radio" name="radios-10" id="radios-3" value="4">

                       4

                     </label>

                     <label class="radio-inline" >

                       <input type="radio" name="radios-10" id="radios-4" value="5">

                       5

                     </label>

                   </div>

                 </div>



   <!-- Button -->

   <div class="form-group">

     <label class="col-md-4 control-label" for="singlebutton">Submit</label>

     <div class="col-md-4">

          <button id="signin_button" type="button" onclick="myFunction()" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Submit</button>

     </div>

   </div>









    <!--Open - ---Modle-->



    <!-- Modal -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

      <div class="modal-dialog" role="document">

        <div class="modal-content">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <h4 class="modal-title" id="myModalLabel">Results</h4>

          </div>

          <div class="modal-body">

          <p> Your score is <span id="score"></span></p>

          <p><span id="msg"></span></p>

          </div>

          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <button name="submit" class="btn btn-primary">Save Results</button>

          </div>

        </div>

      </div>

    </div>



</div>

       

       

       <!--Closemodle-->





   </fieldset>

   </form>





 </div>



<script type="text/javascript" src="/wp-content/themes/coursepress-child/survey-types/tmsg.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>