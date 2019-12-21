<?php 
/*  Template Name: Without header
*/
get_header(); 
?>

<div id="<?php the_ID(); ?>">

    <section class="s-100">
        <?php
        
            while ( have_posts() ) : the_post();

            $authorId   =   $post->post_author;
            $authorUrl  =   get_author_posts_url( $authorId );

        ?>
            <div class="blog-details content">
                <article class="blog-post-details">
                   
                    <div class="post_wrapper">

                        <div class="post_content">

                            <?php
                            
                                the_content();
                                
                                $defaults = array(
                                    'before'           => '<p class="text-center">' . __( 'Páginas:', 'ser' ),
                                    'after'            => '</p>',
                                );

                                wp_link_pages( $defaults );
                            
                            ?>

                        </div>
                        
                    </div>
                </article>
                
            </div>
        <?php endwhile; ?>
        
    </section><!-- Content -->
    

</div>

<?php get_footer(); ?>