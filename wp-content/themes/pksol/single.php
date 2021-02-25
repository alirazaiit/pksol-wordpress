<?php
/**
 * The Template for displaying all single posts
 */
 $loptus_redux_demo = get_option('redux_demo');
get_header(''); ?>
<?php 
    while (have_posts()): the_post();
?>
<?php if(isset($loptus_redux_demo['blog_image']['url']) && $loptus_redux_demo['blog_image']['url'] != ''){?>
<section class="page-title o-hidden text-center grey-bg bg-contain animatedBackground" data-bg-img="<?php echo esc_url($loptus_redux_demo['blog_image']['url']);?>">
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
            <li class="breadcrumb-item"><a href="#"><?php if(isset($loptus_redux_demo['blog_title'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($loptus_redux_demo['blog_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Our Blog', 'loptus' );
                                    }
                                    ?></a>
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
          <div class="post">
          <?php if ( has_post_thumbnail() ) { ?>
            <div class="post-image">
              <img class="img-fluid h-100 w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="<?php echo esc_attr__( 'Img', 'loptus' )?>">
            </div>
            <?php } ?>
            <div class="post-desc">
              <div class="post-date">
                <span class="blog-author"><?php the_author_posts_link(); ?></span>
                <span>- <?php the_time(get_option( 'date_format' ));?></span>
                <?php if ( is_sticky() )
                    echo '<span class="featured-post">' . esc_html__( 'Sticky', 'loptus' ) . '</span>';
                    ?>
                </div>
              <?php the_content(); ?>
              <?php wp_link_pages(); ?>
            </div>
          </div>
          <?php comments_template();?> 
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