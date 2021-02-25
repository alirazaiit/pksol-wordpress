<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<?php if ( have_comments() ) : ?>
                
        <div class="media-holder mt-5">
                <h3 class="title mb-3"><?php comments_number( esc_html__('0 Comment', 'loptus'), esc_html__('1 Comment', 'loptus'), esc_html__('% Comments', 'loptus') ); ?></h3>
              <ul class="blog-comment">
          <?php wp_list_comments('callback=loptus_theme_comment'); ?>
          </ul>
          <?php
                    // Are there comments to navigate through?
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                ?>
            <div class="text-center">
              <ul class="pagination">
                <li>
                  <?php //Create pagination links for the comments on the current post, with single arrow heads for previous/next
                  paginate_comments_links( 
                  array(
                  'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left"></i>', 'loptus' ),ENT_QUOTES),
                  'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right"></i>', 'loptus' ),ENT_QUOTES),
                  ));  ?>
                </li> 
              </ul>
            </div>
<?php endif; // Check for comment navigation ?>
<?php if ( ! comments_open() && get_comments_number() ) : ?>
                    <p class="no-comments"><?php echo esc_html__( 'Comments are closed.' , 'loptus' ); ?></p>
                <?php endif; ?> 
        </div><!-- End Comments -->
                <?php endif; ?> 

<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'comment-form',        
                'class_form' => 'default-form controls',                         
                'title_reply'=> esc_html__( 'Leave a Comment', 'loptus' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <input type="text" class="form-control" placeholder="'. esc_attr__('Name', 'loptus').'" required="required">
                                    </div>
                                  </div>',
                    'email' => '<div class="col-md-6">
                                  <div class="form-group">
                                    <input type="email" class="form-control" placeholder="'.esc_attr__('Email', 'loptus').'" required="required" >
                                  </div>
                                </div>
                            </div>'  ,                                                                                 
                ) ),   
                'comment_field' => '<div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <textarea name="comment"'.$aria_req.' class="form-control h-100" placeholder="'.esc_attr__('Comment', 'loptus').'" rows="4" required="required"></textarea>
                                      </div>
                                    </div>
                                    </div>',                    
                 'label_submit' => ''.esc_attr__('Post Comment', 'loptus').'',
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>
    <?php if ( comments_open() ) : ?>
    <div class="post-comments mt-5 pos-r grey-bg px-5 py-5 xs-px-2 xs-py-2">
    <?php comment_form($comment_args); ?>
    </div>
                        <?php endif; ?> 