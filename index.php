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
                    Let's Start &nbsp; <i class='fa fa-angle-right'></i>
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
     <div class='savingFor col-sm-12'>
          <div class='col-md-offset-2 col-md-8'>
               <h3 class='text-center'>Tell us what you are saving for and we can help you reach your goal.</h3>
          </div>
          <div class='card-options text-center col-sm-12'>
               <div class='box col-md-2 col-md-offset-1 col-sm-4'>
                    <div class='box-inner'>
                         <i class='fa fa-bar-chart'></i>
                         <p>Just Investing</p>
                    </div>
               </div>
               <div class='box col-md-2 col-sm-4'>
                    <div class='box-inner'>
                         <i class='fa fa-sun-o'></i>
                         <p>Travel</p>
                    </div>
               </div>
               <div class='box col-md-2 col-sm-4'>
                    <div class='box-inner'>
                         <i class='fa fa-home'></i>
                         <p>Home</p>
                    </div>
               </div>
               <div class='box col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-2'>
                    <div class='box-inner'>
                         <i class='fa fa-umbrella'></i>
                         <p>Rainy Day</p>
                    </div>
               </div>
               <div class='box col-md-2 col-sm-4'>
                    <div class='box-inner'>
                         <i class='fa fa-gift'></i>
                         <p>Wedding</p>
                    </div>
               </div>
               <a class='btn btn-iw-p' href='#'>Let's Start</a>
          </div>
     </div>
     <div class='donations col-sm-12'>
          <div class='text col-sm-6'>
               <h2>Change your world</h2>
               <p>Investing Well offers you the opportunity to make a positive impact on society. We help you plan for your own future and also secure the future of a charity close to your heart. So what are you saving for?</p>
               <a class='btn btn-iw-p' href='#'>Find out more</a>
          </div>
     </div>

     <!-- Body ends and footer begins -->

<?php get_footer(); ?>
