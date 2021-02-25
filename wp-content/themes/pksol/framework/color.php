<?php
$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));

if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
global $loptus_redux_demo; 
$b=$loptus_redux_demo['main-color-1'];
$rgba = hex2rgb($b);  
?>

::-moz-selection { background: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>; color: #fff; text-shadow: none; }
::-moz-selection { background: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>; color: #fff; text-shadow: none; }
::selection { background: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>; color: #fff; text-shadow: none; }

 
/* ------------------------
    Background Color
------------------------*/
.theme-bg,
div.color-customizer a.opener,
.btn:hover,
.navbar-nav .nav-link .menu-label::before, .navbar-nav .nav-link .menu-label::after,
.navbar-nav .nav-link::before,
.dropdown-item:focus, .dropdown-item:hover,
.nav-item.dropdown .dropdown-menu a:hover,
.owl-carousel .owl-nav button.owl-prev:hover,
.owl-carousel .owl-nav button.owl-next:hover,
.owl-carousel.owl-theme .owl-dots .owl-dot:hover span, .owl-carousel.owl-theme .owl-dots .owl-dot.active span,
.portfolio-filter button.is-checked, .portfolio-filter button:hover,
.scroll-top a,
.tab .nav-tabs .nav-link.active, .tab .nav-tabs .nav-link:hover, .tab .nav-tabs.active > a:focus, .tab .nav-tabs > a:hover,
.pagination > li.active .page-link, .page-link:hover, .page-link:focus,
.section-title h6,
.list-icon-2 li::before,
.play-btn span::before,
.ht-nav-toggle span,
.ht-nav-toggle span::before, .ht-nav-toggle span::after,
.step-num,
.popup-link:hover,
.testimonial,
.testimonial.style-2 .testimonial-caption h5,
.accordion .card.active a, .accordion .card a:hover,
.accordion .card-header a span::before, .accordion .card-header a span::after,
#ht-main-nav .ht-nav-toggle:hover span::before, #ht-main-nav .ht-nav-toggle:hover span::after
{ background-color: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;}


 
/* ------------------------
  Background Color Hover
------------------------*/
.btn.btn-theme, .step-num{ background: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;  color: #ffffff;}
.btn.btn-theme:hover,
.owl-carousel .owl-nav button.owl-prev:hover,
.owl-carousel .owl-nav button.owl-next:hover{background: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;}

/* ------------------------
    Color
------------------------*/
a, button, input, 
a:focus, a:hover,
.text-theme,
.loader,
.navbar-nav .nav-link:hover, .navbar-nav .nav-link:focus, .navbar-nav .nav-item.active .nav-link,
.header-2 #header-wrap.fixed-header .search-button, .header-2 #header-wrap.fixed-header .navbar-nav .nav-link:hover, .header-2 #header-wrap.fixed-header .navbar-nav .nav-item.active .nav-link,
h1 span,
.btn-simple:hover,
.btn.btn-white:hover,
.btn.btn-white.btn-border:hover,
.btn:focus, .btn.focus,
.breadcrumb-item.active, .breadcrumb-item a:hover,
.list-icon li i,
.counter.style-2 h5,
.tab.style-2 .nav-tabs .nav-link.active, .tab.style-2 .nav-tabs .nav-link:hover, .tab.style-2 .nav-tabs.active > a:focus, .tab.style-2 .nav-tabs > a:hover,
.team-member .team-description span,
.team-member .team-social-icon ul li a:hover,
.price-title,
.price-list li i,
.post .post-desc .post-date,
.post .post-desc h5 a:hover,
.post-author span,
.footer-list li a:hover,
.portfolio-title span,
.search-button,
.widget .widget-categories li a:hover,
.widget .recent-post-desc a:hover,
.portfolio-meta li i,
.countdown > li p,
.contact-info li i,
.contact-info li a:hover,
.sidebar-links li.active a, .sidebar-links li a:hover,
.team-description .team-icon li a:hover,
.scroll-top a:hover, .scroll-top a:focus
{color: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;}


/* ------------------------
    Border Color
------------------------*/
.owl-carousel.owl-theme .owl-dots .owl-dot span::before,
.form-control:focus,
.reply a:hover,
.pagination > li.active .page-link, .page-link:hover, .page-link:focus,
.owl-carousel .owl-nav button.owl-prev:hover,
.owl-carousel .owl-nav button.owl-next:hover,
.search-input
{border-color: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;}

.round-p-animation{border-color: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;}

/* ------------------------
  Border Color Hover
------------------------*/
.btn.btn-theme:hover,
.btn.btn-border{border-color: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>}

.testimonial::before,
.tab.style-2 .nav-tabs .nav-link.active, .tab.style-2 .nav-tabs .nav-link:hover, .tab.style-2 .nav-tabs.active > a:focus, .tab.style-2 .nav-tabs > a:hover
{border-top-color: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;}

/* ------------------------
    Round Animated Image
------------------------*/
.round-animation{background-image: linear-gradient(120deg, <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?> 0%, #ffb72f 100%);}
.round-animation:before,
.round-animation:after{background-image: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;}


[data-overlay].grediant-overlay:before{background: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;}


@media (max-width: 992px){

/* ------------------------
    Background Color
------------------------*/
.navbar-nav .nav-link:hover, .navbar-nav .active .nav-link, .navbar-nav .nav-link:focus,
#header-wrap.fixed-header .navbar-nav .nav-link:hover, #header-wrap.fixed-header .navbar-nav .active .nav-link,
.navbar-toggler{background: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;}

}
span.featured-post {
    color: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?> !important;
}
.widget ul li a:hover {
    color: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;
}
.pagination > li span.page-numbers.current ,.pagination > li .page-numbers:hover, li .page-numbers:focus{
    box-shadow: none;
    background: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;
    color: #ffffff;
    border-color: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;
}
.navbar-nav .active .nav-link {
    color: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;
}
.widget .wp-tag-cloud li a:hover {
    background: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;
    color: #ffffff;
}
.form-submit input.submit{
    cursor: pointer;
    background: <?php echo esc_attr($loptus_redux_demo['main-color-1']); ?>;
    }