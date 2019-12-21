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
                <h1 class="text-contrast display-4 display-md-4"><span class="bold"><?php the_archive_title(); ?></span></h1>
                <p class="lead bold"><?php the_archive_description(); ?></p>   
                <?php
                        if( is_year() ){
                            echo '<p class="lead">'.__('Estás viendo un archivo anual.', 'ser').'<p>';
                        } else if( is_month() ){
                            echo '<p class="lead">'.__('Estás viendo un archivo mensual.', 'ser').'<p>';
                        }else if( is_day() ){
                            echo '<p class="lead">'.__('Estás viendo un archivo de un dia.', 'ser').'<p>';
                        } 
                    ?>
            </div>
        </div>
    </div>
</header>