<?php
/**
 * Template Name: Page contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

 <div id="" role="main">

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
       <div class="row">
       	<div class="small-12 large-6 columns">
       		<?php the_content(); ?>
       	</div>
		<div class="small-12 large-6 columns">
			<?php echo do_shortcode(_FORM_CONTACT); ?>
       	</div>
       </div>
   </article>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>
 <?php //get_sidebar(); ?>




 </div>

 <?php get_footer();
