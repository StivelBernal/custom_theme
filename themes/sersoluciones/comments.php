<?php

    if( post_password_required() ){
        return;
    };
?>

<div id="ser-comments">
    
<?php
    if( have_comments() ){
?>




    <div class="comments_area">
        <h3 class="comment__title"><?php comments_number(); ?></h3>
        <ul class="comment__list">
        
        <?php

        foreach( $comments as $comment ){
        
        ?>

            <li>
                <div class="wn__comment">
                    <div class="thumb">
                        <?php echo get_avatar( $comment, 50, '', '', [ 'class' => 'avatar avatar-60 photo avatar-default' ] ); ?>
                       
                    </div>
                    <div class="content">
                        <div class="comnt__author d-block d-sm-flex">
                            <span> <a href="<?php echo comment_author_url(); ?>" target="_blank"><?php comment_author(); ?></a> </span>
                            <span><?php $de = __('\d\e', 'ser'); _e('el', 'ser');  comment_date(' j '.$de.' F, Y / g:i a')?></span>
                            
                        </div>
                        <p> <?php  comment_text(); ?></p>
                    </div>
                </div>
            </li>

            <?php
                        /**queda pendiente hacer los comment reply  */
                }

                the_comments_pagination(); 

            ?>
            
        </ul>
    </div>

    
    <?php  

    }
    ?>
    
    <div class="comment_respond">

        <?php 
        
            comment_form([
                'comment_field'     =>   '<div class="input__box">
                                            <textarea name="comment" placeholder="'.__('Escribe tu comentario', 'ser').'"></textarea>
                                          </div>',
                'fields'            =>     [
                                                'author'   =>   '<div class="input__box name one--third">
                                                                    <input name="author" type="text" placeholder="'.__('Nombre','ser').'">
                                                                </div>',
                                                'email'    =>   '<div class="input__box email one--third">
                                                                    <input name="email" type="email" placeholder="'.__('Correo electronico', 'ser').'">
                                                                </div>',
                                                'url'      =>   '<div class="input__box website one--third">
                                                                    <input name="url" type="text" placeholder="'.__('Sitio web', 'ser').'">
                                                                </div>',
                                                'cookies'   =>  '<div style="margin-top:80px;" class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">Guardar mi nombre, correo electrónico y sitio web en este navegador para la próxima vez que haga un comentario.</label></div>'
                                            ],
                'class_submit'      =>      'submite__btn',
                'label_submit'      =>      __( 'Enviar Comentario', 'ser' ),
                'title_reply'       =>      __( '<h3 class="reply_title">Envia un comentario</h3>', 'ser')

                ])        

        ?>

    </div>

</div>
