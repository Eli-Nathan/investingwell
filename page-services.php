<?php
     get_header();
     while ( have_posts() ) : the_post();
?>
     <!-- Header Ends (Includes navigation bar) -->
     <div class='the-page servicePage col-sm-12'>
       <?php
       $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');

       if($image[0] != ""):

           echo "<div class='header col-sm-12' style='background-image: url(".$image[0].")'></div>";
           else : ?>
             <div class="header col-sm-12" style='background-image:url(<?php bloginfo('stylesheet_directory');?>/images/general-finance.jpg)'></div>

       <?php endif; ?>
       <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
       <h1 class='text-center the-page__title service-title'>
         <span class='lined'>Our <span class='investingwell-well'><?php the_title(); ?></span>
       </h1>
     </div>
     <div class='the-page__content col-sm-12'>
       <div class='col-sm-12 added-content'>
         <?php the_content(); ?>
       </div>
     </div>
   <?php endwhile;  ?>
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
                                   Average Annual Charge <i class="fa fa-info-circle" data-toggle="modal" data-target="#serviceModal1" aria-hidden="true"></i>
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
     <div class='steps col-sm-12 col-xs-12'>
       <h2 class='text-center'>How to get started</h2>
          <div class="col-sm-5 hidden-xs image">
               <img src="<?php bloginfo('stylesheet_directory');?>/images/iphone-mock-up.png" alt="Investingwell">
          </div>
          <div class='col-sm-5 col-xs-12 theSteps'>

               <ul class='col-xs-12 stepsList'>
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
 </div>
 <!-- Modal -->
 <div id="serviceModal1" class="modal fade" role="dialog">
   <div class="modal-dialog">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
         <h4 class="modal-title">Average Annual Charge</h4>
       </div>
       <div class="modal-body">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>

   </div>
 </div>


     <!-- Body ends and footer begins -->

<?php get_footer(); ?>
