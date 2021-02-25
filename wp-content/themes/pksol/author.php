<?php
 $loptus_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php if(isset($loptus_redux_demo['blog_image']['url']) && $loptus_redux_demo['blog_image']['url'] != ''){?>
<section class="page-title o-hidden text-center grey-bg bg-contain animatedBackground" data-bg-img="<?php echo esc_url($loptus_redux_demo['blog_image']['url']);?>">
<?php }else{ ?>
<section class="page-title o-hidden text-center grey-bg bg-contain animatedBackground" data-bg-img="<?php echo get_template_directory_uri();?>/images/pattern/05.png">
<?php } ?>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12">
        <h1 class="title"><?php
                    /*
                     * Queue the first post, that way we know what author
                     * we're dealing with (if that is the case).
                     *
                     * We reset this later so we can run the loop properly
                     * with a call to rewind_posts().
                     */
                    the_post();

                    printf( esc_html__( 'All posts by %s', 'loptus' ), get_the_author() );
                ?></h1>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'loptus' )?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php if(isset($loptus_redux_demo['blog_title'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($loptus_redux_demo['blog_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Our Blog', 'loptus' );
                                    }
                                    ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="page-title-pattern"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/bg/06.png" alt="<?php echo esc_attr__( 'Img', 'loptus' )?>"></div>
</section>


<div class="page-content">

<!--blog start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
      <div class="post-list-content">
      <?php 
            while (have_posts()): the_post(); 
                    ?>
        <div class="post mb-80">
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
            <div class="post-title">
              <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
            </div>
            <p><?php if(isset($loptus_redux_demo['blog_excerpt'])){?>
                                <?php echo esc_attr(loptus_excerpt($loptus_redux_demo['blog_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(loptus_excerpt(50)); 
                                }
                                ?></p>
            <a href="<?php the_permalink();?>" class="btn btn-theme btn-radius"><?php if(isset($loptus_redux_demo['read_more'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($loptus_redux_demo['read_more']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'loptus' );
                                    }
                                    ?></a>
          </div>
        </div>
        <?php endwhile; ?>  
        </div>
        <nav aria-label="Page navigation">
          <?php loptus_pagination();?>
        </nav>
      </div>
      <div class="col-lg-4 col-md-12 sidebar md-mt-5">
        <?php get_sidebar();?>
      </div>
    </div>
  </div>
</section>

<!--blog end-->

</div>
    <?php
get_footer();
?>