<?php
/**
 * Events Pro List Widget Template
 * This is the template for the output of the events list widget.
 * All the items are turned on and off through the widget admin.
 * There is currently no default styling, which is highly needed.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/widgets/list-widget.php
 *
 * When the template is loaded, the following vars are set:
 *
 * @var string $start
 * @var string $end
 * @var string $venue
 * @var string $address
 * @var string $city
 * @var string $state
 * @var string $province
 * @var string $zip
 * @var string $country
 * @var string $phone
 * @var string $cost
 * @var array  $instance
 *
 * @package TribeEventsCalendarPro
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Retrieves the posts used in the List Widget loop.
$posts = tribe_get_list_widget_events();

// The URL for this widget's "View More" link.
$link_to_all = tribe_events_get_list_widget_view_all_link( $instance );

// Check if any posts were found.
if ( isset( $posts ) && $posts ) :

	foreach ( $posts as $post ) :
		setup_postdata( $post );
		do_action( 'tribe_events_widget_list_inside_before_loop' ); ?>

<ol class="hfeed vcalendar clearfix">
<div class="<?php if ( is_front_page() ) { echo "medium-4"; } else { echo "large-12"; } ?> columns">
	<li class="tribe-events-list-widget-events <?php tribe_events_event_classes() ?>">
	
		<?php do_action( 'tribe_events_list_widget_before_the_event_title' ); ?>

		<a class="link_hover" href="<?php echo esc_url( tribe_get_event_link() ); ?>">
		<?php echo rescue_tribe_event_featured_image(null, 'large') ?>
		</a>

		<!-- Event Title -->
		<h5 class="entry-title summary">
			<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h5>

		<?php do_action( 'tribe_events_list_widget_after_the_event_title' ); ?>

		<?php do_action( 'tribe_events_list_widget_before_the_meta' ) ?>

		<div class="duration">
			<?php echo tribe_events_event_schedule_details(); ?>
		</div>

		<?php if ( isset( $cost ) && $cost && tribe_get_cost() != '' ) : ?>
			<span class="tribe-events-divider">|</span>
			<div class="tribe-events-event-cost">
				<?php echo tribe_get_cost( null, true ); ?>
			</div>
		<?php endif ?>
		
		<div class="vcard adr location">

			<?php if ( isset( $venue ) && $venue && tribe_get_venue() != '' ): ?>
				<span class="fn org tribe-venue"><?php echo tribe_get_venue_link(); ?></span>
			<?php endif ?>

			<?php if ( isset( $address ) && $address && tribe_get_address() != '' ): ?>
				<span class="street-address"><?php echo tribe_get_address(); ?></span>
			<?php endif ?>

			<?php if ( isset( $city ) && $city && tribe_get_city() != '' ): ?>
				<span class="locality"><?php echo tribe_get_city(); ?></span>
			<?php endif ?>

			<?php if ( isset( $region ) && $region && tribe_get_region() != '' ): ?>
				<span class="region"><?php echo tribe_get_region(); ?></span>
			<?php endif ?>

			<?php if ( isset( $zip ) && $zip && tribe_get_zip() != '' ): ?>
				<span class="postal-code"><?php echo tribe_get_zip(); ?></span>
			<?php endif ?>

			<?php if ( isset( $country ) && $country && tribe_get_country() != '' ): ?>
				<span class="country-name"><?php echo tribe_get_country(); ?></span>
			<?php endif ?>

			<?php if ( isset( $organizer ) && $organizer && tribe_get_organizer() != '' ): ?>
				<span class="tribe-organizer">
					<?php _e( 'Organizer:', 'rescue' ); ?>
					<?php echo tribe_get_organizer_link(); ?>
				</span>
			<?php endif ?>

			<?php if ( isset( $phone ) && $phone && tribe_get_phone() != '' ): ?>
				<span class="tel"><?php echo tribe_get_phone(); ?></span>
			<?php endif ?>

		</div> <!-- .vcard.adr.location -->

		<?php do_action( 'tribe_events_list_widget_after_the_meta' ) ?>
		
	</li>
</div>

<?php do_action( 'tribe_events_widget_list_inside_after_loop' ) ?>

<?php endforeach; ?>
</ol><!-- .hfeed -->

	<p class="tribe-events-widget-link">
		<a class="button radius" href="<?php esc_attr_e( esc_url( $link_to_all ) ) ?>" rel="bookmark">
			<?php _e( 'View More&hellip;', 'rescue' ) ?>
		</a>
	</p>

<?php
// No Events were found.
else:
?>
	<p><?php printf( __( 'There are no upcoming %s at this time.', 'rescue' ), strtolower( tribe_get_event_label_plural() ) ); ?></p>
<?php
endif;

// Cleanup. Do not remove this.
wp_reset_postdata();