<?php
/**
 * The Template for displaying all single posts
 */
 $loptus_redux_demo = get_option('redux_demo');
get_header(''); ?>
<?php 
    while (have_posts()): the_post();
?>
<?php if(isset($loptus_redux_demo['portfolio_image']['url']) && $loptus_redux_demo['portfolio_image']['url'] != ''){?>
<section class="page-title o-hidden text-center grey-bg bg-contain animatedBackground" data-bg-img="<?php echo esc_url($loptus_redux_demo['portfolio_image']['url']);?>">
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
      <?php if ( has_post_thumbnail() ) { ?>
          <div class="case-images">
              <img class="img-fluid w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="<?php echo esc_attr__( 'Img', 'loptus' )?>">
            </div>
            <?php } ?>
        <div class="row align-items-center mt-5">
          <?php the_content(); ?>
          <?php wp_link_pages(); ?>
        </div>
          
      </div>
    </div>
  </div>
</section>

<!--service details end-->



<!--portfolio slider start-->

<section class="pt-0 pb-17 sm-pb-8">
  <div class="container">
    <div class="row mt-3">
      <div class="col-md-12">
        <div class="section-title">
          <h2 class="title"><?php if(isset($loptus_redux_demo['portfolio_relate_title'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($loptus_redux_demo['portfolio_relate_title']));?>
                                    <?php }else{?>
                                    <?php echo wp_specialchars_decode(esc_html__( 'Related <span>Project</span>', 'loptus' ));
                                    }
                                    ?></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel owl-theme popup-gallery" data-items="3" data-md-items="2" data-sm-items="1" data-margin="30" data-autoplay="true">
        <?php 
                    $custom_taxterms = wp_get_object_terms( $post->ID, 'type', array('fields' => 'ids') );
                    $args = array(
                    'post_type' => 'portfolio',
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'type',
                            'field' => 'id',
                            'terms' => $custom_taxterms
                        )
                    ),
                    'post__not_in' => array ($post->ID),
                    );
                    $related_items = new WP_Query( $args );
                    $i = 0;
                    if ($related_items->have_posts()) :                                         
                    while ( $related_items->have_posts() ) : $related_items->the_post(); $i++;
                    $cates = get_the_terms(get_the_ID(),'type');
                                $cate_name ='';
                                $cate_slug = '';
                                      foreach((array)$cates as $cate){
                            if(count($cates)>0){
                                $cate_name .= $cate->name.'/ ' ;
                                $cate_slug .= $cate->slug .' ';     
                                } 
                                }  
                    ?>
          <div class="item">
            <div class="portfolio-item">
              <img class="img-center w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="<?php echo esc_attr__( 'Img', 'loptus' )?>">
              <div class="portfolio-title"> <span><?php echo esc_attr($cate_name); ?></span>
                <h4><?php the_title(); ?></h4>
              </div>
              <a class="popup-img" href="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"> <i class="flaticon-plus"></i>
              </a> <a class="popup-link" href="<?php the_permalink();?>"><?php if(isset($loptus_redux_demo['readmore2'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($loptus_redux_demo['readmore2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'learn More', 'loptus' );
                                    }
                                    ?></a> 
            </div>
          </div>
          <?php endwhile;
          endif;?>
        </div>
      </div>
    </div>
  </div>
</section>

<!--portfolio slider end-->

</div>
<?php endwhile; ?>
   <?php
get_footer();
?>