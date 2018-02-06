<?php
     get_header();
     while ( have_posts() ) : the_post();
?>
     <!-- Header Ends (Includes navigation bar) -->
     <div class='the-page col-md-offset-3 col-md-6 col-sm-12'>
       <h1 class='text-center the-page__title'>
         <span class='lined'><span class='investingwell-well'><?php the_title(); ?></span>
       </h1>
       <?php
       $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');

       if($image[0] != ""):

           echo "<div class='header col-sm-12' style='background-image: url(".$image[0].")'></div>";
           else : ?>
             <div class="header col-sm-12" style='background-image:url(<?php bloginfo('stylesheet_directory');?>/images/general-finance.jpg)'></div>

       <?php endif; ?>
     <div class='the-page__content col-sm-12'>
       <?php the_content(); ?>
     </div>
   <?php endwhile; ?>

   </div>
 </div>
   </div>
   <?php include("includes/cta.php"); ?>

     <!-- Body ends and footer begins -->

<?php get_footer(); ?>
