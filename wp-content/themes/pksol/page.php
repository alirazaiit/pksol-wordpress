<?php
/**
 * The Template for displaying all single posts
 */
 $loptus_redux_demo = get_option('redux_demo');
get_header(''); ?>
<?php 
    while (have_posts()): the_post();
?>
<?php $page_image = get_post_meta(get_the_ID(),'_cmb_page_image', true); ?>
<?php if($page_image !=''){?>
<section class="page-title o-hidden text-center grey-bg bg-contain animatedBackground" data-bg-img="<?php echo esc_url($page_image);?>">
<?php }else{ ?>
<section class="page-title o-hidden text-center grey-bg bg-contain animatedBackground" data-bg-img="<?php echo get_template_directory_uri();?>/images/pattern/05.png">
<?php } ?>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12">
        <h1 class="title"><?php the_title();?></h1>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'loptus' )?></a>
            </li>
            <li class="breadcrumb-item"><a href="#"><?php the_title();?></a>
                                    </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="page-title-pattern"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/bg/06.png" alt="<?php echo esc_attr__( 'Img', 'loptus' )?>"></div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--blog start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="left-side">
          <div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php if ( has_post_thumbnail() ) { ?>
            <div class="post-image">
              <img class="img-fluid h-100 w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="<?php echo esc_attr__( 'Img', 'loptus' )?>">
            </div>
            <?php } ?>
            <div class="post-desc">
              <?php the_content(); ?>
                <?php wp_link_pages( array(
                  'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'loptus' ),
                  'after'       => '</div>',
                  'link_before' => '<span class="page-number">',
                  'link_after'  => '</span>',
              ) ); ?>
            </div>
          </div>
          <?php           
                if ( comments_open() || get_comments_number() ) {
                  comments_template();
                }
                ?> 
        </div>
      </div>
      <div class="col-lg-4 col-md-12 sidebar md-mt-5">
        <?php get_sidebar();?>
      </div>
    </div>
  </div>
</section>

<!--blog end-->

</div>
<?php endwhile; ?>
   <?php
get_footer();
?>