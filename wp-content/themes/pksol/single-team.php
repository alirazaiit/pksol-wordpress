<?php
/**
 * The Template for displaying all single posts
 */
 $loptus_redux_demo = get_option('redux_demo');
get_header(''); ?>
<?php 
    while (have_posts()): the_post();
?>
<?php $team_position = get_post_meta(get_the_ID(),'_cmb_team_position', true); ?>
<?php $team_facebook = get_post_meta(get_the_ID(),'_cmb_team_facebook', true); ?>
<?php $team_twitter = get_post_meta(get_the_ID(),'_cmb_team_twitter', true); ?>
<?php $team_google = get_post_meta(get_the_ID(),'_cmb_team_google', true); ?>
<?php $team_linkedin = get_post_meta(get_the_ID(),'_cmb_team_linkedin', true); ?>
<?php if(isset($loptus_redux_demo['team_image']['url']) && $loptus_redux_demo['team_image']['url'] != ''){?>
<section class="page-title o-hidden text-center grey-bg bg-contain animatedBackground" data-bg-img="<?php echo esc_url($loptus_redux_demo['team_image']['url']);?>">
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

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--team details start-->

<section class="bg-contain" data-bg-img="<?php echo get_template_directory_uri();?>/images/pattern/02.png">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="white-bg box-shadow">
      <div class="row align-items-center">
      <div class="col-lg-5 col-md-12">
      <?php if ( has_post_thumbnail() ) { ?>
        <div class="team-single">
          <div class="team-images">
            <img class="img-center w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="<?php echo esc_attr__( 'Img', 'loptus' )?>">
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="col-lg-6 mr-auto col-md-12">
        <div class="team-description md-px-3 md-py-3">   
          <h6 class="text-theme"><?php echo esc_attr($team_position); ?></h6>        
          <h2 class="title z-index-1 mb-2"><?php the_title(); ?></h2>                    
          <?php the_content(); ?>
          <?php wp_link_pages(); ?>

          <div class="social-icons social-hover mt-4">
            <ul class="list-inline mb-0">
            <?php if($team_facebook){ ?>
              <li class="social-facebook"><a href="<?php echo esc_url($team_facebook); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
              </li>
              <?php } ?>
              <?php if($team_twitter){ ?>
              <li class="social-twitter"><a href="<?php echo esc_url($team_twitter); ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
              </li>
              <?php } ?>
              <?php if($team_google){ ?>
              <li class="social-gplus"><a href="<?php echo esc_url($team_google); ?>"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
              </li>
              <?php } ?>
              <?php if($team_linkedin){ ?>
              <li class="social-linkedin"><a href="<?php echo esc_url($team_linkedin); ?>"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
              </li>
              <?php } ?>
            </ul>
          </div>         
        </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
</section>

<!--team details end-->

<?php endwhile; ?>

<!--team start-->

<section class="bg-contain" data-bg-img="<?php echo get_template_directory_uri();?>/images/pattern/02.png">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php if(isset($loptus_redux_demo['team_title'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($loptus_redux_demo['team_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Creative Team', 'loptus' );
                                    }
                                    ?></h6>
          <h2 class="title"><?php if(isset($loptus_redux_demo['team_subtitle'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($loptus_redux_demo['team_subtitle']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Related Our Expert', 'loptus' );
                                    }
                                    ?></h2> 
        </div>
      </div>
    </div>
    <div class="row">
    <?php $args = array(    
                            'paged' => $paged,
                            'post_type' => 'team',
                            'posts_per_page' => 3,
                            );
                        $wp_query = new WP_Query($args);
                        while (have_posts()): the_post(); 
                    ?>
<?php $team_position = get_post_meta(get_the_ID(),'_cmb_team_position', true); ?>
<?php $team_facebook = get_post_meta(get_the_ID(),'_cmb_team_facebook', true); ?>
<?php $team_twitter = get_post_meta(get_the_ID(),'_cmb_team_twitter', true); ?>
<?php $team_google = get_post_meta(get_the_ID(),'_cmb_team_google', true); ?>
<?php $team_linkedin = get_post_meta(get_the_ID(),'_cmb_team_linkedin', true); ?>
      <div class="col-lg-4 col-md-12">
        <div class="team-member">
          <div class="team-images">
            <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="<?php echo esc_attr__( 'Img', 'loptus' )?>">
          </div>
          <div class="team-description"> <span><?php echo esc_attr($team_position); ?></span>
            <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5> 
            <div class="team-social-icon">
              <ul>
              <?php if($team_facebook){ ?>
              <li><a href="<?php echo esc_url($team_facebook); ?>"><i class="fab fa-facebook-f"></i></a>
              </li>
              <?php } ?>
              <?php if($team_twitter){ ?>
              <li><a href="<?php echo esc_url($team_twitter); ?>"><i class="fab fa-twitter"></i></a>
              </li>
              <?php } ?>
              <?php if($team_google){ ?>
              <li><a href="<?php echo esc_url($team_google); ?>"><i class="fab fa-google-plus-g"></i></a>
              </li>
              <?php } ?>
              <?php if($team_linkedin){ ?>
              <li><a href="<?php echo esc_url($team_linkedin); ?>"><i class="fab fa-linkedin-in"></i></a>
              </li>
              <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>  
    </div>
  </div>
</section>

<!--team end-->


</div>
   <?php
get_footer();
?>