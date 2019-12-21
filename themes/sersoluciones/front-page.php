<!doctype html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
    <?php
    $uri = get_theme_file_uri();
	$custom_css = '
        
		:root{
				--main-primary-color: '.get_theme_mod( 'ser_color_primary', '#16a7d2' ).';
				--main-secondary-color:'.get_theme_mod( 'ser_color_secondary', '#af67b2' ).'; 
				--secondary-hover:'.get_theme_mod( 'ser_color_secondary_hover', '#633764' ).';
				--secondary-borde:'.get_theme_mod( 'ser_color_secondary_borde', '#492149' ).';
				--secondary-rgb-color:'.get_theme_mod( 'ser_color_secondary_rgb', '219, 34, 194' ).';
				--azul-oscuro: '.get_theme_mod( 'ser_color_azul_oscuro', '#6c64c0' ).';
				--anaranjado:'.get_theme_mod( 'ser_color_anaranjado', '#ff8000' ).';
				--amarillo: '.get_theme_mod( 'ser_color_amarillo', '#f8e117' ).';
			}';
		
		echo $custom_css;	
		?>
	</style>
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'stretched no-transition' ); ?>>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-md main-nav navigation fixed-top sidebar-left">
        <div class="container"><button class="navbar-toggler" type="button"><span class="icon-bar"></span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span></button> <?php
						if( has_custom_logo() ){
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$src_logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							
							echo '<a href="'.home_url( '/' ).'"> <img src="'.$src_logo[0].'" class="logo logo-sticky"></a>';
						}else{
							echo'
							<a href="'.home_url( '/' ).'" class="logo ">'.bloginfo( 'name' ).'</a>
							';
						}
					?>
			<div class="collapse show navbar-collapse" id="main-navbar">
				<div class="sidebar-brand">
					<?php
						if( has_custom_logo() ){
							echo '<a href="'.home_url( '/' ).'"> <img src="'.$src_logo[0].'" class="logo logo-sticky"></a>';
						}else{
							echo'
							<a href="'.home_url( '/' ).'" class="logo">'.bloginfo( 'name' ).'</a>
							';
						}
					?>
				</div>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link scrollto" href="#home"><?php _e( 'Inicio', 'ser' ); ?></a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#features"><?php _e( 'Caracteristicas' , 'ser' ); ?></a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#product"><?php _e( 'Producto', 'ser' ); ?></a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#pricing"><?php _e( 'Precios', 'ser' ); ?></a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#trial"><?php _e( 'Comenzar', 'ser' ); ?></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
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
                    <div class="col-md-6">
                      <span class="rounded-pill shadow-box bg-contrast text-dark bold py-2 px-4">
                        <i class="far fa-lightbulb text-primary mr-2"></i>
                         <span class="text-primary">A product</span>
                         Ser soluciones
                       </span>
                        <h1 class="display-4 display-md-2 mt-3"><span class="bold">BACCU</span></h1>
                        <p class="lead bold text-primary">Premium Startup & <span class="head-line-2">App Landing
                                Page</span></p>
                        <p class="lead">Besides its beautiful design. Laapp is an incredibly rich core framework for you
                            to showcase your App.</p>
                        <nav class="nav my-5"><a href="#!" class="btn btn-rounded btn-alternate mr-2 mr-md-5">Know more
                                <i class="fas fa-long-arrow-alt-right ml-2"></i></a> <a href="#demos"
                                class="btn btn-rounded btn-outline-alternate scrollto">Free trial</a></nav>
                    </div>
                    <div class="col-md-6">
                        <div class="iphone front mx-auto">
                            <div class="screen shadow-box">
                                <div class="swiper-container2 overflow-hidden" data-sw-autoplay="3000" data-sw-pagination="mobile-swiper-pagination2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="<?php  echo $uri; ?>/assets/app/img/screens/app/1.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="<?php  echo $uri; ?>/assets/app/img/screens/app/2.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="<?php  echo $uri; ?>/assets/app/img/screens/app/3.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="<?php  echo $uri; ?>/assets/app/img/screens/app/4.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="<?php  echo $uri; ?>/assets/app/img/screens/app/6.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="<?php  echo $uri; ?>/assets/app/img/screens/app/9.png" alt="">
                                        </div>
                                    </div>
                                    <div class="mobile-swiper-pagination2">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="notch"></div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </header>
      
        <?php if(function_exists( 'ser_section_carrusel_clientes' ) ){   
                    $carrusel = ser_section_carrusel_clientes();
                    echo $carrusel;
        }?>
        
       
        <!-- .Premium Features -->
        <section class="section features" id="features">
            <div class="container">
                <div class="section-heading text-center">
                    <h2 class="heading-line">Premium features</h2>
                    <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, nulla,
                        voluptates. Architecto eum minima necessitatibus quo reiciendis! Aliquam culpa doloremque eaque
                        esse illo, nemo nesciunt nobis quia sapiente tenetur veniam.</p>
                </div>
                <div class="row gap-y text-center text-md-left">
                    <div class="col-md-4 py-4 rounded shadow-hover"><i
                            class="pe pe-7s-diamond pe-3x mb-3 text-primary"></i>
                        <h5 class="bold">Powerful Design</h5>
                        <p class="">Ab ad aliquam assumenda beatae commodi distinctio dolore dolorum earum error et,
                            exercitationem</p>
                    </div>
                    <div class="col-md-4 py-4 rounded shadow-hover"><i
                            class="pe pe-7s-tools pe-3x mb-3 text-primary"></i>
                        <h5 class="bold">Professional Tools</h5>
                        <p class="">Blanditiis cumque, eius error est et exercitationem, explicabo hic natus nobis odit
                            porro quia</p>
                    </div>
                    <div class="col-md-4 py-4 rounded shadow-hover"><i
                            class="pe pe-7s-light pe-3x mb-3 text-primary"></i>
                        <h5 class="bold">Creative Content</h5>
                        <p class="">A animi aperiam cupiditate eum incidunt, magni mollitia nam nemo non officia omnis,
                            quasi quisquam</p>
                    </div>
                </div>
            </div>
        </section><!-- Powered Design Blocks -->
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
            <div class="container">
                <div class="row gap-y align-items-center">
                    <div class="col-md-6">
                        <div class="section-heading">
                            <h2 class="heading-line">Powered with multiple design blocks</h2>
                            <p class="lead text-muted">Unlock the power of Web Design. Laapp comes with multiple
                                reusable code blocks you can use to build awesome web pages.</p>
                        </div><a href="#!" class="btn btn-outline-alternate more-link mt-0">Now is the time</a>
                    </div>
                    <div class="col-md-6">
                        <div class="rounded tilt overflow-hidden shadow-box shadow-hover bg-contrast">
                            <figure><img src="<?php  echo $uri; ?>/assets/app/img/screens/app/pieces/1.png" class="img-responsive" alt=""></figure>
                        </div>
                        <div class="rounded tilt overflow-hidden shadow-box shadow-hover bg-contrast mt-5">
                            <figure><img src="<?php  echo $uri; ?>/assets/app/img/screens/app/pieces/2.png" class="img-responsive" alt=""></figure>
                        </div>
                        <div class="rounded tilt overflow-hidden shadow-box shadow-hover bg-contrast mt-5">
                            <figure><img src="<?php  echo $uri; ?>/assets/app/img/screens/app/pieces/3.png" class="img-responsive" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Features you can't miss -->
        <section class="section features-cant-miss">
            <div class="shapes-container overflow-clear">
                <div class="shape shape-circle shape-circle-1">
                    <div data-aos="fade-up-left"></div>
                </div>
                <div class="shape shape-circle shape-circle-2">
                    <div data-aos="fade-up-right" data-aos-delay="200"></div>
                </div>
                <div class="shape shape-circle shape-circle-3">
                    <div data-aos="fade-up-left" data-aos-delay="400"></div>
                </div>
                <div class="shape shape-circle shape-circle-4">
                    <div data-aos="fade-up-left" data-aos-delay="600"></div>
                </div>
                <div class="shape shape-triangle shape-animated">
                    <div class="animation--rotating"></div>
                </div>
            </div>
            <div class="container">
                <div class="row gap-y">
                    <div class="col-md-6 order-md-last">
                        <div class="section-heading"><i class="fas fa-trophy fa-2x text-danger mb-3"></i>
                            <h2 class="heading-line">Features you can't miss</h2>
                        </div>
                        <ul class="list-unstyled">
                            <li class="media flex-column flex-md-row text-center text-md-left"><i
                                    class="mx-auto mr-md-3 mx-auto mr-md-3 accent pe pe-7s-mail pe-3x"></i>
                                <div class="media-body mt-3 mt-md-0">
                                    <h5 class="bold mt-0 mb-1">Mail Management</h5>
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut
                                        autem eum laudantium quas recusandae repellendus voluptate.</p>
                                </div>
                            </li>
                            <li class="media flex-column flex-md-row text-center text-md-left mt-4"><i
                                    class="mx-auto mr-md-3 mx-auto mr-md-3 accent pe pe-7s-users pe-3x"></i>
                                <div class="media-body mt-3 mt-md-0">
                                    <h5 class="bold mt-0 mb-1">Customers Tracking</h5>
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut
                                        autem eum laudantium quas recusandae repellendus voluptate.</p>
                                </div>
                            </li>
                            <li class="media flex-column flex-md-row text-center text-md-left mt-4"><i
                                    class="mx-auto mr-md-3 mx-auto mr-md-3 accent pe pe-7s-graph1 pe-3x"></i>
                                <div class="media-body mt-3 mt-md-0">
                                    <h5 class="bold mt-0 mb-1">Advanced Reporting</h5>
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut
                                        autem eum laudantium quas recusandae repellendus voluptate.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="bubble bubble-left center-x-md">
                            <figure class="rounded overflow-hidden shadow" data-aos="zoom-in"><img
                                    src="<?php  echo $uri; ?>/assets/app/img/screens/app/pieces/4.png" class="img-responsive" alt=""></figure>
                        </div>
                        <figure class="bubble bubble-right rounded overflow-hidden shadow"><img
                                src="<?php  echo $uri; ?>/assets/app/img/screens/app/pieces/5.png" class="img-responsive" alt="" data-aos="fade-left">
                        </figure>
                        <div class="iphone light">
                            <div class="screen shadow-box"><img src="<?php  echo $uri; ?>/assets/app/img/screens/app/6.png" alt="..."></div>
                            <div class="notch"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Pricing -->
        <section class="section pricing-plans" id="pricing">
            <div class="shapes-container overflow-clear">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div><i class="icon pe pe-7s-cash pe-3x" data-aos="fade-down"></i> <i
                    class="icon fas fa-dollar-sign fa-3x" data-aos="fade-up"></i> <i class="icon pe pe-7s-piggy pe-3x"
                    data-aos="fade-up"></i> <i class="icon pe pe-7s-cart pe-3x" data-aos="fade-left"></i> <i
                    class="icon far fa-credit-card fa-3x" data-aos="fade-down"></i> <i
                    class="icon far fa-money-bill-alt fa-3x" data-aos="fade-up"></i>
            </div>
            <div class="container">
                <div class="section-heading text-center"><span class="rounded-pill shadow-box bold py-2 px-4"><i
                            class="far fa-lightbulb text-primary mr-2"></i> <span class="text-primary">Save more</span>
                        with these awesome plans</span>
                    <h2 class="mt-3 heading-line">Transparent pricing</h2>
                    <p class="lead text-muted">Our plans have everything you need to take your app to the next level.
                        <span class="highlight">No hidden fees.</span></p>
                    <div id="pricing-basis-options" class="btn-group btn-group-toggle mt-5" data-toggle="buttons"><label
                            class="btn btn-secondary active"><input type="radio" name="pricing-basis" value="monthly"
                                checked="checked"> Monthly</label> <label class="btn btn-secondary"><input type="radio"
                                name="pricing-basis" value="yearly"> Yearly</label></div>
                </div>
                <div class="row no-gutters align-items-center pricing-plans-options">
                    <div class="col-lg-4 pricing-plan plan-basic order-md-first">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-alternate bold text-capitalize">basic</h4>
                                <p>For individuals</p>
                                <div class="pricing-details"><span class="pricing-value"><span class="odometer price"
                                            data-monthly="0" data-yearly="0">0</span></span></div><a href="#!"
                                    class="more-link btn btn-outline-alternate mb-3">I want this</a>
                            </div>
                            <hr>
                            <div class="d-none d-md-flex">
                                <ul class="list-group list-group-flush list-group-no-border">
                                    <li class="list-group-item">Lorem ipsum dolor sit amet</li>
                                    <li class="list-group-item">Dicta doloremque</li>
                                    <li class="list-group-item">Consectetur fuga inventore</li>
                                    <li class="list-group-item">Alias animi, assumenda atque</li>
                                    <li class="list-group-item">Accusamus adipisci aspernatur</li>
                                </ul>
                            </div>
                            <div class="d-md-none"><button type="button"
                                    class="more-link btn btn-link d-flex align-items-center mx-auto" data-toggle="modal"
                                    data-target="#basic-plan-modal-basic">View plan details</button>
                                <div class="modal" id="basic-plan-modal-basic">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title bold text-capitalize">basic plan</h5><button
                                                    type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body plan-features">
                                                <ul class="list-group list-group-flush text-center">
                                                    <li class="list-group-item border-top-0">Lorem ipsum dolor sit amet
                                                    </li>
                                                    <li class="list-group-item">Dicta doloremque</li>
                                                    <li class="list-group-item">Consectetur fuga inventore</li>
                                                    <li class="list-group-item">Alias animi, assumenda atque</li>
                                                    <li class="list-group-item">Accusamus adipisci aspernatur</li>
                                                    <li class="list-group-item">Delectus earum iste nobis</li>
                                                    <li class="list-group-item">Accusamus alias amet at</li>
                                                    <li class="list-group-item">Accusamus alias aliquid</li>
                                                    <li class="list-group-item">Animi blanditiis eveniet</li>
                                                    <li class="list-group-item">Ab aliquid amet consequatur</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pricing-plan plan-enterprise order-md-last">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-alternate bold text-capitalize">enterprise</h4>
                                <p>For large companies</p>
                                <div class="pricing-details"><span class="pricing-value"><span class="odometer price"
                                            data-monthly="19.99" data-yearly="14.99">19.99</span></span></div><a
                                    href="#!" class="more-link btn btn-outline-alternate mb-3">I want this</a>
                            </div>
                            <hr>
                            <div class="d-none d-md-flex">
                                <ul class="list-group list-group-flush list-group-no-border">
                                    <li class="list-group-item">Lorem ipsum dolor sit amet</li>
                                    <li class="list-group-item">Dicta doloremque</li>
                                    <li class="list-group-item">Consectetur fuga inventore</li>
                                    <li class="list-group-item">Alias animi, assumenda atque</li>
                                    <li class="list-group-item">Accusamus adipisci aspernatur</li>
                                </ul>
                            </div>
                            <div class="d-md-none"><button type="button"
                                    class="more-link btn btn-link d-flex align-items-center mx-auto" data-toggle="modal"
                                    data-target="#basic-plan-modal-enterprise">View plan details</button>
                                <div class="modal" id="basic-plan-modal-enterprise">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title bold text-capitalize">enterprise plan</h5><button
                                                    type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body plan-features">
                                                <ul class="list-group list-group-flush text-center">
                                                    <li class="list-group-item border-top-0">Lorem ipsum dolor sit amet
                                                    </li>
                                                    <li class="list-group-item">Dicta doloremque</li>
                                                    <li class="list-group-item">Consectetur fuga inventore</li>
                                                    <li class="list-group-item">Alias animi, assumenda atque</li>
                                                    <li class="list-group-item">Accusamus adipisci aspernatur</li>
                                                    <li class="list-group-item">Delectus earum iste nobis</li>
                                                    <li class="list-group-item">Accusamus alias amet at</li>
                                                    <li class="list-group-item">Accusamus alias aliquid</li>
                                                    <li class="list-group-item">Animi blanditiis eveniet</li>
                                                    <li class="list-group-item">Ab aliquid amet consequatur</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pricing-plan plan-enterprise order-md-last">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-alternate bold text-capitalize">enterprise</h4>
                                <p>For large companies</p>
                                <div class="pricing-details"><span class="pricing-value"><span class="odometer price"
                                            data-monthly="19.99" data-yearly="14.99">19.99</span></span></div><a
                                    href="#!" class="more-link btn btn-outline-alternate mb-3">I want this</a>
                            </div>
                            <hr>
                            <div class="d-none d-md-flex">
                                <ul class="list-group list-group-flush list-group-no-border">
                                    <li class="list-group-item">Lorem ipsum dolor sit amet</li>
                                    <li class="list-group-item">Dicta doloremque</li>
                                    <li class="list-group-item">Consectetur fuga inventore</li>
                                    <li class="list-group-item">Alias animi, assumenda atque</li>
                                    <li class="list-group-item">Accusamus adipisci aspernatur</li>
                                </ul>
                            </div>
                            <div class="d-md-none"><button type="button"
                                    class="more-link btn btn-link d-flex align-items-center mx-auto" data-toggle="modal"
                                    data-target="#basic-plan-modal-enterprise">View plan details</button>
                                <div class="modal" id="basic-plan-modal-enterprise">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title bold text-capitalize">enterprise plan</h5><button
                                                    type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body plan-features">
                                                <ul class="list-group list-group-flush text-center">
                                                    <li class="list-group-item border-top-0">Lorem ipsum dolor sit amet
                                                    </li>
                                                    <li class="list-group-item">Dicta doloremque</li>
                                                    <li class="list-group-item">Consectetur fuga inventore</li>
                                                    <li class="list-group-item">Alias animi, assumenda atque</li>
                                                    <li class="list-group-item">Accusamus adipisci aspernatur</li>
                                                    <li class="list-group-item">Delectus earum iste nobis</li>
                                                    <li class="list-group-item">Accusamus alias amet at</li>
                                                    <li class="list-group-item">Accusamus alias aliquid</li>
                                                    <li class="list-group-item">Animi blanditiis eveniet</li>
                                                    <li class="list-group-item">Ab aliquid amet consequatur</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pricing-plan plan-business best-value">
                        <div class="p-5 py-md-6">
                            <div class="text-center">
                                <h4 class="text-primary bold text-capitalize">business</h4>
                                <p>For small business</p>
                                <div class="pricing-details"><span class="pricing-value"><span class="odometer price"
                                            data-monthly="3000" data-yearly="20000">3000</span></span></div><a
                                    href="#!" class="more-link btn btn-alternate mb-3">I want this</a>
                            </div>
                            <hr>
                            <div class="d-none d-md-flex">
                                <ul class="list-group list-group-flush list-group-no-border">
                                    <li class="list-group-item">Lorem ipsum dolor sit amet</li>
                                    <li class="list-group-item">Dicta doloremque</li>
                                    <li class="list-group-item">Consectetur fuga inventore</li>
                                    <li class="list-group-item">Alias animi, assumenda atque</li>
                                    <li class="list-group-item">Accusamus adipisci aspernatur</li>
                                </ul>
                            </div>
                            <div class="d-md-none"><button type="button"
                                    class="more-link btn btn-link d-flex align-items-center mx-auto" data-toggle="modal"
                                    data-target="#basic-plan-modal-business">View plan details</button>
                                <div class="modal" id="basic-plan-modal-business">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title bold text-capitalize">business plan</h5><button
                                                    type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body plan-features">
                                                <ul class="list-group list-group-flush text-center">
                                                    <li class="list-group-item border-top-0">Lorem ipsum dolor sit amet
                                                    </li>
                                                    <li class="list-group-item">Dicta doloremque</li>
                                                    <li class="list-group-item">Consectetur fuga inventore</li>
                                                    <li class="list-group-item">Alias animi, assumenda atque</li>
                                                    <li class="list-group-item">Accusamus adipisci aspernatur</li>
                                                    <li class="list-group-item">Delectus earum iste nobis</li>
                                                    <li class="list-group-item">Accusamus alias amet at</li>
                                                    <li class="list-group-item">Accusamus alias aliquid</li>
                                                    <li class="list-group-item">Animi blanditiis eveniet</li>
                                                    <li class="list-group-item">Ab aliquid amet consequatur</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-0 border-bottom">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="text-center text-md-left">
                            <h4 class="bold accent">Not sure what's better for you?</h4>
                            <p class="mt-0">You can start for free, as long as you fell in love with our App you can
                                decide what plan better suites your needs. <span class="italic dotted">By picking any of
                                    the pay plans you'll get 30 days free trial.</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-right"><a href="#!"
                            class="btn btn-primary btn-lg text-contrast p-4 more-link ml-md-auto">Try it now !</a></div>
                </div>
            </div>
        </section><!-- Integrations -->
        <section class="section integration-bubbles">
            <div class="container overflow-hidden">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bubbles-wrapper">
                            <div class="animations m-0">
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-md"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/apx.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">Autoprefixer</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-xxl"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/bs.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">Bootstrap</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-lg"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/cordova.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">Cordova</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-xl"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/css.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">CSS</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-md"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/fa.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">Fontawesome</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-lg"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/html.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">HTML</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-md"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/js.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">Javascript</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-xl"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/npm.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">Npm</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-lg"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/sass.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">SASS</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-xxl"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/apx.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">Autoprefixer</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-md"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/bs.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">Bootstrap</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-xl"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/cordova.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">Cordova</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-md"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/css.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">CSS</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-xxl"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/fa.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">Fontawesome</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-lg"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/html.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">HTML</span></div>
                                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-xl"><img
                                        src="<?php  echo $uri; ?>/assets/app/img/demo/header/js.svg" alt="" class="img-responsive"> <span
                                        class="badge badge-contrast shadow-box">Javascript</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-heading">
                            <p class="text-alternate text-uppercase bold">Extending core</p>
                            <h2 class="heading-line">Integrations to make it better</h2>
                            <p class="lead text-muted">Ever wonder about the wonder of Laap: We count on hundreds of
                                friends contributing day by day to make Laapp a wonderful tool</p>
                        </div><a href="#!" class="more-link">Explore all integration</a>
                    </div>
                </div>
            </div>
        </section><!-- Why Choose Us -->
        <section class="section why-choose-us">
            <div class="shapes-container">
                <div class="pattern pattern-dots"></div>
            </div>
            <div class="container pb-8 bring-to-front">
                <div class="section-heading text-center">
                    <h2 class="heading-line">Why you should choose Laap?</h2>
                    <p class="text-muted lead mx-auto">Laapp is designed to provide you with the last trends in web
                        design. It'll help you to focus on your product, launch your website faster and reach more
                        customer.</p>
                </div>
                <div class="row gap-y">
                    <div class="col-md-6">
                        <h4 class="bold text-alternate">It all start by choosing the right tools</h4>
                        <p class="text-muted lead mb-5">When you're looking for a template you want it to stand-out.
                            Laapp comes with many customizable components.</p>
                        <ul class="list-unstyled why-icon-list">
                            <li class="list-item">
                                <div class="media align-items-center">
                                    <div class="icon-shape mr-3">
                                        <div class="shape shape-pipes"></div><i
                                            class="icon text-alternate fas fa-plug fa-3x"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="bold">Integrations</h5>
                                        <p class="my-0">Aut debitis deserunt ea explicabo hic id incidunt, minus</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="media align-items-center">
                                    <div class="icon-shape mr-3">
                                        <div class="shape shape-pipes"></div><i
                                            class="icon text-alternate fas fa-heart fa-3x"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="bold">Marketing</h5>
                                        <p class="my-0">Aliquam amet assumenda debitis dicta distinctio eaque enim</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="media align-items-center">
                                    <div class="icon-shape mr-3">
                                        <div class="shape shape-pipes"></div><i
                                            class="icon text-alternate fas fa-headphones fa-3x"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="bold">Support</h5>
                                        <p class="my-0">Consequatur doloremque illum libero nam. Hic, vitae?</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <hr class="my-5">
                        <div class="text-center text-md-left"><a href="#!" class="btn btn-primary text-contrast">Know
                                More</a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="rotated-mockups device-twin">
                            <div class="browser absolute shadow-lg"><img src="<?php  echo $uri; ?>/assets/app/img/screens/tablet/1.png" alt="..."></div>
                            <div class="front iphone light">
                                <div class="screen"><img src="<?php  echo $uri; ?>/assets/app/img/screens/app/1.png" alt="..."></div>
                                <div class="notch"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- FAQs -->
        <section class="section faqs-dd bg-light edge top-left">
            <div class="shapes-container">
                <div class="absolute icon" data-aos="fade-down-left"><i class="fas fa-question"></i></div>
            </div>
            <div class="container">
                <div class="section-heading text-center">
                    <h2 class="heading-line">Frequently Asked Questions</h2>
                    <p class="lead">Want to know more about our services?</p>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-lg-auto">
                        <div data-aos="fade-up">
                            <div class="card shadow-box shadow-hover mb-3">
                                <div class="card-header py-3"><a href="#" class="card-title collapsed"
                                        data-toggle="collapse" data-target="#v1-q1">What does the package include?</a>
                                </div>
                                <div id="v1-q1" class="collapse card-body">When you buy Dashcore, you get all you see in
                                    the demo but the images. We include SASS files for styling, complete JS files with
                                    comments, all HTML variations. Besides we include all mobile PSD mockups.</div>
                            </div>
                        </div>
                        <div data-aos="fade-up">
                            <div class="card shadow-box shadow-hover mb-3">
                                <div class="card-header py-3"><a href="#" class="card-title collapsed"
                                        data-toggle="collapse" data-target="#v1-q2">What is the typical response time
                                        for a support question?</a></div>
                                <div id="v1-q2" class="collapse card-body">Since you report us a support question we try
                                    to make our best to find out what is going on, depending on the case it could take
                                    more or les time, however a standard time could be minutes or hours.</div>
                            </div>
                        </div>
                        <div data-aos="fade-up">
                            <div class="card shadow-box shadow-hover mb-3">
                                <div class="card-header py-3"><a href="#" class="card-title collapsed"
                                        data-toggle="collapse" data-target="#v1-q3">What do I need to know to customize
                                        this template?</a></div>
                                <div id="v1-q3" class="collapse card-body">Our documentation give you all you need to
                                    customize your copy. However you will need some basic web design knowledge (HTML,
                                    Javascript and CSS)</div>
                            </div>
                        </div>
                        <div data-aos="fade-up">
                            <div class="card shadow-box shadow-hover mb-3">
                                <div class="card-header py-3"><a href="#" class="card-title collapsed"
                                        data-toggle="collapse" data-target="#v1-q4">Can I suggest a new feature?</a>
                                </div>
                                <div id="v1-q4" class="collapse card-body">Definitely <span class="bold">Yes</span>, you
                                    can contact us to let us know your needs. If your suggestion represents any value to
                                    both we can include it as a part of the theme or you can request a custom build by
                                    an extra cost. Please note it could take some time in order for the feature to be
                                    implemented.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Start For Free -->
        <section class="section start-free" id="trial">
            <div class="shapes-container"><i class="icon pe pe-7s-hourglass pe-3x"></i> <i
                    class="icon pe pe-7s-magic-wand pe-3x"></i> <i class="icon pe pe-7s-rocket pe-3x"></i> <i
                    class="icon pe pe-7s-plugin pe-3x"></i> <i class="icon pe pe-7s-like pe-3x"></i> <i
                    class="icon pe pe-7s-clock pe-3x"></i> <i class="icon pe pe-7s-smile pe-3x"></i> <i
                    class="icon pe pe-7s-piggy pe-3x"></i> <i class="icon pe pe-7s-shield pe-3x"></i> <i
                    class="icon pe pe-7s-server pe-3x"></i></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="section-heading text-center"><i class="pe pe-7s-unlock fa-3x text-alternate"></i>
                            <h2 class="heading-line bold mt-4">Start your 15 days free trial now!</h2>
                            <p class="lead text-muted">By signing up you will get 15 days free trial. You won't be
                                charged until the trial period ends, <span class="italic">don't let this offer pass in
                                    from of your eyes</span></p>
                        </div>
                    </div>
                </div>
                <div class="nav flex-column flex-md-row align-items-center justify-content-center"><a href="#!"
                        class="btn btn-alternate btn-lg py-3 px-4 bold mr-0 mr-md-3 mb-3 mb-md-0">Sign up</a> <a
                        href="mailto:support@5studios.net" class="btn btn-outline-dark btn-lg py-3 px-4 bold">Contact
                        us</a></div>
            </div>
        </section><!-- Contact Channels -->
        <section class="section">
            <div class="container bring-to-front">
                <div class="row gap-y">
                    <div class="col-md-6">
                        <div class="rounded media bg-contrast shadow-lg p-4">
                            <div class="icon-shape mr-4"><i class="pe pe-7s-cash pe-3x"></i></div>
                            <div class="media-body">
                                <h4 class="text-primary">Contact Sales</h4><a href="mailto:support@5studios.net"
                                    class="more-link d-flex align-items-center mt-0">sales@5studios.net</a>
                                <p class="mt-4">Looking for a custom quote? Need to tell us more about your project?
                                    Want a demonstration? Drop us a line</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rounded media bg-contrast shadow-lg p-4">
                            <div class="icon-shape mr-4"><i class="pe pe-7s-help2 pe-3x"></i></div>
                            <div class="media-body">
                                <h4 class="text-primary">Technical Support</h4><a href="mailto:support@5studios.net"
                                    class="more-link d-flex align-items-center mt-0">support@5studios.net</a>
                                <p class="mt-4">Any question about how to integrate your product?. Don't fret, our geek
                                    team is ready for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="site-footer section bg-dark text-contrast edge top-left">
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
