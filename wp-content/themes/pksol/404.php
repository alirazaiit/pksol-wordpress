<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
 $loptus_redux_demo = get_option('redux_demo');
get_header(''); ?> 
<div class="page-content">

<!--error start-->

<section class="fullscreen-banner p-0 o-hidden text-center white-overlay error-page" data-bg-img="<?php echo get_template_directory_uri();?>/images/bg/06.jpg" data-overlay="9">
  <div class="align-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center text-black">
          <h1><?php echo esc_html__( '404', 'loptus' )?></h1>
          <h5 class="mb-4 text-capitalize mt-3"><?php echo esc_html__( 'Sorry Page Was Not Found!', 'loptus' )?> </h5>
                    <p>
                        <?php echo esc_html__( 'The page you are looking is not available or has been removed. Try going to Home Page by using the button below.', 'loptus' )?>
                    </p>
          <a class="btn btn-theme btn-radius btn-iconic" href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-long-arrow-alt-left"></i> <span><?php echo esc_html__( 'Back to home', 'loptus' )?></span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--error end-->

</div>

  <?php get_footer('404'); ?>