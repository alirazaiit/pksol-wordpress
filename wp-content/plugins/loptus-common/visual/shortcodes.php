<?php 
$textdoimain = 'loptus';
$loptus_redux_demo = get_option('redux_demo');
global $pre_text;

$pre_text = 'VG ';
//add

//Sention Hero
add_shortcode('banner', 'banner_func');
function banner_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'text' => '',
        'image' => '',
        'image2' => '',
        'image3' => '',
        'link' => '',
        'btn' => '',
        'video' => '',
        'btn2' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    $images3 = wp_get_attachment_image_src($image3,''); 
    ?> 
    <section class="fullscreen-banner banner p-0 o-hidden box-shadow" data-bg-img="<?php echo esc_url($images[0]);?>">
      <div class="insideText"><?php echo htmlspecialchars_decode(esc_attr($text));?></div>
      <div class="align-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 order-lg-12">
              <div class="mouse-parallax">
                <div class="bnr-img1 wow fadeInRight" data-wow-duration="1s" data-wow-delay="4s">
                  <img class="img-center rotateme" src="<?php echo esc_url($images2[0]);?>" alt="">
                </div>
                <img class="img-center bnr-img2 wow zoomIn" data-wow-duration="2s" data-wow-delay="5s" src="<?php echo esc_url($images3[0]);?>" alt="">
              </div>
            </div>
            <div class="col-lg-7 col-md-12 order-lg-1 md-mt-5">
              <h1 class="mb-4 wow bounceInLeft" data-wow-duration="3s" data-wow-delay="2s"><?php echo htmlspecialchars_decode(esc_attr($title));?></h1>
              <p class="lead wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
              <div class="d-flex align-items-center"> 
              <?php if($link){ ?>
              <a class="btn btn-theme" href="<?php echo esc_url($link); ?>"><span><?php echo htmlspecialchars_decode(esc_attr($btn));?></span></a>
              <?php } ?>
              <?php if($video){ ?>
                <a class="play-btn popup-youtube ml-4 d-flex align-items-center" href="<?php echo esc_url($video); ?>"><span><?php echo htmlspecialchars_decode(esc_attr($btn2));?></span><img class="img-fluid pulse radius-4" src="<?php echo get_template_directory_uri();?>/images/play.png" alt=""></a>
                <?php } ?>
              </div>
            </div>        
          </div>
        </div>
       </div>
    </section>

<?php  return ob_get_clean();
} 


add_shortcode('banner2', 'banner2_func');
function banner2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'image2' => '',
        'image3' => '',
        'image4' => '',
        'image5' => '',
        'link' => '',
        'btn' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    $images3 = wp_get_attachment_image_src($image3,''); 
    $images4 = wp_get_attachment_image_src($image4,''); 
    $images5 = wp_get_attachment_image_src($image5,''); 
    ?> 
    <section class="fullscreen-banner banner banner-2 p-0 o-hidden bg-contain bg-pos-r animatedBackground" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="mouse-parallax" data-bg-img="<?php echo esc_url($images2[0]);?>"></div>
  <div class="h-100 bg-contain bg-pos-rb sm-bg-cover" data-bg-img="<?php echo esc_url($images3[0]);?>">
    <div class="align-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="white-bg box-shadow px-5 py-5 sm-px-3 sm-py-3 xs-px-2 xs-py-2 bg-contain bg-pos-l" data-bg-img="<?php echo esc_url($images4[0]);?>">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 text-center">
                  <div class="round-animation">
                    <img class="img-center topBottom" src="<?php echo esc_url($images5[0]);?>" alt="">
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 md-mt-5">
                  <h1 class="mb-4"><?php echo htmlspecialchars_decode(esc_attr($title));?></h1>
                  <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p> <a class="btn btn-theme" href="<?php echo esc_url($link); ?>"><span><?php echo htmlspecialchars_decode(esc_attr($btn));?></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 

//Sention Hero
add_shortcode('banner3', 'banner3_func');
function banner3_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'text' => '',
        'details' => '',
    ), $atts));
    ob_start(); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <section class="fullscreen-banner banner banner-3 p-0 o-hidden grediant-overlay" data-overlay="9">
  <div class="insideText"><?php echo htmlspecialchars_decode(esc_attr($text));?></div>
  <div class="owl-carousel owl-theme no-pb" data-items="1" data-dots="false" data-autoplay="true">
  <?php $new_accordion_value = array();
      foreach($details as $data){
        $new_line = $data;
        $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
        $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
        $new_line['image'] = isset($new_line['image']) ? $new_line['image'] : '';
        $new_line['link'] = isset($new_line['link']) ? $new_line['link'] : '';
        $new_line['btn'] = isset($new_line['btn']) ? $new_line['btn'] : '';
     
        $new_accordion_value[] = $new_line;
     
      }
     
      $idd = 0;
      foreach($new_accordion_value as $accordion):
      $idd++;
    $images2 = wp_get_attachment_image_src($accordion['image'],''); 
                ?>
    <div class="item">
      <div class="align-center p-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 order-lg-12">
              <div class="mouse-parallax info-img">
                <img class="img-center" src="<?php echo esc_url($images2[0]);?>" alt="Image">
              </div>
            </div>
            <div class="col-lg-7 col-md-12 order-lg-1 md-mt-5">
              <h1 class="mb-4 text-white"><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h1>
              <p class="lead text-white"><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></p> <a class="btn btn-white" href="<?php echo esc_url($accordion['link']);?>"><span><?php echo htmlspecialchars_decode(esc_attr($accordion['btn']));?></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach;
                  wp_reset_query(); ?>
  </div>
</section>

<?php  return ob_get_clean();
} 

//Sention Hero
add_shortcode('banner4', 'banner4_func');
function banner4_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'image2' => '',
        'link' => '',
        'btn' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?> 
    <section class="fullscreen-banner banner banner-4 p-0 o-hidden dark-bg">
    <div class="hero-bg"><img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="Image"></div>  
    <div class="align-center">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-12 order-lg-12">
                <div class="round-p-animation"></div>
                <div class="mouse-parallax">
                  <img class="img-center" src="<?php echo esc_url($images2[0]);?>" alt="Image">
                </div>
              </div>
              <div class="col-lg-6 col-md-12 order-lg-1 md-mt-5">
                <h1 class="mb-4 hero-title"><?php echo htmlspecialchars_decode(esc_attr($title));?></h1>
                <p class="lead text-white mb-4"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                 <a class="btn btn-theme" href="<?php echo esc_url($link); ?>"><span><?php echo htmlspecialchars_decode(esc_attr($btn));?></span></a>
              </div>
            </div>
          </div>
        </div>
  </section>

<?php  return ob_get_clean();
} 


