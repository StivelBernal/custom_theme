<?php
get_header(); 
get_template_part('template_parts/headers/header', 'search'); ?>
    
<div class="d-flex border-bottom container">

    <section class="s-100 p-1 mt-3"  >
        <div class="row-wrap center-center">
            <div class="search_form_wrapper s-80" >
                <?php get_search_form(); ?>
            </div>
        </div>
        
        <!-- Post Content
        ============================================= -->
        <div class="postcontent nobottommargin clearfix mt-5">

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
    
</div>


<?php get_footer(); ?>