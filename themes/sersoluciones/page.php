<?php get_header(); ?>
<?php get_template_part('template_parts/headers/header3') ?>
      
<div class="container border-bottom pb-3 mb-3" id="<?php the_ID(); ?>">

    <section class="section powered-design" id="product">
      
        <div class="shapes-container">
            <div class="shape shape-circle shape-circle-1">
                <div data-aos="fade-up-left" data-aos-duration="1500"></div>
            </div>
            <div class="shape shape-circle shape-circle-2">
                <div data-aos="fade-up-left" data-aos-duration="1200" data-aos-delay="500"></div>
            </div>
            <div class="shape shape-ring animation--rotating-diagonal">
                <div></div>
            </div>
            <div class="shape shape-triangle shape-animated">
                <div class="animation--rotating"></div>
            </div>
            <div class="shape pattern-dots-1"></div>
        </div>

        <?php

        while( have_posts() ){
            the_post();

            global $post;
            $author_ID          =   $post->post_author;
            $author_URL         =   get_author_posts_url( $author_ID );

        ?>

        <div class="container">
        
            <div class="row align-items-center">
                <!-- Single Page
                ============================================= -->
                
                <div class="s-100">
                    <div class="section-content">
                    <?php 
                            
                            the_content(); 

                            $defaults = array(
                                'before'           => '<p class="text-center">' . __( 'Páginas:', 'ser' ),
                                'after'            => '</p>',
                            );

                            wp_link_pages( $defaults );
                            
                            ?>
                            <!-- Post Single - Content End -->
                            <div class="clear"></div>
                    </div>
                    
                </div>

                <?php 

                    if(comments_open() || get_comments_number() ){
                        comments_template($file, $separate_comments);
                    }
                ?>
                                    
            </div>
        
        </div>
        
        <?php
            
            }

        ?>  

    </section>

</div>

<?php get_footer(); ?>
