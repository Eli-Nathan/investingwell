<?php
     get_header();
?>
     <!-- Header Ends (Includes navigation bar) -->
     <div class='blog-post-list col-sm-12'>
       <div class='col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-1- col-sm-offset-1'>
       <h1 class='text-center blog-post-list__title'>
         <span class='lined'>Investing<span class='investingwell-well'>well</span> News
       </h1>
     </div>
       <?php
       $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large');

       if($image[0] != ""):

           echo "<div class='header col-sm-12' style='background-image: url(".$image[0].")'></div>";
           else : ?>
             <div class="header col-sm-12" style='background-image:url(<?php bloginfo('stylesheet_directory');?>/images/blog-head.jpg)'></div>
       <?php endif;
       ?>
     <div class='articles col-sm-12'>
       <div class='col-sm-12'>
       </div>
       <?php
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
              <p><i class='fa fa-clock-o'></i> &nbsp; <?php the_date(); ?> &nbsp; &nbsp; <i class='fa fa-book'></i> Read more</p>
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
   </div>

     <!-- Body ends and footer begins -->

<?php get_footer(); ?>
