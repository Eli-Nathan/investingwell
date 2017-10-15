<?php
     get_header();
     global $investingwell;
?>


     <!-- Header Ends (Includes navigation bar) -->
     <div class='header col-sm-12'>
          <h1 class='text-center'><?php echo $investingwell; ?></h1>
          <p>We all have goals and dreams, but how do we get there? Investing Well can help you save towards future goals from childrens education to retirment. This is acheived in a low cost way and can help a charity close to your heart as well. </p>
          <div class='btnDiv text-center'>
               <a class='btn btn-default btn-iw-p'>
                    Invest Now &nbsp; <i class='fa fa-angle-right'></i>
               </a>
          </div>
     </div>
     <div id='chat' class='chatHeader col-sm-12'>
         <form class='question' action='' method='post'>
             <label for='question'>Ask us a question</label>
             <div class="input-group">
                 <input type="text" class="form-control" name='question' id='question' placeholder="Tell me about corporate bonds" required>
                 <span class="input-group-btn">
                    <button class="btn btn-default" id='ask' type="submit">Ask!</button>
                 </span>
             </div>
             <!-- /input-group -->
         </form>
         <div id='answer'></div>
     </div>

     <!-- Body ends and footer begins -->

<?php get_footer(); ?>
