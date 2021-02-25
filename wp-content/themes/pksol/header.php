<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php $loptus_redux_demo = get_option('redux_demo'); ?>
<head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        ?>
    <link rel="shortcut icon" href="<?php if(isset($loptus_redux_demo['favicon']['url'])){?><?php echo esc_url($loptus_redux_demo['favicon']['url']); ?><?php }?>">
    <?php }?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader">
    <div class="loader-text"><?php echo esc_html__( 'Loading', 'loptus' )?></div>
    <div class="loader-dots"> <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>

<!-- preloader end -->


<!--header start-->
<?php if(isset($loptus_redux_demo['header_type']) && $loptus_redux_demo['header_type']== 'type2'){?>
<header id="site-header" class="header header-2">
<?php }else{ ?>
<header id="site-header" class="header">
<?php } ?>
  <div id="header-wrap">
  <?php if(isset($loptus_redux_demo['header_full']) && $loptus_redux_demo['header_full']!= ''){?>
  <div class="container-fluid">
  <?php }else{ ?>
    <div class="container">
    <?php } ?>
      <div class="row">
        <div class="col-lg-12">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="<?php echo esc_url(home_url('/')); ?>">
            <?php if(isset($loptus_redux_demo['logo']['url']) && $loptus_redux_demo['logo']['url'] != ''){?>
              <img id="logo-img" class="img-center" src="<?php echo esc_url($loptus_redux_demo['logo']['url']); ?>" alt="<?php echo esc_attr__( 'Img', 'loptus' )?>">
              <?php }else{ ?>
              <img id="logo-img" class="img-center" src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="<?php echo esc_attr__( 'Img', 'loptus' )?>">
              <?php } ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <!-- Left nav -->
              <?php 
                      wp_nav_menu( 
                      array( 
                            'theme_location' => 'primary',
                            'container' => '',
                            'menu_class' => '', 
                            'menu_id' => '',
                            'menu'            => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'echo'            => true,
                             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                             'walker'            => new loptus_wp_bootstrap_navwalker(),
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav ml-auto mr-auto %2$s" data-in="fadeIn" data-out="fadeOut">%3$s</ul>',
                            'depth'           => 0,        
                        )
                     ); ?>
            </div>
            <div class="right-nav align-items-center d-flex justify-content-end list-inline">
            <?php if(isset($loptus_redux_demo['header_link']) && $loptus_redux_demo['header_link']!= ''){?>
             <a class="btn btn-white btn-sm" href="<?php echo esc_url($loptus_redux_demo['header_link']); ?>"><?php if(isset($examin_redux_demo['header_text'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($examin_redux_demo['header_text']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Login', 'examin' );
                                    }
                                    ?></a>
             <?php } ?>
              <div class="search">
                <div class="search-content">
                  <div class="search-button"> <i class="fas fa-search"></i>
                  </div>
                  <form id="search-form" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="search" class="search-input" placeholder="<?php echo esc_attr__( 'Search Here...', 'loptus' );?>" value="<?php echo get_search_query() ?>" name="s" id="s">
                  </form>
                </div>
              </div>
              <?php if(isset($loptus_redux_demo['header_aside']) && $loptus_redux_demo['header_aside']!= ''){?>
              <a href="#" class="ht-nav-toggle"><span></span></a>
              <?php } ?>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<nav id="ht-main-nav"> <a href="#" class="ht-nav-toggle active"><span></span></a>
  <?php if ( is_active_sidebar( 'aside-widget' ) ) : ?>
  <?php dynamic_sidebar( 'aside-widget' ); ?>
  <?php endif; ?>
</nav>