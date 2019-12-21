<div class="search_form_wrapper">

    <form  id="search" method="get" class="search-form"
        action="<?php echo esc_url(home_url( '/' )); ?>">
        <div class="form__box">
            <input  type="search" 
                class="" name="s"
                value="<?php echo get_search_query(); ?>"
                placeholder="<?php _e( 'Buscar', 'ser' ); ?>"/>
            <span class="input-group-btn">  
                <button type="submit"><i class="fas fa-search"></i></button>
            </span>
        </div>
    </form>

</div>