add_shortcode('about', 'about_func');
function about_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
        'image2' => '',
        'details' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <section class="pos-r">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 image-column bg-contain bg-pos-l" data-bg-img="<?php echo esc_url($images[0]);?>">
        <div class="round-animation">
         <img class="img-fluid" src="<?php echo esc_url($images2[0]);?>" alt="Image">
        </div>
      </div>
      <div class="col-lg-7 col-md-12 ml-auto md-mt-5">
        <div class="section-title mb-4">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2> 
        </div>
        <p class="mb-5"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        <div class="theme-bg px-4 py-4">
          <div class="row">
          <?php $new_accordion_value = array();
      foreach($details as $data){
        $new_line = $data;
        $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
        $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
        $new_line['icon'] = isset($new_line['icon']) ? $new_line['icon'] : '';
     
        $new_accordion_value[] = $new_line;
     
      }
     
      $idd = 0;
      foreach($new_accordion_value as $accordion):
      $idd++;
                ?>
            <div class="col-sm-6">
              <div class="counter"> <i class="<?php echo esc_attr($accordion['icon']);?>"></i>
                <span class="count-number" data-to="<?php echo esc_attr($accordion['subtitle']);?>" data-speed="10000"><?php echo esc_attr($accordion['subtitle']);?></span>
                <h5><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h5>
              </div>
            </div>
            <?php endforeach;
                  wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 


add_shortcode('about2', 'about2_func');
function about2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'list' => '',
        'image' => '',
        'details' => '',
        'details2' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    $details2 = vc_param_group_parse_atts($atts['details2']);
    ?> 
    <section class="pos-r">
  <div class="pattern-3">
    <img class="img-fluid rotateme" src="<?php echo esc_url($images[0]);?>" alt="Image">
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 col-md-12">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2> 
        </div>
        <ul class="list-unstyled list-icon">
        <?php $new_accordion_value2 = array();
              foreach($details2 as $data2){
                $new_line2 = $data2;
                $new_line2['title'] = isset($new_line2['title']) ? $new_line2['title'] : '';
             
                $new_accordion_value2[] = $new_line2;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value2 as $accordion2):
              $idd++;
                        ?>
          <li class="mb-3"><i class="flaticon-tick"></i> <?php echo htmlspecialchars_decode(esc_attr($accordion2['title']));?></li>
          <?php endforeach;
                  wp_reset_query(); ?>
        </ul>
      </div>
      <div class="col-lg-7 col-md-12 md-mt-5">
        <div class="owl-carousel owl-theme no-pb" data-dots="false" data-items="2" data-sm-items="1" data-autoplay="true">
        <?php $new_accordion_value = array();
      foreach($details as $data){
        $new_line = $data;
        $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
        $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
        $new_line['image'] = isset($new_line['image']) ? $new_line['image'] : '';
     
        $new_accordion_value[] = $new_line;
     
      }
     
      $idd = 0;
      foreach($new_accordion_value as $accordion):
      $idd++;
    $images2 = wp_get_attachment_image_src($accordion['image'],''); 
                ?>
          <div class="item">
            <div class="featured-item text-center style-2 mx-3 my-3">
              <div class="featured-icon">
                <img class="img-center" src="<?php echo esc_url($images2[0]);?>" alt="Image">
              </div>
              <div class="featured-title">
                <h5><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h5>
              </div>
              <div class="featured-desc">
                <p><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></p>
              </div>
            </div>
          </div>
          <?php endforeach;
                  wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 
add_shortcode('about3', 'about3_func');
function about3_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
        'link' => '',
        'btn' => '',
        'link2' => '',
        'btn2' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <section class="o-hidden">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12 order-lg-12">
            <img class="img-fluid topBottom" src="<?php echo esc_url($images[0]);?>" alt="Image">
          </div>
          <div class="col-lg-6 col-md-12 order-lg-1 md-mt-5">
            <div class="section-title mb-4">
              <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($title));?></h2> 
              <p class="mb-0 text-black"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>          
            </div>
            <p class="mb-3"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p> 
            <a class="btn btn-theme" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($btn));?></a>
            <a class="btn btn-theme" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($btn2));?></a>       
          </div>
        </div>
      </div>
    </section>

<?php  return ob_get_clean();
} 

add_shortcode('text_image', 'text_image_func');
function text_image_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'details' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <?php if($type=='type2'){ ?>

    <section class="pt-0 o-hidden">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12 order-lg-12">
        <div class="info-img pos-r">
          <img class="img-fluid topBottom" src="<?php echo esc_url($images[0]);?>" alt="Image">
        </div>
      </div>
      <div class="col-lg-6 col-md-12 order-lg-1 md-mt-5">
        <div class="section-title mb-4">
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($title));?></h2> 
          <p class="mb-0 text-black"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
        </div>
        <ul class="list-unstyled list-icon">
            <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
                        ?>
              <li class="mb-3"><i class="flaticon-tick"></i> <?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></li>
              <?php endforeach;
                  wp_reset_query(); ?>
            </ul>
      </div>
    </div>
  </div>
</section>

<?php }else{ ?>
    <section class="o-hidden">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12">
            <div class="info-img pos-r">
              <img class="img-fluid topBottom" src="<?php echo esc_url($images[0]);?>" alt="Image">
            </div>
          </div>
          <div class="col-lg-6 col-md-12 md-mt-5">
            <div class="section-title mb-4">
              <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($title));?></h2> 
              <p class="mb-0 text-black"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
            </div>
            <ul class="list-unstyled list-icon">
            <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
                        ?>
              <li class="mb-3"><i class="flaticon-tick"></i> <?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></li>
              <?php endforeach;
                  wp_reset_query(); ?>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <?php } ?>

<?php  return ob_get_clean();
} 

