<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


<?php $postid = get_the_ID();?>

 <div class="container">
   <form class="form-horizontal" method="post" action="<?php echo get_page_link($postid) ?>">
   <fieldset>

   <!-- Form Name -->
   <legend>Do your emotions prevent you from being mentally strong?</legend>

  
 <p>The way you deal with your emotions plays a major role in your ability to reach your greatest potential. These statements can help uncover how you cope with your emotions. Read the following statements and determine how often each statement applies to you. 
 <br>
 <br>
Always = 1, Frequently = 2, Sometimes = 3, Rarely = 4, Never = 5</p>


 <input name="form-type" type="" class="hidden" value="emotions">
   <!-- Q1 -->
   <div class="form-group">
     <label class="col-md-4 control-label" for="radios"> 1. When other people achieve something big, I resent their success.</label>
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
     <label class="col-md-4 control-label" for="radios"> 2. I go to great lengths to avoid uncomfortable emotions, like anxiety or sadness.</label>
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
     <label class="col-md-4 control-label" for="radios"> 3. I feel really uncomfortable when someone is angry at me.</label>
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
       <label class="col-md-4 control-label" for="radios"> 4. I lose my temper and say (or do) things I later regret.</label>
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
         <label class="col-md-4 control-label" for="radios">  5. My external circumstances determine what sort of mood I'm in.</label>
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
           <label class="col-md-4 control-label" for="radios">  6. I spend a lot of time worrying about the future.</label>
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
             <label class="col-md-4 control-label" for="radios"> 7. I feel deeply offended by criticism or negative feedback, regardless of the source.</label>
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
               <label class="col-md-4 control-label" for="radios">   8. Fear prevents me from taking steps toward my goals.</label>
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
                 <label class="col-md-4 control-label" for="radios"> 9. My self-worth depends largely upon my achievements.</label>
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
                   <label class="col-md-4 control-label" for="radios">  10. I avoid taking risks - occupational, social, or financial - because I'm afraid.</label>
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

<script type="text/javascript" src="/wp-content/themes/coursepress-child/survey-types/emsg.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>


