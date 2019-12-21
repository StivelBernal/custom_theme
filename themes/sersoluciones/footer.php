    
    </main>
    <footer class="site-footer section bg-dark text-contrast  top-left">
        <div class="container py-3">
            <div class="row gap-y text-center text-md-left">
                <div class="col-md-4 mr-auto">
                    <?php 
                        if( is_active_sidebar( 'ser_footer_1' ) ){
                            dynamic_sidebar( 'ser_footer_1' );
                        }
                    ?>
                </div>
                <div class="col-md-2">
                    <?php 
                        if( is_active_sidebar( 'ser_footer_2' ) ){
                            dynamic_sidebar( 'ser_footer_2' );
                        }
                    ?>
                    
                </div>
                <div class="col-md-2">
                    <?php 
                        if( is_active_sidebar( 'ser_footer_3' ) ){
                            dynamic_sidebar( 'ser_footer_3' );
                        }
                    ?>
                    
                </div>
                <div class="col-md-2">  
                    <?php 
                        if( is_active_sidebar( 'ser_footer_4' ) ){
                            dynamic_sidebar( 'ser_footer_4' );
                        }
                    ?>
                </div>
                <div class="col-md-2">
                    <h6 class="py-2 small"><?php __('Siguenos', 'ser'); ?></h6>
                    <nav class="nav justify-content-around">
                        <?php if(get_theme_mod( 'ser_facebook_handle' )){
                        echo'
                         
                        <a href="'. get_theme_mod( 'ser_facebook_handle' ) .'"  target="_blank" class="btn btn-circle btn-sm brand-facebook"><i class="fab fa-facebook"></i></a> 
                        ';
                        
                        }
                        
                        if(get_theme_mod( 'ser_twitter_handle' )){
                            
                        echo'

                        <a href="'.get_theme_mod( 'ser_twitter_handle' ).'"  target="_blank" class="btn btn-circle btn-sm brand-twitter"><i class="fab fa-twitter"></i></a>
                        
                        ';

                        }

                        if(get_theme_mod( 'ser_instagram_handle' )){
                        echo'
                        
                        <a href="'. get_theme_mod( 'ser_instagram_handle' ) .'"  target="_blank" class="btn btn-circle btn-sm brand-instagram"><i class="fab fa-instagram"></i></a>
                        
                        ';
                        }
                        ?>

                        
                        
                    </nav>
                </div> 
            </div>
            <hr class="mt-5 op-5">
            <div class="row small">
                <div class="col-md-4">
                    <p class="mt-2 mb-0 text-center text-md-left">© 2019 <?php if( get_theme_mod( 'ser_company' ) )  { echo '<a href="'.get_theme_mod( 'ser_company_link' ).'" target="_blank">'.get_theme_mod( 'ser_company' ).'</a>.';} ?>
                        All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>

</html>
