
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
	
	<style>
	<?php
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
	<?php 
		
		wp_head(); 

		$url_site = get_site_url();
	
	?>

</head>

<body <?php body_class( 'stretched no-transition' ); ?>>
	<!-- Main Navigation -->
	<nav class="navbar navbar-expand-md main-nav navigation fixed-top sidebar-left">
		<div class="container">
			<button class="navbar-toggler" type="button">
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span>
			</button> 
					<?php
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

					<?php 
					
						if( has_nav_menu( 'primary' ) ){
							wp_nav_menu([
								'theme_location'    =>  'primary',
								'container'         =>  false,
								'menu_class'        =>  'nav navbar-nav ml-auto ser-menu-principal',
								'item_class'        =>  'nav-item',
								'depth'             =>  0,
								'fallback_cb'       =>  'Ser_Navwalker::fallback',
								'walker'            =>  new Ser_Navwalker()
							]);
						}
					
					?>
					
				
			</div>
		</div>
	</nav>

	<main>