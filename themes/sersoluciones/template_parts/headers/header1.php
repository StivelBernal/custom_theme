<header class="header alter1-header section text-contrast" id="home">
    <div class="shapes-container">
        <div class="shape shape-animated" data-aos="fade-down-left" data-aos-duration="1500"
            data-aos-delay="100"></div>
        <div class="shape shape-animated" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
        </div>
        <div class="shape shape-animated" data-aos="fade-up-right" data-aos-duration="1000"
            data-aos-delay="200"></div>
        <div class="shape shape-animated" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        </div>
        <div class="shape shape-animated" data-aos="fade-down-left" data-aos-duration="1000"
            data-aos-delay="100"></div>
        <div class="shape shape-animated" data-aos="fade-down-left" data-aos-duration="1000"
            data-aos-delay="100"></div>
        <div class="shape shape-animated" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
        </div>
        <div class="shape shape-animated" data-aos="fade-down-right" data-aos-duration="500"
            data-aos-delay="200"></div>
        <div class="shape shape-animated" data-aos="fade-down-right" data-aos-duration="500"
            data-aos-delay="100"></div>
        <div class="shape shape-animated" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500">
        </div>
        <div class="shape shape-animated" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200">
        </div>
        <div class="shape shape-animated" data-aos="fade-down-left" data-aos-duration="500"
            data-aos-delay="100"></div>
        <div class="shape shape-animated" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
        <div class="shape shape-animated" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
        <div class="shape shape-animated" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100">
        </div>
        <div class="shape shape-animated" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-contrast display-4 display-md-3"><span class="bold"><?php single_post_title(); ?></span></h1>
                <?php 
        
        if( function_exists( 'the_subtitle' ) ){
            echo'<p class="lead bold">';  
            the_subtitle();  
            echo '</p>';
        }
        
    ?>
                
            
            </div>
            
        </div>
    </div>
</header>