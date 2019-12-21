<?php get_header(); ?>
<?php get_template_part( 'template_parts/headers/header', 'archives' ) ?>
   
<div class="d-flex border-bottom container" id="<?php the_ID(); ?>">

    <section class="s-75 p-1"  >

            <!-- Post Content
            ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <!-- Posts
                ============================================= -->
                <div id="posts">

                    <?php

                    if( have_posts() ){
                        while( have_posts() ){
                            the_post();

                            get_template_part( 'template_parts/post/content-excerpt' );
                            
                        }
                    }

                    ?>
                    

                </div><!-- #posts end -->

                <!-- Pagination
                ============================================= -->
                <div class="row mb-3">
                    <div class="col-12">
                        <?php

                            next_posts_link( '&larr; Anterior' );

                            previous_posts_link( 'Próximo &rarr;' );

                        ?>
                        
                    </div>
                </div>
                <!-- .pager end -->

            </div><!-- .postcontent end -->
        
    </section><!-- Content -->
    <aside class="s-25 p-1 mr-4 blog-sidebar  ">
    
        <?php get_sidebar(); ?>
    
    </aside>

</div>

<?php get_footer(); ?>