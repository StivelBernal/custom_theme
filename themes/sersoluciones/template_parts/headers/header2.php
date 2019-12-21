<!-- Alternative 2 Heading -->
<header class="header alter2-header section" id="home">
	<div class="shapes-container">
		<!-- diagonal shapes -->
		<div class="shape shape-animated" data-aos="fade-down-right" data-aos-duration="1500"
			data-aos-delay="100"></div>
		<div class="shape shape-animated" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
		</div>
		<div class="shape shape-animated" data-aos="fade-up-left" data-aos-duration="500" data-aos-delay="200">
		</div>
		<div class="shape shape-animated" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape shape-animated" data-aos="fade-up-right" data-aos-duration="1000"
			data-aos-delay="200"></div>
		<div class="shape shape-animated" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
		</div>
		<div class="shape shape-animated" data-aos="fade-down-left" data-aos-duration="1000"
			data-aos-delay="100"></div>
		<div class="shape shape-animated" data-aos="fade-down-left" data-aos-duration="1000"
			data-aos-delay="100"></div>
		<div class="shape shape-animated" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
		</div><!-- animated shapes -->
		<div class="animation-shape shape-ring animation--clockwise"></div>
		<div class="animation-shape shape-circle shape-circle-1 animation--anti-clockwise"></div>
		<div class="animation-shape shape-circle shape-circle-2 animation--clockwise"></div>
		<div class="animation-shape shape-heart animation--clockwise">
			<div class="animation--rotating"></div>
		</div>
		<div class="animation-shape shape-triangle animation--rotating-diagonal">
			<div class="animation--rotating"></div>
		</div>
		<div class="animation-shape shape-diamond animation--anti-clockwise">
			<div class="animation--rotating"></div>
		</div><!-- static shapes -->
		<div class="static-shape shape-ring-1"></div>
		<div class="static-shape shape-ring-2"></div>
		<div class="static-shape shape-circle shape-circle-1">
			<div data-aos="fade-down-left"></div>
		</div>
		<div class="static-shape shape-circle shape-circle-2">
			<div data-aos="fade-down-left" data-aos-delay="500"></div>
		</div>
		<div class="static-shape pattern-dots-1"></div>
		<div class="static-shape pattern-dots-2"></div><!-- main shape -->
		<div class="static-shape background-shape-main"></div><!-- ghost shapes -->
		<div class="static-shape ghost-shape ghost-shape-1"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				
				<h1 class="display-4 display-md-4 mt-3"><span class="bold"><?php single_post_title(); ?></span></h1>
				<?php 
		
					if( function_exists( 'the_subtitle' ) ){
						echo'<p class="lead bold text-primary">';  
						the_subtitle();  
						echo '</p>';
					}
					
				?>
			</div>
		</div>
	</div>
</header>