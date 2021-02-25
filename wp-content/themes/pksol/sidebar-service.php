<?php
/**
 * The Sidebar containing the main widget area
 */
?>
<?php if ( is_active_sidebar( 'service' ) ) : ?>
	<?php dynamic_sidebar( 'service' ); ?>
<?php endif; ?> 