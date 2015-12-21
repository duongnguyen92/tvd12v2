<?php
/**
 * Welcome screen changelog template
 */
?>

<div id="changelog" class="advocator-changelog panel">

	<div class="changelog-intro">

		<h3><?php _e( 'Version Update Details', 'rescue' ); ?> </h3>
		<p><?php _e( 'Review Advocator version details and release dates.', 'rescue' ); ?></p>

	</div><!-- .changelog-intro -->

	<div class="content-section">

		<?php
		/**
		 * Display the changelog file from the theme
		 */
			echo wp_kses_post ( $this->advocator_changlog() );
		?>

	</div><!-- .content-section -->

</div><!-- #changelog -->
