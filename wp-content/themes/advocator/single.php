<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>

<div id="primary" class="content-area">

  <div class="row" role="main">

    <div class="large-12 columns inner_content">

		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

      <div class="clearfix"></div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	<?php get_search_form(); ?>
    </div><!-- .inner_content .large-12 -->

  </div><!-- .row -->

</div><!-- #primary -->

<?php get_footer(); ?>
