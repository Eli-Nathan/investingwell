<?php get_header(); ?>

     <!-- Header Ends (Includes navigation bar) -->

     <div class='header col-sm-12'>
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
