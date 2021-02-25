<?php
/*
 * Template Name: Blog Grid 3
 * Description: A Page Template with a Page Builder design.
 */
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
  <div class="page-title-pattern"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/bg/06.png" alt="<?php echo esc_attr__( 'Img', 'loptus' )?>"></div>
</section>


<div class="page-content">

<!--blog start-->

<section>
  <div class="container">
    <div class="row grid-row-3">
    <?php $args = array(    
            'paged' => $paged,
            'post_type' => 'post',
            );
        $wp_query = new WP_Query($args);
        while (have_posts()): the_post(); 
    ?>
      <div class="col-lg-4 col-md-6 mt-5">
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
            </div>
            <div class="post-title grid-title">
              <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
            </div>
            <p><?php echo esc_attr(loptus_excerpt1(50)); ?></p>
            <a href="<?php the_permalink();?>" class="btn btn-theme btn-radius"><?php if(isset($loptus_redux_demo['read_more'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($loptus_redux_demo['read_more']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'loptus' );
                                    }
                                    ?></a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<!--blog end-->

</div>
    <?php
get_footer();
?>