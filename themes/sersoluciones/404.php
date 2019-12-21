<?php get_header(); ?>
<?php get_template_part('template_parts/headers/header', '404');
$uri = get_theme_file_uri();
?>

<!-- Content
============================================= -->
   
<!-- Start Error Area -->
    <section class="page_error section-padding--lg bg--white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error__inner text-center">
                        <div class="error__logo">
                            <a href="#"><img src="<?php echo $uri; ?>/assets/app/img/templates/404/404.png" alt="error images"></a>
                        </div>
                        <div class="error__content">
                            <h2><?php __('Página no encontrada', 'ser') ?></h2>
                            <p><?php __( '¡Parece que no has encontrado lo que buscas! Intenta buscar aquí', 'ser' ); ?></p>
                            <div class="row-wrap center-center">
                                <div class="search_form_wrapper s-40" >
                                    <?php get_search_form(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Error Area -->
   

<?php get_footer(); ?>