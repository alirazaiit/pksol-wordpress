<?php $loptus_redux_demo = get_option('redux_demo');?> 
<footer class="footer white-bg pos-r o-hidden bg-contain" data-bg-img="<?php echo get_template_directory_uri();?>/images/pattern/01.png">
  <div class="round-p-animation"></div>
  <?php if(isset($loptus_redux_demo['footer_widger']) && $loptus_redux_demo['footer_widger']!= ''){?>
  <div class="primary-footer">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-lg-4">
          <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-area-1' ); ?>
                  <?php endif; ?>
        </div>
        <div class="col-lg-8 py-8 md-px-5">
          <div class="row">
            <div class="col-lg-6 col-md-6 footer-list">
              <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-area-2' ); ?>
                  <?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-6 sm-mt-5">
              <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-area-3' ); ?>
                  <?php endif; ?>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-10 col-md-12 mr-auto">
              <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-area-4' ); ?>
                  <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="secondary-footer">
    <div class="container">
      <div class="copyright">
        <div class="row align-items-center text-center">
          <div class="col-md-12"> <span><?php if(isset($loptus_redux_demo['footer_text'])){?>
                        <?php echo wp_specialchars_decode(esc_attr($loptus_redux_demo['footer_text'])); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'Copyright 2018 Loptus WP theme. All rights reserved.', 'loptus' );
                        }
                        ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--footer end-->


</div>

<!-- page wrapper end -->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-upload"></i></a></div>

<!--back-to-top end-->

 
<!-- inject js start -->

<?php wp_footer(); ?>

<!-- inject js end -->

</body>

</html>