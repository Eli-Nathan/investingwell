<?php
     get_header();
?>

     <!-- Header Ends (Includes navigation bar) -->
     <div class='header col-sm-12'>
          <h1 class='text-center'><?php echo $investingwell; ?></h1>
          <?php if( get_field('header_text') ): ?>
          <p><?php the_field('header_text'); ?></p>
          <?php endif; ?>
          <p>We all have goals and dreams, but how do we get there? Investing Well can help you save towards future goals from childrens education to retirment. This is acheived in a low cost way and can help a charity close to your heart as well.</p>
          <div class='btnDiv text-center'>
               <a class='btn btn-default btn-iw-b'>
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
     <div class='savingFor col-sm-12 col-xs-12'>
          <div class='col-md-offset-2 col-md-8 col-xs-12'>
               <h3 class='text-center'>Tell us what you are saving for and we can help you reach your goal.</h3>
          </div>
          <div class='card-options text-center col-sm-12 col-xs-12'>
               <div href='#' class='box col-md-2 col-md-offset-1 col-sm-4 col-xs-6'>
                    <div class='box-inner'>
                         <i class='fa fa-bar-chart'></i>
                         <p>Just Investing</p>
                    </div>
               </div>
               <div href='#' class='box col-md-2 col-sm-4 col-xs-6'>
                    <div class='box-inner'>
                         <i class='fa fa-sun-o'></i>
                         <p>Travel</p>
                    </div>
               </div>
               <div href='#' class='box col-md-2 col-sm-4 col-xs-6'>
                    <div class='box-inner'>
                         <i class='fa fa-home'></i>
                         <p>Home</p>
                    </div>
               </div>
               <div href='#' class='box col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-2 col-xs-6'>
                    <div class='box-inner'>
                         <i class='fa fa-umbrella'></i>
                         <p>Rainy Day</p>
                    </div>
               </div>
               <div href='#' class='box col-md-2 col-sm-offset-0 col-sm-4 col-xs-6 col-xs-offset-3'>
                    <div class='box-inner'>
                         <i class='fa fa-gift'></i>
                         <p>Wedding</p>
                    </div>
               </div>
               <div class='col-sm-12 col-xs-12'>
                    <a class='btn btn-iw-b' href='#'>Let's Start</a>
               </div>
          </div>
     </div>
     <div class='clearfix'></div>
     <div class='donations col-sm-12'>
          <div class='text col-md-6 col-sm-9'>
               <h2>Change your world</h2>
               <p>Investing Well offers you the opportunity to make a positive impact on society. We help you plan for your own future and also secure the future of a charity close to your heart. So what are you saving for?</p>
               <a class='btn btn-iw-b' href='#'>Find out more</a>
          </div>
     </div>
     <div class='charity col-sm-12'>
       <div class='charityInfo col-sm-6'>
         <div class='tagline'>
           <h2 class='text-center'>Be <span class='investingwell-well'>Good</span> with Money
         </div>
         <div class='logo'>
           <?php
            if( get_field('charity_logo') ):
           ?>
             <img src="<?php the_field('charity_logo'); ?>" />
           <?php endif; ?>
       </div>
       <?php while ( have_posts() ) : the_post(); ?>
         <p><?php the_content(); ?></p>

         <p>We write to everyone at the end of the year to let you know how you have made a difference to your charity. Lots of little donations can make a massive difference.</p>
     </div>
     <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large');

     if($image[0] != ""):
       echo "<div class='charity-image col-sm-6 text-center' style='background-image:url(".$image[0].")'>
         <a class='btn btn-iw-b' href='#'>Set your goal for FREE</a>
       </div>";
     else: ?>
     <div class='charity-image col-sm-6 text-center' style='background-image:url(<?php bloginfo('stylesheet_directory');?>/images/hands-colours.png)'>
       <a class='btn btn-iw-b' href="#">Set your goal for FREE</a>
     </div>
   <?php endif; endwhile;?>
   </div>
     <div class='robots col-sm-12'>
          <div class='text col-md-6 col-sm-12'>
               <h2>We are not robots.</h2>
               <hr />
               <p>Investing Well is a service provided by <strong>Qualified Financial Experts</strong>. It is designed so that you can make your own choices and therefore save on the upfront costs.</p>

               <p>But if you have a question or you do need advice feel free to get in touch.</p>
               <a class='btn btn-iw-b' href='#'>Find out more</a>
          </div>
          <div class='image col-md-6 col-sm-12 text-center'>
               <img src='<?php bloginfo('stylesheet_directory');?>/images/robot.jpg' alt="Not Robots">
          </div>
     </div>
     <div class='personalised col-sm-12'>
          <div class='image col-md-6 hidden-sm hidden-xs text-center'>
               <img src='<?php bloginfo('stylesheet_directory');?>/images/personal.jpg' alt="Personal">
          </div>
          <div class='text col-md-6 col-sm-12'>
               <h2>Personalised for you</h2>
               <p>Investing Well helps individuals and families to meet thier own goals. We are an online service to help keep costs really low but you can rest assured expert investment specialists look after your money. Our dedicated support team are on hand if you have a question.</p>
               <a class='btn btn-iw-b' href='#'>Find out more</a>
          </div>
          <div class='image col-xs-12 col-sm-12 hidden-md hidden-lg text-center'>
               <img src='<?php bloginfo('stylesheet_directory');?>/images/personal.jpg' alt="Personal">
          </div>
          <div class='clearfix'></div>
     </div>
     <div class='clearfix'></div>
     <div class='service col-sm-12' id='service'>
          <div class='col-sm-12'>
               <h3>Is this service right for you?</h3>
               <p>This online service is ideal if you have between £1,000 and £50,000 available to invest over a period of between 3 and 30 years, and you’re looking for effective, low-cost investment management. It’s not suitable if you have significant liabilities or debts (not including your mortgage), particularly if your liabilities are greater than your total assets. This is a restricted advice service which is limited to investing funds from a single provider within ISAs and GIAs, so it isn't suitable if you want to apply for a regulated pension product. Further information can be found in our Terms of Service.</p>
          </div>
          <div class='col-sm-6'>
               <h3>Our fees for this service</h3>
               <p>Our fees are shown in the table, compared with the fees currently charged by some of our competitors. Investing Well is free to use with no set up or exit charges. All you pay is the annual charge which is deducted from your investment.</p>
          </div>
          <div class='col-sm-6 tableDiv'>
               <table>
                    <thead>
                         <tr>
                              <th colspan="3">Coparison of typical costs</th>
                         </tr>
                    </thead>
                    <tbody>
                         <tr class='firstRow'>
                              <td>
                                   Provider
                              </td>
                              <td>
                                   Average Annual Charge <i class="fa fa-info-circle" aria-hidden="true"></i>
                              </td>
                              <td>
                                   Regulated Advice
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   Investingwell
                              </td>
                              <td>
                                   0.95%
                              </td>
                              <td>
                                   <i class='fa fa-check'></i>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   Hargreaves Lansdown
                              </td>
                              <td>
                                   1.85%
                              </td>
                              <td>
                                   <i class='fa fa-times'></i>
                              </td>
                         </tr>
                    </tbody>
               </table>
          </div>
     </div>
     <div class='clients col-sm-12'>
       <h2 class='text-center'>What some of our clients think</h2>
       <div class='clientsInner col-sm-offset-1 col-sm-10'>
         <div class='clientbox clientbox-lower col-sm-4'>
           <div class='clientBoxInner col-sm-12'>
           <div class="clientImage col-sm-1">
             <img src="<?php bloginfo('stylesheet_directory');?>/images/user-male.jpg" alt="Client">
           </div>
           <div class='nameRating col-sm-9'>
             <h3>Elon Musk</h3>
             <p>
               <i class='fa fa-star'></i>
               <i class='fa fa-star'></i>
               <i class='fa fa-star'></i>
               <i class='fa fa-star'></i>
               <i class='fa fa-star'></i>
             </p>
           </div>
           <div class='col-sm-12 reviewContent'>
             <p>“Ethical Investing is really important to me as I need my savings to grow more than the bank over the next few years. But I don't want to benefit from anything harmful to other people. I also look for stability and this proposition gives me this as it avoids more uncertain things like oil and mining."</p>
           </div>
         </div>
       </div>
       <div class='clientbox col-sm-4'>
         <div class='clientBoxInner col-sm-12'>
         <div class="clientImage col-sm-1">
           <img src="<?php bloginfo('stylesheet_directory');?>/images/user-female.jpg" alt="Client">
         </div>
         <div class='nameRating col-sm-9'>
           <h3>Michelle Obama</h3>
           <p>
             <i class='fa fa-star'></i>
             <i class='fa fa-star'></i>
             <i class='fa fa-star'></i>
             <i class='fa fa-star'></i>
             <i class='fa fa-star'></i>
           </p>
         </div>
         <div class='col-sm-12 reviewContent'>
           <p>“Ethical Investing is really important to me as I need my savings to grow more than the bank over the next few years. But I don't want to benefit from anything harmful to other people. I also look for stability and this proposition gives me this as it avoids more uncertain things like oil and mining."</p>
         </div>
       </div>
     </div>
     <div class='clientbox clientbox-lower col-sm-4'>
       <div class='clientBoxInner col-sm-12'>
       <div class="clientImage col-sm-1">
         <img src="<?php bloginfo('stylesheet_directory');?>/images/user-female-2.jpg" alt="Client">
       </div>
       <div class='nameRating col-sm-9'>
         <h3>Deborah Meaden</h3>
         <p>
           <i class='fa fa-star'></i>
           <i class='fa fa-star'></i>
           <i class='fa fa-star'></i>
           <i class='fa fa-star'></i>
           <i class='fa fa-star'></i>
         </p>
       </div>
       <div class='col-sm-12 reviewContent'>
         <p>“Ethical Investing is really important to me as I need my savings to grow more than the bank over the next few years. But I don't want to benefit from anything harmful to other people. I also look for stability and this proposition gives me this as it avoids more uncertain things like oil and mining."</p>
       </div>
     </div>
   </div>
     </div>
   </div>
   <div class='steps col-sm-12 col-xs-12'>
     <h2 class='text-center'>How to get started</h2>
        <div class="col-sm-5 hidden-xs image">
             <img src="<?php bloginfo('stylesheet_directory');?>/images/iphone-mock-up.png" alt="Investingwell">
        </div>
        <div class='col-sm-5 col-xs-12 theSteps'>

             <ul class='col-xs-12'>
                  <li class='col-xs-12'>
                       <div class='col-xs-3 theNumber'>
                            <img src='<?php bloginfo('stylesheet_directory');?>/images/number-1.svg' alt="1">
                       </div>
                       <div class='col-xs-9'>
                            <h3>Choose your goal</h3>
                            <p></p>
                       </div>
                  </li>
                  <li class='col-xs-12'>
                       <div class='col-xs-3 theNumber'>
                            <img src='<?php bloginfo('stylesheet_directory');?>/images/number-2.svg' alt="2">
                       </div>
                       <div class='col-xs-9'>
                            <h3>Select your risk level</h3>
                            <p>By choosing from our range of risk levels it will help us select the most suitable investment for you</p>
                       </div>
                  </li>
                  <li class='col-xs-12'>
                       <div class='col-xs-3 theNumber'>
                            <img src='<?php bloginfo('stylesheet_directory');?>/images/number-3.svg' alt="3">
                       </div>
                       <div class='col-xs-9'>
                            <h3>Read our documentation</h3>
                            <p>We will provide you with a personal suitability report, containing the important information you will need before you decide to procees.</p>
                       </div>
                  </li>
                  <li class='col-xs-12'>
                       <div class='col-xs-3 theNumber'>
                            <img src='<?php bloginfo('stylesheet_directory');?>/images/number-4.svg' alt="4">
                       </div>
                       <div class='col-xs-9'>
                            <h3>Start Investing</h3>
                            <p>Access your account 24/7</p>
                            <a class='btn btn-iw-g' href='#'>Get Started</a>
                       </div>
                  </li>
             </ul>
        </div>
   </div>
     <div class='clearfix'></div>
     <div class="flowchart col-sm-12 col-md-12 text-center">
          <h3>How the service works</h3>
          <div class="flowbox col-md-3 col-sm-6 text-center">
               <h4>What are you looking for?</h4>
               <img src='<?php bloginfo('stylesheet_directory');?>/images/icon-flow1.png' alt="Step 1" />
               <div class='para-holder col-sm-12'>
                    <p>We'll ask you some questions about your apporoach to investing to help us make the right selections for you.</p>
               </div>
          </div>
          <div class="flowbox col-md-3 col-sm-6 text-center">
               <h4>Our advice</h4>
               <img src='<?php bloginfo('stylesheet_directory');?>/images/icon-flow2.png' alt="Step 2" />
               <div class='para-holder col-sm-12'>
                    <p>Based on what you've told us, we'll recommend an investment for you. </p>
               </div>
          </div>
          <div class="flowbox col-md-3 col-sm-6 text-center">
               <h4>How long does it take?</h4>
               <img src='<?php bloginfo('stylesheet_directory');?>/images/icon-flow3.png' alt="Step 3" />
               <div class='para-holder col-sm-12'>
                    <p>About 15 minutes. You can always stop halfway through to save your answers and resume later.</p>
               </div>
          </div>
          <div class="flowbox col-md-3 col-sm-6 text-center">
               <h4>We're here to help</h4>
               <img src='<?php bloginfo('stylesheet_directory');?>/images/icon-flow4.png' alt="Step 4" />
               <div class='para-holder col-sm-12'>
                    <p>If you've got any questions at any stage, just click on the "Questions? Let's Talk!" tab on the left or contact your adviser.</p>
               </div>
          </div>
     </div>
     <div class='clearfix'></div>

   <div class='col-sm-12 fscs' id='safety'>
     <div class='col-sm-6 text-center'>
       <img src='<?php bloginfo('stylesheet_directory');?>/images/fscs.png' alt='FSCS' />
     </div>
     <div class='col-sm-6 fscs-text'>
       <p>Investing Well is authorised and regulated by the Financial Conduct Authority (FCA).</p>

       <p>Savings and investments are covered by the FSCS. <a href="#" target="_blank">Click here</a> for more details on limits and levels.</p>
     </div>
   </div>
   <div class="clearfix"></div>
   <div class='articles col-sm-12'>
     <div class='col-sm-12'>
       <h3>Articles</h3>
     </div>
     <?php
   // the query
   $the_query = new WP_Query( array(
     'category_name' => 'news',
      'posts_per_page' => 3,
   ));
?>

<?php $wpquery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3)); ?>

<?php if ( $wpquery->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $wpquery->have_posts() ) : $wpquery->the_post(); ?>
      <div class='articleBox col-sm-4'>
        <a href='<?php the_permalink(); ?>' class='articleCard col-sm-12'>
          <?php if (has_post_thumbnail($post->ID)):
              $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
              $image_alt = get_post_meta( get_post_thumbnail_id($post->ID) , '_wp_attachment_image_alt', true);
              echo '<div class="topImage col-sm-12" style="background-image: url(' . $image[0] . ') "></div>';
              else : ?>
                <div class="topImage col-sm-12" style='background-image:url(<?php bloginfo('stylesheet_directory');?>/images/money-placeholder.jpg)'></div>
          <?php endif; ?>
          <div class='bottomInfo col-sm-12'>
            <h4><?php the_title(); ?></h4>
            <p><i class='fa fa-clock-o'></i> &nbsp; <?php echo get_the_date(); ?> &nbsp; &nbsp; <i class='fa fa-book'></i> Read more</p>
          </div>
        </a>
      </div>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


   </div>
   <?php include("includes/cta.php"); ?>

     <!-- Body ends and footer begins -->

<?php get_footer(); ?>
