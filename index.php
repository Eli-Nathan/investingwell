<?php get_header(); ?>

     <!-- Header Ends (Includes navigation bar) -->
     <div class='header col-sm-12'>
          <p>We all have goals and dreams, but how do we get there? Investing Well can help you save towards future goals from childrens education to retirment. This is acheived in a low cost way and can help a charity close to your heart as well. </p>
     </div>
     <div class='chatbot col-sm-12'>
       <h1 class='text-center'>Chat Bot</h1>
        <div class='question' action='' method='post'>
            <label for='question'>Ask us a question</label>
            <div class="input-group">
                <input type="text" class="form-control" name='question' id='question' placeholder="Why is the sky blue?">
                <span class="input-group-btn">
        <button class="btn btn-default" id='ask' type="button">Ask!</button>
      </span>
            </div>
            <!-- /input-group -->
        </div>
        <div id='answer'></div>
    </div>

     <!-- Body ends and footer begins -->

<?php get_footer(); ?>
