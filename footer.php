<?php
     global $phonelink;
     global $phonenumber;
     global $emaillink;
     global $emailaddress;
     global $linkedinlink;
     global $twitterlink;
     global $twittertext;
     global $facebooklink;
     global $facebooktext;
     global $instagramlink;
     global $youtubelink;
?>
<footer class="col-sm-12 footer">
     <nav class="navbar navbar-default">
          <div class="container-fluid">
               <!-- Brand and toggle get grouped for better mobile display -->


               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse">
                    <?php bootstrap_footer(); ?>
                    <ul class='nav navbar-nav navbar-right'>
                         <li>
                              <a href="<?php echo $facebooklink; ?>" target="_blank">
                                   <i class='fa fa-facebook-square'></i>
                              </a>
                         </li>
                         <li>
                              <a href="<?php echo $twitterlink; ?>" target="_blank">
                                   <i class='fa fa-twitter-square'></i>
                              </a>
                         </li>
                         <li>
                              <a href="<?php echo $linkedinlink; ?>" target="_blank">
                                   <i class='fa fa-linkedin-square'></i>
                              </a>
                         </li>
                         <li>
                              <a href="<?php echo $instagramlink; ?>" target="_blank">
                                   <i class='fa fa-instagram'></i>
                              </a>
                         </li>
                         <li>
                              <a href="<?php echo $youtubelink; ?>" target="_blank">
                                   <i class='fa fa-youtube'></i>
                              </a>
                         </li>
                    </ul>
               </div>
               <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
     </nav>
     <div class='col-sm-12 footer-content'>
          <div class='col-sm-6 contact-info'>
               <table>
                    <tr class='link-row' data-href='<?php echo $phonelink; ?>'>
                         <td>
                              <i class='fa fa-phone'></i>
                         </td>
                         <td>
                              <?php echo $phonenumber; ?>
                         </td>
                    </tr>
                    <tr class='link-row' data-href='<?php echo $emaillink; ?>'>
                         <td>
                              <i class='fa fa-envelope'></i>
                         </td>
                         <td>
                              <?php echo $emailaddress; ?>
                         </td>
                    </tr>
                    <tr class='link-row' data-href='<?php echo $twitterlink; ?>'>
                         <td>
                              <i class='fa fa-twitter'></i>
                         </td>
                         <td>
                              <?php echo $twittertext; ?>
                         </td>
                    </tr>
                    <tr class='link-row' data-href='<?php echo $facebooklink; ?>'>
                         <td>
                              <i class='fa fa-facebook'></i>
                         </td>
                         <td>
                              <?php echo $facebooktext; ?>
                         </td>
                    </tr>
               </table>
          </div>
          <div class='col-sm-6 disclaimer'>
               <p>Investing Well is a trading name of Killermont Investments Ltd which is an Appointed Representative of Network Direct Ltd, which is authorised and regulated by the Finacial Conduct Authority 217218.</p>

               <p>All Rights Reserved <?php echo date('Y'); ?></p>

               <p>The value of investments can go down as well as up an you may get back less than you invested.</p>
          </div>
     </div>
     <div class="web-design col-sm-12 text-center">
       <p>Web design by <a href="http://www.elisweb.co.uk" target="_blank">Eli's Web</a></p>
     </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
