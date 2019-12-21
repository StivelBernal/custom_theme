<?php get_header(); 
get_template_part('template_parts/headers/header2') ?>
<!-- Content
============================================= -->
    
<div class="d-flex border-bottom pb-3 mb-3" id="<?php the_ID(); ?>">

    <section class="s-75 p-1">

        <?php

        if( have_posts() ){
            while( have_posts() ){
                the_post();

                global $post;
                $author_ID          =   $post->post_author;
                $author_URL         =   get_author_posts_url( $author_ID );

                ?>
                <div class="single-post nobottommargin">

                    <!-- Single Post
                    ============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Title
                        ============================================= -->
            
                        <div class="entry-content notopmargin">
                            <nav class="nav my-5">
                                <a href="<?php echo $post->guid; ?>" target="_blank" class="btn btn-rounded btn-alternate mr-2 mr-md-5"><?php _e('Descarga Directa', 'ser' ); ?>
                                <i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                            
                            </nav>
                            
                            <?php 
                            
                            if($post->post_mime_type == 'image/png' || $post->post_mime_type == 'image/jpeg' || $post->post_mime_type == 'image/gif' ){
                                echo '<img src="'.$post->guid.'" class="img-responsive">' ;
                            }else if($post->post_mime_type == 'video/webm' || $post->post_mime_type == 'video/mp4' || $post->post_mime_type == 'video/ogg'){
                                echo '<video controls src="'.$post->guid.'"></video>';
                            }else if($post->post_mime_type == 'audio/webm' || $post->post_mime_type == 'audio/mp3' || $post->post_mime_type == 'audio/ogg'){
                                echo '<audio controls src="'.$post->guid.'"></audio>';
                            }

                    
                            the_content(); 
                            
                            ?>
                            <!-- Post Single - Content End -->

                            <div class="clear"></div>

                        </div>
                    </div><!-- .entry end -->

                    <div class="line"></div>

                    
                </div>
                <?php
            }
        }

        ?>

    </section><!-- Content -->
    
    <aside class="blog-sidebar s-25 ml-5 p-1 mr-1 ">
    
    <?php get_sidebar(); ?>

    </aside>

</div>
   
<?php get_footer(); ?>