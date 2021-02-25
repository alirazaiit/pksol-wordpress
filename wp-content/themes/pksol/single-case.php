<?php
/**
 * The Template for displaying all single posts
 */
 $loptus_redux_demo = get_option('redux_demo');
get_header(''); ?>
<?php 
    while (have_posts()): the_post();
?>
<?php if(isset($loptus_redux_demo['case_image']['url']) && $loptus_redux_demo['case_image']['url'] != ''){?>
<section class="page-title o-hidden text-center grey-bg bg-contain animatedBackground" data-bg-img="<?php echo esc_url($loptus_redux_demo['case_image']['url']);?>">
<?php }else{ ?>
<section class="page-title o-hidden text-center grey-bg bg-contain animatedBackground" data-bg-img="<?php echo get_template_directory_uri();?>/images/pattern/05.png">
<?php } ?>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12">
        <h1 class="title"><?php the_title(); ?></h1>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'loptus' )?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="page-title-pattern"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/bg/06.png" alt=""></div>
</section>



<div class="page-content">

<!--service details start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
      </div>
    </div>
  </div>
</section>

<!--service details end-->


</div>
<?php endwhile; ?>
   <?php
get_footer();
?>