<?php
     get_header();
     global $investingwell;
     global $charity;
     global $charityname;
     if(isset($_GET["charity"])) {
          $charity = $_GET["charity"];
          if($charity == "chas") {
               $charityname = "CHAS";
          }
          else if($charity == 'oxfam') {
               $charityname = "Oxfam";
          }
          else {
               $charityname = null;
          }
     }
     else {
          $charity = null;
     }
?>


     <!-- Header Ends (Includes navigation bar) -->
     <div class='header col-sm-12'>
          <h1 class='text-center'><?php echo $investingwell; ?></h1>
          <p>
               <?php
                    if($charity == "chas") {
                         echo "You came from ". $charityname ."! ";
                    }
               ?>
               We all have goals and dreams, but how do we get there? Investing Well can help you save towards future goals from childrens education to retirment. This is acheived in a low cost way and can help a charity close to your heart as well.</p>
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
     <div class='savingFor col-sm-12 col-xs-12'>
          <div class='col-md-offset-2 col-md-8 col-xs-12'>
               <h3 class='text-center'>Tell us what you are saving for and we can help you reach your goal.</h3>
          </div>
          <div class='card-options text-center col-sm-12 col-xs-12'>
               <a href='#' class='box col-md-2 col-md-offset-1 col-sm-4 col-xs-6'>
                    <div class='box-inner'>
                         <i class='fa fa-bar-chart'></i>
                         <p>Just Investing</p>
                    </div>
               </a>
               <a href='#' class='box col-md-2 col-sm-4 col-xs-6'>
                    <div class='box-inner'>
                         <i class='fa fa-sun-o'></i>
                         <p>Travel</p>
                    </div>
               </a>
               <a href='#' class='box col-md-2 col-sm-4 col-xs-6'>
                    <div class='box-inner'>
                         <i class='fa fa-home'></i>
                         <p>Home</p>
                    </div>
               </a>
               <a href='#' class='box col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-2 col-xs-6'>
                    <div class='box-inner'>
                         <i class='fa fa-umbrella'></i>
                         <p>Rainy Day</p>
                    </div>
               </a>
               <a href='#' class='box col-md-2 col-sm-offset-0 col-sm-4 col-xs-6 col-xs-offset-3'>
                    <div class='box-inner'>
                         <i class='fa fa-gift'></i>
                         <p>Wedding</p>
                    </div>
               </a>
               <div class='col-sm-12 col-xs-12'>
                    <a class='btn btn-iw-p' href='#'>Let's Start</a>
               </div>
          </div>
     </div>
     <div class='clearfix'></div>
     <div class='donations col-sm-12'>
          <div class='text col-md-6 col-sm-9'>
               <h2>Change your world</h2>
               <p>Investing Well offers you the opportunity to make a positive impact on society. We help you plan for your own future and also secure the future of a charity close to your heart. So what are you saving for?</p>
               <a class='btn btn-iw-p' href='#'>Find out more</a>
          </div>
     </div>

     <div class='robots col-sm-12'>
          <div class='text col-md-6 col-sm-12'>
               <h2>We are not robots.</h2>
               <hr />
               <p>Investing Well is a service provided by <strong>Qualified Financial Experts</strong>. It is designed so that you can make your own choices and therefore save on the upfront costs.</p>

               <p>But if you have a question or you do need advice feel free to get in touch.</p>
               <a class='btn btn-iw-p' href='#'>Find out more</a>
          </div>
          <div class='image col-md-6 col-sm-12 text-center'>
               <img src='<?php bloginfo('stylesheet_directory');?>/images/robot.png' alt="Not Robots">
          </div>
     </div>
     <div class='personalised col-sm-12'>
          <div class='image col-md-3 col-sm-3 hidden-xs'>
               <img src='<?php bloginfo('stylesheet_directory');?>/images/line-chart-animation.gif' alt="Animation">
          </div>
          <div class='text col-md-8 col-sm-9'>
               <h2>Personalised for you</h2>
               <div class='image hidden-md hidden-lg hidden-sm col-xs-6'>
                    <img src='<?php bloginfo('stylesheet_directory');?>/images/line-chart-animation.gif' alt="Animation">
               </div>
               <div class='clearfix'></div>
               <p>Investing Well helps individuals and families to meet thier own goals. We are an online service to help keep costs really low but you can rest assured expert investment specialists look after your money. Our dedicated support team are on hand if you have a question.</p>
               <a class='btn btn-iw-p' href='#'>Find out more</a>
          </div>
     </div>
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
                                   Average Annual Charge
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

     <!-- Body ends and footer begins -->

<?php get_footer(); ?>
