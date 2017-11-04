<?php get_header(); ?>
    <h2><?php single_cat_title('', true); ?></h2>

    <div class="row">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <?php if (has_post_thumbnail($post->ID)):
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                    $imageBox = '<a href="' . get_the_permalink() . '" title="' . get_the_title() . '"><div class="general_item_image" style="background-image: url(' . $image[0] . ');"></div></a>';
                else: $imageBox = "";
                endif; ?>

                <div class="4u">
                    <div class="grid-news">
                        <?php echo $imageBox; ?>

                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <h3><?php the_title(); ?></h3></a>

                        <p class="date"><?php the_time('D jS F Y'); ?></p>

                        <div class="general_item_details">
                            <p><?php echo substr(get_the_excerpt(), 0, 165); ?></p>
                        </div>
                    </div>


                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="12u">
            <div class="nav-next alignleft"><?php previous_posts_link('◄ Newer News'); ?></div>
            <div class="nav-previous alignright"><?php next_posts_link('Older News ►'); ?></div>
        </div>
    </div>
<?php get_footer(); ?>