add_shortcode('step', 'step_func');
function step_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'details' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <section class="text-center o-hidden" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-10 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2>
        </div>
      </div>
    </div>
    <div class="row">
    <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
                $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
                $new_line['number'] = isset($new_line['number']) ? $new_line['number'] : '';
                $new_line['image'] = isset($new_line['image']) ? $new_line['image'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
    $images2 = wp_get_attachment_image_src($accordion['image'],''); 
                        ?>
      <div class="col-lg-4 col-md-12">
        <div class="work-process">
          <div class="work-process-inner"> 
            <div class="work-img">
              <img class="img-center" src="<?php echo esc_url($images2[0]);?>" alt="Image">
              <span class="step-num"><?php echo htmlspecialchars_decode(esc_attr($accordion['number']));?></span>
            </div>
            <h4><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h4>
            <p class="mb-0"><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></p>
          </div>
        </div>
      </div>
      <?php endforeach;
                  wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 

add_shortcode('step2', 'step2_func');
function step2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'image2' => '',
        'image3' => '',
        'details' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    $images3 = wp_get_attachment_image_src($image3,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <section class="pos-r py-10 bg-contain bg-pos-r" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 image-column bg-contain bg-pos-l" data-bg-img="<?php echo esc_url($images2[0]);?>">
        <img class="img-fluid" src="<?php echo esc_url($images3[0]);?>" alt="Image">
      </div>
      <div class="col-lg-6 col-md-12 ml-auto md-mt-5 pl-lg-5">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2> 
        </div>
        <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
                $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
                $new_line['number'] = isset($new_line['number']) ? $new_line['number'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
                        ?>
        <div class="work-process style-2 mb-5">
          <div class="work-process-inner"> <span class="step-num" data-bg-color="#ff7810"><?php echo htmlspecialchars_decode(esc_attr($accordion['number']));?></span>
            <h4><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h4>
            <p class="mb-0"><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></p>
          </div>
        </div>
        <?php endforeach;
                  wp_reset_query(); ?>
      </div>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 

add_shortcode('testimonial', 'testimonial_func');
function testimonial_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
        'details' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <section class="animatedBackground" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 col-md-12">
        <div class="section-title mb-0">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2> 
          <p class="mb-0"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 md-mt-5">
        <div class="owl-carousel owl-theme" data-items="1">
        <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
                $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
                $new_line['testimonial'] = isset($new_line['testimonial']) ? $new_line['testimonial'] : '';
                $new_line['image'] = isset($new_line['image']) ? $new_line['image'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
    $images2 = wp_get_attachment_image_src($accordion['image'],''); 
                        ?>
          <div class="item">
            <div class="testimonial">
              <div class="testimonial-img">
                <img class="img-center" src="<?php echo esc_url($images2[0]);?>" alt="Image">
              </div>
              <div class="testimonial-content">
                <p><?php echo htmlspecialchars_decode(esc_attr($accordion['testimonial']));?></p>
                <div class="testimonial-caption">
                  <h5><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h5>
                  <label><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></label>
                </div>
              </div>
              <div class="testimonial-quote"><i class="flaticon-quotation"></i>
              </div>
            </div>
          </div>
          <?php endforeach;
                  wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 


add_shortcode('testimonial2', 'testimonial2_func');
function testimonial2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'details' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <section class="bg-contain bg-pos-r pt-0" data-bg-img="<?php echo esc_url($images[0]);?>">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-8 col-md-12 ml-auto mr-auto">
            <div class="section-title">
              <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
              <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-theme" data-items="1" data-autoplay="true">
            <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
                $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
                $new_line['testimonial'] = isset($new_line['testimonial']) ? $new_line['testimonial'] : '';
                $new_line['image'] = isset($new_line['image']) ? $new_line['image'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
    $images2 = wp_get_attachment_image_src($accordion['image'],''); 
                        ?>
              <div class="item">
                <div class="testimonial style-2">
                  <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                      <div class="testimonial-img info-img round-animation">
                        <img class="img-center leftRight" src="<?php echo esc_url($images2[0]);?>" alt="Image">
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-12 ml-auto md-mt-5">
                      <div class="testimonial-content">
                        <div class="testimonial-quote"><i class="flaticon-quotation"></i>
                        </div>
                        <p><?php echo htmlspecialchars_decode(esc_attr($accordion['testimonial']));?></p>
                        <div class="testimonial-caption">
                          <h5><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h5>
                          <label><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach;
                  wp_reset_query(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php  return ob_get_clean();
} 



add_shortcode('pricing', 'pricing_func');
function pricing_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
        'tab1' => '',
        'tab2' => '',
        'details' => '',
        'details2' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    $details2 = vc_param_group_parse_atts($atts['details2']);
    ?> 
    <section class="grey-bg" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2>
          <p class="mb-0"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tab text-center">
          <!-- Nav tabs -->
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link active" id="nav-tab1" data-toggle="tab" href="#tab1-1" role="tab" aria-selected="true"><?php echo htmlspecialchars_decode(esc_attr($tab1));?></a>
              <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab1-2" role="tab" aria-selected="false"><?php echo htmlspecialchars_decode(esc_attr($tab2));?></a>
            </div>
          </nav>
          <!-- Tab panes -->
          <div class="tab-content px-0 pb-0" id="nav-tabContent">
            <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
              <div class="row">

              <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
                $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
                $new_line['content'] = isset($new_line['content']) ? $new_line['content'] : '';
                $new_line['image'] = isset($new_line['image']) ? $new_line['image'] : '';
                $new_line['link'] = isset($new_line['link']) ? $new_line['link'] : '';
                $new_line['btn'] = isset($new_line['btn']) ? $new_line['btn'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
    $images2 = wp_get_attachment_image_src($accordion['image'],''); 
                        ?>

                <div class="col-lg-4 col-md-12">
                  <div class="price-table">
                    <div class="round-p-animation"></div>
                    <div class="price-header">
                      <h3 class="price-title"><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h3>
                    </div>
                    <img class="img-center my-4" src="<?php echo esc_url($images2[0]);?>" alt="Image">
                    <div class="price-value">
                      <h2><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></h2>
                    </div>
                    <div class="price-list">
                      <ul class="list-unstyled">
                        <?php echo htmlspecialchars_decode(esc_attr($accordion['content']));?>
                      </ul>
                    </div>
                    <a class="btn btn-theme mt-5" href="<?php echo esc_url($accordion['link']); ?>"> <span><?php echo htmlspecialchars_decode(esc_attr($accordion['btn']));?></span>
                    </a>
                  </div>
                </div>
                <?php endforeach;
                  wp_reset_query(); ?>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab1-2">
              <div class="row">
                <?php $new_accordion_value2 = array();
              foreach($details2 as $data2){
                $new_line2 = $data2;
                $new_line2['title'] = isset($new_line2['title']) ? $new_line2['title'] : '';
                $new_line2['subtitle'] = isset($new_line2['subtitle']) ? $new_line2['subtitle'] : '';
                $new_line2['content'] = isset($new_line2['content']) ? $new_line2['content'] : '';
                $new_line2['image'] = isset($new_line2['image']) ? $new_line2['image'] : '';
                $new_line2['link'] = isset($new_line2['link']) ? $new_line2['link'] : '';
                $new_line2['btn'] = isset($new_line2['btn']) ? $new_line2['btn'] : '';
             
                $new_accordion_value2[] = $new_line2;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value2 as $accordion2):
              $idd++;
    $images3 = wp_get_attachment_image_src($accordion2['image'],''); 
                        ?>

                <div class="col-lg-4 col-md-12">
                  <div class="price-table">
                    <div class="round-p-animation"></div>
                    <div class="price-header">
                      <h3 class="price-title"><?php echo htmlspecialchars_decode(esc_attr($accordion2['title']));?></h3>
                    </div>
                    <img class="img-center my-4" src="<?php echo esc_url($images3[0]);?>" alt="Image">
                    <div class="price-value">
                      <h2><?php echo htmlspecialchars_decode(esc_attr($accordion2['subtitle']));?></h2>
                    </div>
                    <div class="price-list">
                      <ul class="list-unstyled">
                        <?php echo htmlspecialchars_decode(esc_attr($accordion2['content']));?>
                      </ul>
                    </div>
                    <a class="btn btn-theme mt-5" href="<?php echo esc_url($accordion2['link']); ?>"> <span><?php echo htmlspecialchars_decode(esc_attr($accordion2['btn']));?></span>
                    </a>
                  </div>
                </div>
                <?php endforeach;
                  wp_reset_query(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 

add_shortcode('pricing2', 'pricing2_func');
function pricing2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'details' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <section class="grey-bg">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-8 col-md-12 ml-auto mr-auto">
            <div class="section-title">
              <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
              <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2>
              <p class="mb-0"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
            </div>
          </div>
        </div>
        <div class="row">
        <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
                $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
                $new_line['content'] = isset($new_line['content']) ? $new_line['content'] : '';
                $new_line['link'] = isset($new_line['link']) ? $new_line['link'] : '';
                $new_line['btn'] = isset($new_line['btn']) ? $new_line['btn'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
                        ?>
          <div class="col-lg-6 col-md-12 mb-5">
            <div class="price-table style-2 bg-contain bg-pos-r" data-bg-img="<?php echo get_template_directory_uri();?>/images/bg/02.png">
              <div class="price-header d-md-flex justify-content-between">
                <h3 class="price-title"><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h3>
                <div class="price-value">
                  <h2><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></h2>
                </div>
              </div>
              <div class="price-list">
                <ul class="list-unstyled custom-li">
                  <?php echo htmlspecialchars_decode(esc_attr($accordion['content']));?>
                </ul>
              </div>
              <a class="btn btn-theme" href="<?php echo esc_url($accordion['link']);?>"> <span><?php echo htmlspecialchars_decode(esc_attr($accordion['btn']));?></span>
              </a>
            </div>
          </div>
          <?php endforeach;
                  wp_reset_query(); ?>
        </div>
      </div>
    </section>

<?php  return ob_get_clean();
} 


add_shortcode('client', 'client_func');
function client_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'post_gallery' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <?php $gallery = shortcode_atts( 
                    array(
                        'post_gallery'      =>  'post_gallery',
                    ), $atts ); ?>
    <?php if($type=='type2'){ ?>
    <section>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="owl-carousel owl-theme no-pb" data-items="5" data-md-items="4" data-sm-items="3" data-dots="false" data-autoplay="true">
        <?php 
        $image_ids=explode(',',$gallery['post_gallery']);
        $sigle_img = wp_get_attachment_image_src($image_ids[0], ""); ?>
          <div class="item">
            <img class="img-center" src="<?php echo esc_url($sigle_img[0]);?>" alt="Image">
          </div>
          <?php
        for($i=1;$i<=99;$i++)
        {
         if($image_ids[$i]!="")
          {
          $imgs = wp_get_attachment_image_src($image_ids[$i], ""); ?>
          <div class="item">
            <img class="img-center" src="<?php echo esc_url($imgs[0]);?>" alt="Image">
          </div>
          <?php
          }
        } ?> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php }else{ ?>
    <section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ht-clients d-flex flex-wrap align-items-center text-center">
        <?php 
        $image_ids=explode(',',$gallery['post_gallery']);
        $sigle_img = wp_get_attachment_image_src($image_ids[0], ""); ?>
          <div class="clients-logo">
            <img class="img-center" src="<?php echo esc_url($sigle_img[0]);?>" alt="Image">
          </div>
          <?php
        for($i=1;$i<=99;$i++)
        {
         if($image_ids[$i]!="")
          {
          $imgs = wp_get_attachment_image_src($image_ids[$i], ""); ?>
          <div class="clients-logo">
            <img class="img-center" src="<?php echo esc_url($imgs[0]);?>" alt="Image">
          </div>
          <?php
          }
        } ?>  
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php  return ob_get_clean();
} 


add_shortcode('counter', 'counter_func');
function counter_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'details' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <section>
  <div class="container">
    <div class="row">
    <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
                $new_line['number'] = isset($new_line['number']) ? $new_line['number'] : '';
                $new_line['image'] = isset($new_line['image']) ? $new_line['image'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
    $images2 = wp_get_attachment_image_src($accordion['image'],''); 
                        ?>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="counter style-2">
          <img class="img-center" src="<?php echo esc_url($images2[0]);?>" alt="Image"> <span class="count-number" data-to="<?php echo htmlspecialchars_decode(esc_attr($accordion['number']));?>" data-speed="10000"><?php echo htmlspecialchars_decode(esc_attr($accordion['number']));?></span>
          <h5><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h5>
        </div>
      </div>
      <?php endforeach;
                  wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 


add_shortcode('counter2', 'counter2_func');
function counter2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'text' => '',
        'details' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    
<section class="grey-bg pos-r o-hidden">
  <div class="insideText"><?php echo htmlspecialchars_decode(esc_attr($text));?></div>
  <div class="container">
    <div class="row">
    <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
                $new_line['number'] = isset($new_line['number']) ? $new_line['number'] : '';
                $new_line['image'] = isset($new_line['image']) ? $new_line['image'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
    $images2 = wp_get_attachment_image_src($accordion['image'],''); 
                        ?>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="counter style-2">
          <img class="img-center" src="<?php echo esc_url($images2[0]);?>" alt="Image"> <span class="count-number" data-to="<?php echo htmlspecialchars_decode(esc_attr($accordion['number']));?>" data-speed="10000"><?php echo htmlspecialchars_decode(esc_attr($accordion['number']));?></span>
          <h5><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h5>
        </div>
      </div>
      <?php endforeach;
                  wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 


add_shortcode('counter3', 'counter3_func');
function counter3_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'details' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    
<section class="theme-bg">
  <div class="container">
    <div class="row">
    <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
                $new_line['number'] = isset($new_line['number']) ? $new_line['number'] : '';
                $new_line['image'] = isset($new_line['image']) ? $new_line['image'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
    $images2 = wp_get_attachment_image_src($accordion['image'],''); 
                        ?>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="counter style-2">
          <img class="img-center" src="<?php echo esc_url($images2[0]);?>" alt="Image"> <span class="count-number" data-to="<?php echo htmlspecialchars_decode(esc_attr($accordion['number']));?>" data-speed="10000"><?php echo htmlspecialchars_decode(esc_attr($accordion['number']));?></span>
          <h5><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h5>
        </div>
      </div>
      <?php endforeach;
                  wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 

add_shortcode('faq', 'faq_func');
function faq_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'details' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="accordion" class="accordion style-1">
        <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
                $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
                $new_line['active'] = isset($new_line['active']) ? $new_line['active'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
                        ?>
                        <?php if($accordion['active']){ ?>
          <div class="card active">
            <div class="card-header">
              <h6 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo esc_attr($idd); ?>" aria-expanded="true"><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></a>
              </h6>
            </div>
            <div id="collapse<?php echo esc_attr($idd); ?>" class="collapse show" data-parent="#accordion">
              <div class="card-body"><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></div>
            </div>
          </div>
          <?php }else{ ?>
          <div class="card">
            <div class="card-header">
              <h6 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo esc_attr($idd); ?>"><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></a>
              </h6>
            </div>
            <div id="collapse<?php echo esc_attr($idd); ?>" class="collapse" data-parent="#accordion">
              <div class="card-body"><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></div>
            </div>
          </div>
          <?php } ?>
          <?php endforeach;
                  wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 

add_shortcode('we_do', 'we_do_func');
function we_do_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'image' => '',
        'image2' => '',
        'image3' => '',
        'image4' => '',
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'list' => '',
        'link' => '',
        'btn' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    $images3 = wp_get_attachment_image_src($image3,''); 
    $images4 = wp_get_attachment_image_src($image4,''); 
    ?> 
    <section class="grey-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12 order-lg-12">
        <div class="row">
          <div class="col-md-6">
            <div class="image-block">
              <img class="img-fluid box-shadow radius w-100" src="<?php echo esc_url($images[0]);?>" alt="Image">
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="image-block">
              <img class="img-fluid box-shadow radius w-100" src="<?php echo esc_url($images2[0]);?>" alt="Image">
            </div>
          </div>
          <div class="col-md-6 sm-mt-3">
            <div class="image-block">
              <img class="img-fluid box-shadow radius w-100" src="<?php echo esc_url($images3[0]);?>" alt="Image">
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="image-block">
              <img class="img-fluid box-shadow radius w-100" src="<?php echo esc_url($images4[0]);?>" alt="Image">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 md-mt-5 order-lg-1">
        <div class="section-title mb-3">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2>
        </div>
        <p class="text-black"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        <ul class="custom-li list-unstyled list-icon-2 my-3 d-inline-block">
          <?php echo htmlspecialchars_decode(esc_attr($list));?>
        </ul> <a class="btn btn-theme" href="<?php echo esc_url($link); ?>"><span><?php echo htmlspecialchars_decode(esc_attr($btn));?></span></a>
      </div>      
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 


add_shortcode('we_do3', 'we_do3_func');
function we_do3_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'image' => '',
        'image2' => '',
        'image3' => '',
        'image4' => '',
        'text' => '',
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'list' => '',
        'link' => '',
        'btn' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    $images3 = wp_get_attachment_image_src($image3,''); 
    $images4 = wp_get_attachment_image_src($image4,''); 
    ?> 
    <section class="bg-contain bg-pos-r pos-r py-15 o-hidden pos-r" data-bg-img="<?php echo get_template_directory_uri();?>/images/bg/03.png">
      <div class="insideText"><?php echo htmlspecialchars_decode(esc_attr($text));?></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12 image-column">
            <div class="row">
              <div class="col-md-6">
                <div class="image-block">
                <img class="img-fluid box-shadow radius w-100" src="<?php echo esc_url($images[0]);?>" alt="Image">
                </div>
              </div>
              <div class="col-md-6 mt-4">
                <div class="image-block">
                  <img class="img-fluid box-shadow radius w-100" src="<?php echo esc_url($images2[0]);?>" alt="Image">
                </div>
              </div>
              <div class="col-md-6 sm-mt-3">
                <div class="image-block">
                  <img class="img-fluid box-shadow radius w-100" src="<?php echo esc_url($images3[0]);?>" alt="Image">
                </div>
              </div>
              <div class="col-md-6 mt-4">
                <div class="image-block">
                  <img class="img-fluid box-shadow radius w-100" src="<?php echo esc_url($images4[0]);?>" alt="Image">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-12 md-mt-5 ml-auto">
            <div class="section-title mb-3">
              <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
              <h2><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2>
            </div>
            <p class="text-black"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
            <ul class="custom-li list-unstyled list-icon-2 my-3 d-inline-block">
              <?php echo htmlspecialchars_decode(esc_attr($list));?>
            </ul> <a class="btn btn-theme" href="<?php echo esc_url($link); ?>"><span><?php echo htmlspecialchars_decode(esc_attr($btn));?></span></a>
          </div>      
        </div>
      </div>
    </section>

<?php  return ob_get_clean();
} 

add_shortcode('we_do2', 'we_do2_func');
function we_do2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'image' => '',
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'list' => '',
        'link' => '',
        'btn' => '',
        'video' => '',
        'btn2' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    
<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
         <div class="round-animation">       
        <div class="video-box">
          <img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="Image">
          <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube ml-4 d-flex align-items-center" href="<?php echo esc_url($video); ?>"><span class="btn btn-white"><?php echo htmlspecialchars_decode(esc_attr($btn2));?></span><img class="img-fluid pulse radius-4" src="<?php echo get_template_directory_uri();?>/images/play.png" alt="Image"></a>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 md-mt-5">
        <div class="section-title mb-3">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2>
        </div>
        <p class="text-black"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        <ul class="custom-li list-unstyled list-icon-2 my-3 d-inline-block">
          <?php echo htmlspecialchars_decode(esc_attr($list));?>
        </ul> <a class="btn btn-theme" href="<?php echo esc_url($link); ?>"><span><?php echo htmlspecialchars_decode(esc_attr($btn));?></span></a>
      </div>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 


add_shortcode('tabs', 'tabs_func');
function tabs_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'details' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <section class="grey-bg animatedBackground" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="tab style-2 ">
          <!-- Nav tabs -->
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist"> 
            <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title1'] = isset($new_line['title1']) ? $new_line['title1'] : '';
                $new_line['title2'] = isset($new_line['title2']) ? $new_line['title2'] : '';
                $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
                $new_line['image'] = isset($new_line['image']) ? $new_line['image'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
    $images2 = wp_get_attachment_image_src($accordion['image'],''); 
                        ?>
                        <?php   if($accordion['active']){ ?>
              <a class="nav-item nav-link active" id="nav-tab<?php  echo esc_attr($idd); ?>" data-toggle="tab" href="#tab11-<?php  echo esc_attr($idd); ?>" role="tab" aria-selected="true"><?php echo htmlspecialchars_decode(esc_attr($accordion['title1']));?></a>
              <?php }else{ ?>
              <a class="nav-item nav-link" id="nav-tab<?php  echo esc_attr($idd); ?>" data-toggle="tab" href="#tab11-<?php  echo esc_attr($idd); ?>" role="tab" aria-selected="false"><?php echo htmlspecialchars_decode(esc_attr($accordion['title1']));?></a>
              <?php   } ?>
              <?php endforeach;
                  wp_reset_query(); ?>
            </div>
          </nav>
          <!-- Tab panes -->
          <div class="tab-content" id="nav-tabContent">
          <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title1'] = isset($new_line['title1']) ? $new_line['title1'] : '';
                $new_line['title2'] = isset($new_line['title2']) ? $new_line['title2'] : '';
                $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
                $new_line['content'] = isset($new_line['content']) ? $new_line['content'] : '';
                $new_line['image'] = isset($new_line['image']) ? $new_line['image'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
    $images2 = wp_get_attachment_image_src($accordion['image'],''); 
                        ?>
                        <?php   if($accordion['active']){ ?>
            <div role="tabpanel" class="tab-pane fade show active" id="tab11-<?php  echo esc_attr($idd); ?>">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                  <img class="img-fluid" src="<?php echo esc_url($images2[0]);?>" alt="Image">
                </div>
                <div class="col-lg-6 col-md-12 md-mt-5">
                  <h4 class="title"><?php echo htmlspecialchars_decode(esc_attr($accordion['title2']));?></h4>
                  <p><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></p>
                  <ul class="list-unstyled list-icon">
                    <?php echo htmlspecialchars_decode(esc_attr($accordion['content']));?>
                  </ul>
                </div>
              </div>
            </div>
            <?php }else{ ?>
            <div role="tabpanel" class="tab-pane fade" id="tab11-<?php  echo esc_attr($idd); ?>">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                  <img class="img-fluid" src="<?php echo esc_url($images2[0]);?>" alt="Image">
                </div>
                <div class="col-lg-6 col-md-12 md-mt-5">
                  <h4 class="title"><?php echo htmlspecialchars_decode(esc_attr($accordion['title2']));?></h4>
                  <p><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></p>
                  <ul class="list-unstyled list-icon">
                    <?php echo htmlspecialchars_decode(esc_attr($accordion['content']));?>
                  </ul>
                </div>
              </div>
            </div>
            <?php } endforeach;
                  wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 

add_shortcode('service', 'service_func');
function service_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'number'        =>      '3',
        'orderpost' => '',
        'orderby' => '',
        'btn' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    $loptus_redux_demo = get_option('redux_demo');
    ?>
    <?php if($type=='type2'){ ?>
    <section class="grey-bg pos-r text-center">
  <div class="pattern-3">
    <img class="img-fluid rotateme" src="<?php echo esc_url($images[0]);?>" alt="Image">
  </div>
  <div class="container">
    <?php if($title && $subtitle){ ?>
  <div class="row">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2> 
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="row">
    <?php 
            $args = array(   
                        'post_type' => 'service',   
                        'paged' => $paged,
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
    ?>
<?php $service_image = get_post_meta(get_the_ID(),'_cmb_service_image', true); ?>
      <div class="col-lg-4 col-md-6">
        <div class="featured-item text-center">
          <div class="featured-icon">
            <img class="img-center" src="<?php echo esc_url($service_image); ?>" alt="Image">
          </div>
          <div class="featured-title">
            <h5><?php the_title(); ?></h5>
          </div>
          <div class="featured-desc">
            <p><?php echo esc_attr(loptus_excerpt1(20)); ?></p> <a class="btn btn-theme mt-5" href="<?php the_permalink();?>"><?php echo htmlspecialchars_decode(esc_attr($btn));?></a>
          </div>
        </div>
      </div>
      <?php 
                    endwhile;?> 
    </div>
  </div>
</section>
<?php }elseif($type=='type3'){ ?>
<section class="bg-contain bg-pos-r p-0" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-6">
        <div class="section-title mb-0">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2> 
          <p class="mb-0"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        </div>
      </div>
      <?php 
            $args = array(   
                        'post_type' => 'service',   
                        'paged' => $paged,
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
    ?>
<?php $service_image = get_post_meta(get_the_ID(),'_cmb_service_image', true); ?>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="featured-item text-center">
          <div class="featured-icon">
            <img class="img-center" src="<?php echo esc_url($service_image); ?>" alt="Image">
          </div>
          <div class="featured-title">
            <h5><?php the_title(); ?></h5>
          </div>
          <div class="featured-desc">
            <p><?php echo esc_attr(loptus_excerpt1(20)); ?></p><a class="btn btn-theme mt-5" href="<?php the_permalink();?>"><?php echo htmlspecialchars_decode(esc_attr($btn));?></a>
          </div>
        </div>
      </div>
      <?php 
                    endwhile;?> 
    </div>
  </div>
</section>

<?php }elseif($type=='type4'){ ?>

<section class="grey-bg pos-r o-hidden">
  <div class="insideText"><?php echo htmlspecialchars_decode(esc_attr($title));?></div>
  <?php if($image){ ?>
  <div class="pattern-3">
    <img class="img-fluid rotateme" src="<?php echo esc_url($images[0]);?>" alt="Image">
  </div>
  <?php } ?>
  <div class="container">
    <div class="row">
    <?php 
            $args = array(   
                        'post_type' => 'service',   
                        'paged' => $paged,
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
    ?>
<?php $service_image = get_post_meta(get_the_ID(),'_cmb_service_image', true); ?>
      <div class="col-lg-6 col-md-6 mb-5">
        <div class="featured-item style-3">
          <div class="featured-icon">
            <img class="img-center" src="<?php echo esc_url($service_image); ?>" alt="Image">
          </div>
          <div class="featured-title">
            <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
          </div>
          <div class="featured-desc">
            <p><?php echo esc_attr(loptus_excerpt1(20)); ?></p>
          </div>
        </div>
      </div>
      <?php 
                    endwhile;?> 
    </div>
  </div>
</section>

<?php }else{ ?>

    <section data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="container">
  <?php if($title && $subtitle){ ?>
  <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2> 
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="row">
    <?php 
            $args = array(   
                        'post_type' => 'service',   
                        'paged' => $paged,
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
    ?>
<?php $service_image = get_post_meta(get_the_ID(),'_cmb_service_image', true); ?>
      <div class="col-lg-4 col-md-12">
        <div class="featured-item text-center style-2">
          <div class="featured-icon">
            <img class="img-center" src="<?php echo esc_url($service_image); ?>" alt="Image">
          </div>
          <div class="featured-title">
            <h5><?php the_title(); ?></h5>
          </div>
          <div class="featured-desc">
            <p><?php echo esc_attr(loptus_excerpt1(20)); ?></p> <a class="btn btn-theme mt-5" href="<?php the_permalink();?>"><?php echo htmlspecialchars_decode(esc_attr($btn));?></a>
          </div>
        </div>
      </div>
      <?php 
                    endwhile;?> 
    </div>
  </div>
</section>

<?php } ?>

<?php  return ob_get_clean();
} 


add_shortcode('portfolio', 'portfolio_func');
function portfolio_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'number'        =>      '3',
        'orderpost' => '',
        'orderby' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    $loptus_redux_demo = get_option('redux_demo');
    ?>
    <?php if($type=='type2'){ ?>
    <section class="pos-r o-hidden" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="insideText"><?php echo htmlspecialchars_decode(esc_attr($title));?></div>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-lg-12 col-md-12">
        <div class="portfolio-filter">
          <button data-filter="" class="is-checked"><?php echo esc_html__( 'All', 'loptus' );?></button>
          <?php 
              $categories = get_terms('type');   
               foreach( (array)$categories as $categorie){
                  $cat_name = $categorie->name;
                  $cat_slug = $categorie->slug;
          ?>
          <button data-filter=".<?php echo esc_attr($cat_slug);?>"><?php echo esc_attr($cat_name);?></button>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="grid columns-2 row no-gutters popup-gallery">
          <div class="grid-sizer"></div>
          <?php 
            $args = array(   
                        'post_type' => 'portfolio',   
                        'paged' => $paged,
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                    $cates = get_the_terms(get_the_ID(),'type');
                    $cate_name ='';
                    $cate_slug = '';
                          foreach((array)$cates as $cate){
                if(count($cates)>0){
                    $cate_name .= $cate->name.'  ' ;
                    $cate_slug .= $cate->slug .' ';     
                    } 
                    }
    ?>
          <div class="grid-item <?php echo esc_attr($cate_slug);?>">
            <div class="portfolio-item">
              <img class="img-center w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Image">
              <div class="portfolio-title"> <span><?php echo esc_attr($cate_name);?></span>
                <h4><?php the_title();?></h4>
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
          <?php 
                    endwhile;?> 

        </div>
      </div>
    </div>
  </div>
</section>
<?php }elseif($type=='type4'){ ?>
    <section class="pos-r o-hidden" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-lg-12 col-md-12">
        <div class="portfolio-filter">
          <button data-filter="" class="is-checked"><?php echo esc_html__( 'All', 'loptus' );?></button>
          <?php 
              $categories = get_terms('type');   
               foreach( (array)$categories as $categorie){
                  $cat_name = $categorie->name;
                  $cat_slug = $categorie->slug;
          ?>
          <button data-filter=".<?php echo esc_attr($cat_slug);?>"><?php echo esc_attr($cat_name);?></button>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="grid columns-3 row no-gutters popup-gallery">
          <div class="grid-sizer"></div>
          <?php 
            $args = array(   
                        'post_type' => 'portfolio',   
                        'paged' => $paged,
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                    $cates = get_the_terms(get_the_ID(),'type');
                    $cate_name ='';
                    $cate_slug = '';
                          foreach((array)$cates as $cate){
                if(count($cates)>0){
                    $cate_name .= $cate->name.'  ' ;
                    $cate_slug .= $cate->slug .' ';     
                    } 
                    }
    ?>
          <div class="grid-item <?php echo esc_attr($cate_slug);?>">
            <div class="portfolio-item">
              <img class="img-center w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Image">
              <div class="portfolio-title"> <span><?php echo esc_attr($cate_name);?></span>
                <h4><?php the_title();?></h4>
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
          <?php 
                    endwhile;?> 

        </div>
      </div>
    </div>
  </div>
</section>
<?php }elseif($type=='type3'){ ?>
<section class="o-hidden p-0">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel owl-theme popup-gallery" data-items="4" data-lg-items="3" data-md-items="2" data-sm-items="1" data-autoplay="true">
        <?php 
            $args = array(   
                        'post_type' => 'portfolio',   
                        'paged' => $paged,
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                    $cates = get_the_terms(get_the_ID(),'type');
                    $cate_name ='';
                    $cate_slug = '';
                          foreach((array)$cates as $cate){
                if(count($cates)>0){
                    $cate_name .= $cate->name.'  ' ;
                    $cate_slug .= $cate->slug .' ';     
                    } 
                    }
    ?>
          <div class="item">
            <div class="portfolio-item">
              <img class="img-center w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Image">
              <div class="portfolio-title"> <span><?php echo esc_attr($cate_name);?></span>
                <h4><?php the_title();?></h4>
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
          <?php 
                    endwhile;?> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php }else{ ?>
    <section class="o-hidden p-0" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="portfolio-filter">
          <button data-filter="" class="is-checked"><?php echo esc_html__( 'All', 'loptus' );?></button>
          <?php 
              $categories = get_terms('type');   
               foreach( (array)$categories as $categorie){
                  $cat_name = $categorie->name;
                  $cat_slug = $categorie->slug;
          ?>
          <button data-filter=".<?php echo esc_attr($cat_slug);?>"><?php echo esc_attr($cat_name);?></button>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="grid columns-3 row no-gutters popup-gallery">
          <div class="grid-sizer"></div>
          <?php 
            $args = array(   
                        'post_type' => 'portfolio',   
                        'paged' => $paged,
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                    $cates = get_the_terms(get_the_ID(),'type');
                    $cate_name ='';
                    $cate_slug = '';
                          foreach((array)$cates as $cate){
                if(count($cates)>0){
                    $cate_name .= $cate->name.'  ' ;
                    $cate_slug .= $cate->slug .' ';     
                    } 
                    }
    ?>
          <div class="grid-item <?php echo esc_attr($cate_slug);?>">
            <div class="portfolio-item">
              <img class="img-center w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Image">
              <div class="portfolio-title"> <span><?php echo esc_attr($cate_name);?></span>
                <h4><?php the_title();?></h4>
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
          <?php 
                    endwhile;?> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php  return ob_get_clean();
} 

add_shortcode('case', 'case_func');
function case_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
        'number'        =>      '3',
        'orderpost' => '',
        'orderby' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    $loptus_redux_demo = get_option('redux_demo');
    ?>
    <?php if($type=='type2'){ ?>
    <section class="pos-r o-hidden" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2> 
          <p class="mb-0"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
         <div class="owl-carousel owl-theme owl-center" data-items="3" data-md-items="2" data-sm-items="1" data-dots="false" data-nav="true" data-autoplay="true">
          <?php 
            $args = array(   
                        'post_type' => 'case',   
                        'paged' => $paged,
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
    ?>
          <div class="item">
            <div class="cases-item">
              <div class="cases-images">
                <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Image">
              </div>
              <div class="cases-description">
                <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
              </div>
            </div>
          </div>
          <?php 
                    endwhile;?> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php }else{ ?>
    <section class="o-hidden dark-bg custom-pb-18 animatedBackground" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title mb-0">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2> 
          <p class="mb-0 text-white"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="o-hidden pt-0 custom-mt-10 pos-r z-index-1">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="owl-carousel owl-theme owl-center" data-items="4" data-md-items="2" data-sm-items="2" data-center="true" data-dots="false" data-nav="true" data-autoplay="true">
        <?php 
            $args = array(   
                        'post_type' => 'case',   
                        'paged' => $paged,
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
    ?>
          <div class="item">
            <div class="cases-item">
              <div class="cases-images">
                <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Image">
              </div>
              <div class="cases-description">
                <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
              </div>
            </div>
          </div>
          <?php 
                    endwhile;?> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php  return ob_get_clean();
} 

add_shortcode('case2', 'case2_func');
function case2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'text' => '',
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
        'number'        =>      '3',
        'orderpost' => '',
        'orderby' => '',
        'type' => 'type1',
        'full_width' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    $loptus_redux_demo = get_option('redux_demo');
    ?>
    <section class="pos-r o-hidden" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="insideText"><?php echo htmlspecialchars_decode(esc_attr($text));?></div>
  <?php if($full_width){ ?>
  <div class="container-fluid">
  <?php }else{ ?>
  <div class="container">
  <?php } ?>
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2> 
          <p class="mb-0"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        </div>
      </div>
    </div>
    <div class="row">
    <?php 
            $args = array(   
                        'post_type' => 'case',   
                        'paged' => $paged,
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
    ?>
    <?php if($type=='type2'){ ?>
      <div class="col-lg-6 col-md-6 mb-5">
      <?php }else{ ?>
      <div class="col-lg-4 col-md-6 mb-5">
      <?php } ?>
        <div class="cases-item">
          <div class="cases-images">
            <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Image">
          </div>
          <div class="cases-description">
            <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
          </div>
        </div>
      </div>
      <?php 
                    endwhile;?> 
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 


add_shortcode('team', 'team_func');
function team_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'number'        =>      '3',
        'orderpost' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    $loptus_redux_demo = get_option('redux_demo');
    ?>
    
<section class="bg-contain" data-bg-img="<?php echo esc_url($images[0]);?>">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2> 
        </div>
      </div>
    </div>
    <div class="row">
    <?php 
            $args = array(   
                        'post_type' => 'team',   
                        'paged' => $paged,
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 0;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
                    $i++;
    ?>
    <?php $team_position = get_post_meta(get_the_ID(),'_cmb_team_position', true); ?>
<?php $team_facebook = get_post_meta(get_the_ID(),'_cmb_team_facebook', true); ?>
<?php $team_twitter = get_post_meta(get_the_ID(),'_cmb_team_twitter', true); ?>
<?php $team_google = get_post_meta(get_the_ID(),'_cmb_team_google', true); ?>
<?php $team_linkedin = get_post_meta(get_the_ID(),'_cmb_team_linkedin', true); ?>
      <div class="col-lg-4 col-md-12 mb-5">
        <div class="team-member <?php if($i==2 || $i==5 || $i==8){echo "active";} ?> ">
          <div class="team-images">
            <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Image">
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
      <?php 
                    endwhile;?> 
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 


add_shortcode('blog', 'blog_func');
function blog_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'number'        =>      '3',
        'orderpost' => '',
        'orderby' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
$loptus_redux_demo = get_option('redux_demo');
    ?>
<?php if($type=='type2'){ ?>
<section class="grey-bg pos-r o-hidden">
  <div class="insideText"><?php echo htmlspecialchars_decode(esc_attr($title));?></div>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2>
          <p class="mb-0 text-black"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        </div>
      </div>
    </div>
    <div class="row post-desc-home">
    <?php 
          $args = array(    
              'paged' => $paged,
              'posts_per_page' => $number,
              'order' => $orderpost,
              'orderby' => $orderby, 
              'post_type' => 'post',
              );
          $wp_query = new WP_Query($args);
          $i=1;
          while ($wp_query -> have_posts()): $wp_query -> the_post();
      ?>
      <div class="col-lg-4 col-md-12">
        <div class="post">
        <?php if ( has_post_thumbnail() ) { ?>
          <div class="post-image">
            <img class="img-fluid h-100 w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Image">
          </div>
          <?php } ?>
          <div class="post-desc">
            <div class="post-date"><?php the_time(get_option( 'date_format' ));?>
            </div>
            <div class="post-title">
              <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
            </div>
            <p><?php echo esc_attr(loptus_excerpt1(20)); ?></p>
            <a class="btn btn-theme mt-2" href="<?php the_permalink();?>"><?php if(isset($loptus_redux_demo['read_more'])){?>
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
<?php }else{ ?>
    <section>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
          <h2 class="title"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h2>
          <p class="mb-0 text-black"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        </div>
      </div>
    </div>
    <div class="row post-desc-home">
    <?php 
          $args = array(    
              'paged' => $paged,
              'posts_per_page' => $number,
              'order' => $orderpost,
              'orderby' => $orderby, 
              'post_type' => 'post',
              );
          $wp_query = new WP_Query($args);
          $i=1;
          while ($wp_query -> have_posts()): $wp_query -> the_post();
      ?>
      <div class="col-lg-4 col-md-12">
        <div class="post">
        <?php if ( has_post_thumbnail() ) { ?>
          <div class="post-image">
            <img class="img-fluid h-100 w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Image">
          </div>
          <?php } ?>
          <div class="post-desc">
            <div class="post-date"><?php the_time(get_option( 'date_format' ));?>
            </div>
            <div class="post-title">
              <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
            </div>
            <p><?php echo esc_attr(loptus_excerpt1(20)); ?></p>
            <a class="btn btn-theme mt-2" href="<?php the_permalink();?>"><?php if(isset($loptus_redux_demo['read_more'])){?>
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
<?php } ?>


<?php  return ob_get_clean();
} 

add_shortcode('contact1', 'contact1_func');
function contact1_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'details' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <ul class="contact-info list-unstyled">
    <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
                $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
                $new_line['icon'] = isset($new_line['icon']) ? $new_line['icon'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
                        ?>
      <li class="mb-4"><i class="<?php echo htmlspecialchars_decode(esc_attr($accordion['icon']));?>"></i><span><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></span>
        <p><?php echo htmlspecialchars_decode(esc_attr($accordion['subtitle']));?></p>
      </li>
      <?php endforeach;
                  wp_reset_query(); ?>
    </ul>

<?php  return ob_get_clean();
} 

add_shortcode('contact2', 'contact2_func');
function contact2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'details' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $details = vc_param_group_parse_atts($atts['details']);
    ?> 
    <section class="form-info text-center">
  <div class="container">
    <div class="row">
    <?php $new_accordion_value = array();
              foreach($details as $data){
                $new_line = $data;
                $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
                $new_line['loaction'] = isset($new_line['loaction']) ? $new_line['loaction'] : '';
                $new_line['phone'] = isset($new_line['phone']) ? $new_line['phone'] : '';
                $new_line['email'] = isset($new_line['email']) ? $new_line['email'] : '';
             
                $new_accordion_value[] = $new_line;
             
              }
             
              $idd = 0;
              foreach($new_accordion_value as $accordion):
              $idd++;
                        ?>
      <div class="col-lg-4 col-md-12">
        <div class="info-inner">
          <h3 class="title"><?php echo htmlspecialchars_decode(esc_attr($accordion['title']));?></h3>
          <ul class="contact-info list-inline">
            <li class="mb-3"><p><?php echo htmlspecialchars_decode(esc_attr($accordion['location']));?></p>              
            </li>
            <li class="mb-3"><a href="tel:<?php echo htmlspecialchars_decode(esc_attr($accordion['phone']));?>"><?php echo htmlspecialchars_decode(esc_attr($accordion['phone']));?></a>
            </li>
            <li><a href="mailto:<?php echo htmlspecialchars_decode(esc_attr($accordion['email']));?>"> <?php echo htmlspecialchars_decode(esc_attr($accordion['email']));?></a>
            </li>
          </ul>
        </div>
      </div>
      <?php endforeach;
                  wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php  return ob_get_clean();
} 

add_shortcode('map', 'map_func');
function map_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'image' => '',
        'lat' => '',
        'long' => '',
        'zoom' => '',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    $images = wp_get_attachment_image_src($image,'');
    ?>  
    <section class="o-hidden p-0">
  <div class="container-fluid p-0">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="map-canvas iframe-h-2"
                data-zoom="<?php echo esc_attr($zoom); ?>"
                data-lat="<?php echo esc_attr($lat); ?>"
                data-lng="<?php echo esc_attr($long); ?>"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="<?php echo esc_url($images[0]);?>"
                data-content="<?php echo esc_attr($title); ?>">
            </div>
            </div>
            </div>
          </div>
        </section>

<?php  return ob_get_clean();
} 

add_shortcode('map2', 'map2_func');
function map2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'image' => '',
        'lat' => '',
        'long' => '',
        'zoom' => '',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    $images = wp_get_attachment_image_src($image,'');
    ?>  
    <div class="map-canvas md-iframe" data-zoom="<?php echo esc_attr($zoom); ?>" data-lat="<?php echo esc_attr($lat); ?>" data-lng="<?php echo esc_attr($long); ?>" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="<?php echo esc_url($images[0]);?>" data-content="<?php echo esc_attr($title); ?>"></div>

<?php  return ob_get_clean();
} 