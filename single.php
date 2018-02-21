<?php
     get_header();
?>
<script>
  fbq('track', 'ViewContent');
</script>

<?php
     if (have_posts()) : while (have_posts()) : the_post(); ?>
     <div class='article col-md-offset-3 col-md-6 col-sm-12' id="post-<?php the_ID(); ?>">
       <h1 class='text-center the-page__title'>
         <span class='lined'><span class='investingwell-well'><?php the_title(); ?></span>
       </h1>
       <p class='article__info text-center'> <?php the_time('jS \of F, Y') ?> | Posted in <?php the_category(', ') ?> </p>
     <?php
     $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');

     if($image[0] != ""):

         echo "<div class='article__header col-sm-12' style='background-image: url(".$image[0].")'></div>";
         else : ?>
           <div class="article__header col-sm-12" style='background-image:url(<?php bloginfo('stylesheet_directory');?>/images/money-placeholder.jpg)'></div>
     <?php endif;
     ?>

    <div class="article__content col-sm-12">
      <?php the_content(); ?>
        <?php
        if(get_the_tag_list()) {
          echo '<div class="article__tags">';
          the_tags( '<i class="fa fa-tags"></i> &nbsp;', ', ', '&nbsp;' );
          echo '</div>';
        }
        ?>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
<div class='article__related col-sm-12'>
  <div class='col-sm-12'>
    <h4>You might also like</h4>
  </div>
    <?php $wpquery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>2, 'post__not_in' => array( $post->ID ))); ?>

    <?php if ( $wpquery->have_posts() ) : ?>

        <!-- the loop -->
        <?php while ( $wpquery->have_posts() ) : $wpquery->the_post(); ?>
          <div class='articleBox col-sm-6'>
            <a href='<?php the_permalink(); ?>' class='articleCard col-sm-12'>
              <?php if (has_post_thumbnail($post->ID)):
                  $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                  $image_alt = get_post_meta( get_post_thumbnail_id($post->ID) , '_wp_attachment_image_alt', true);
                  echo '<div class="topImage col-sm-12" style="background-image: url(' . $image[0] . ') "></div>';
              endif; ?>
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
</div>
<?php include("includes/cta.php"); ?>

<?php get_footer(); ?>
