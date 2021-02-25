<?php
/*
 * Template Name: Other Page
 * Description: A Page Template with a Page Builder design.
 */
 $loptus_redux_demo = get_option('redux_demo');
get_header(''); ?>
<?php $page_image = get_post_meta(get_the_ID(),'_cmb_page_image', true); ?>
<?php $page_desc = get_post_meta(get_the_ID(),'_cmb_page_desc', true); ?>
<!-- default page header -->
<?php if($page_image !=''){?>
<section class="page-title o-hidden text-center grey-bg bg-contain animatedBackground" data-bg-img="<?php echo esc_url($page_image);?>">
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

<?php if (have_posts()){ ?>
	
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	
	<?php }else {
		echo esc_html__( 'Page Canvas For Page Builder', 'loptus' );
	}?>
<?php get_footer(); ?>