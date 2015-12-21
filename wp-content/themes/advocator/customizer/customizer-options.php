<?php
/**
 * Defines customizer options
 *
 * @package Customizer_Library
 */

function customizer_library_rescue_options() {

	// Theme defaults
	$primary_color = '#e8554e';
	$secondary_color = '#666';
	$top_header = '#2c3135';
	$primary_green = '#1fa67a';
	$primary_green_hover = '#198562';
	$donation_bg = '#f1c40f';
	$donation_border = '#e2b709';
	$home_top_widgets_bg = '#34495e';
	$home_top_widgets_hover = '#a2da08';
	$social_icon = '#aaaaaa';
	$white = '#ffffff';
	$top_nav_link_color = '#888888';

	// Categories
    $categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}

    // Animations
    $animate = array(
        'none' => __('none', 'rescue'),
        'bounce' => __('bounce', 'rescue'),
        'flash' => __('flash', 'rescue'),
        'pulse' => __('pulse', 'rescue'),
        'shake' => __('shake', 'rescue'),
        'wobble' => __('wobble', 'rescue'),
        'bounceIn' => __('bounceIn', 'rescue'),
        'bounceInDown' => __('bounceInDown', 'rescue'),
        'bounceInLeft' => __('bounceInLeft', 'rescue'),
        'bounceInRight' => __('bounceInRight', 'rescue'),
        'bounceInUp' => __('bounceInUp', 'rescue'),
        'fadeIn' => __('fadeIn', 'rescue'),
        'fadeInDown' => __('fadeInDown', 'rescue'),
        'fadeInDownBig' => __('fadeInDownBig', 'rescue'),
        'fadeInLeft' => __('fadeInLeft', 'rescue'),
        'fadeInLeftBig' => __('fadeInLeftBig', 'rescue'),
        'fadeInRight' => __('fadeInRight', 'rescue'),
        'fadeInRightBig' => __('fadeInRightBig', 'rescue'),
        'fadeInUp' => __('fadeInUp', 'rescue'),
        'fadeInUpBig' => __('fadeInUpBig', 'rescue'),
        'lightSpeedIn' => __('lightSpeedIn', 'rescue'),
        'lightSpeedOut' => __('lightSpeedOut', 'rescue'),
        'rotateIn' => __('rotateIn', 'rescue'),
        'rotateInDownLeft' => __('rotateInDownLeft', 'rescue'),
        'rotateInDownRight' => __('rotateInDownRight', 'rescue'),
        'rotateInUpLeft' => __('rotateInUpLeft', 'rescue'),
        'rotateInUpRight' => __('rotateInUpRight', 'rescue'),
        'zoomIn' => __('zoomIn', 'rescue'),
        'zoomInDown' => __('zoomInDown', 'rescue'),
        'zoomInLeft' => __('zoomInLeft', 'rescue'),
        'zoomInRight' => __('zoomInRight', 'rescue'),
        'zoomInUp' => __('zoomInUp', 'rescue')
    );

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Image path defaults=
	$imagepath =  get_template_directory_uri() . '/img/';

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Header
	$section = 'header';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Header', 'rescue' ),
		'priority' 		=> '30',
		'description' 	=> __( 'Header area options', 'rescue' ),
		'panel' 		=> 'theme_options',
	);

	$options['header_logo'] = array(
		'id' 		=> 'header_logo',
		'label'   	=> __( 'Logo', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'upload',
		'default' 	=> '',
	);

	$options['header_top_bg_color'] = array(
		'id' 		=> 'header_top_bg_color',
		'label'   	=> __( 'Top header background color', 'rescue' ),
		'section'	=> $section,
		'type'    	=> 'color',
		'default'	=> $top_header,
		'transport'	=> 'postMessage',
	);

	$options['header_top_nav_link_color'] = array(
		'id' 		=> 'header_top_nav_link_color',
		'label'   	=> __( 'Top header Navigation Link Color', 'rescue' ),
		'section'	=> $section,
		'type'    	=> 'color',
		'default'	=> $top_nav_link_color,
		'transport'	=> 'postMessage',
	);

	$options['header_top_nav_link_color_hover'] = array(
		'id' 		=> 'header_top_nav_link_color_hover',
		'label'   	=> __( 'Top header Navigation Link Hover Color', 'rescue' ),
		'section'	=> $section,
		'type'    	=> 'color',
		'default'	=> $white,
	);

	$options['header_bottom_bg_color'] = array(
		'id' 		=> 'header_bottom_bg_color',
		'label'   	=> __( 'Bottom header background color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $primary_green,
		'transport'	=> 'postMessage',
	);

	$options['header_bottom_nav_link_color'] = array(
		'id' 		=> 'header_bottom_nav_link_color',
		'label'   	=> __( 'Bottom Header Navigation Link Color', 'rescue' ),
		'section'	=> $section,
		'type'    	=> 'color',
		'default'	=> $white,
		'transport'	=> 'postMessage',
	);

	$options['header_bottom_nav_dropdown_indicator'] = array(
		'id' => 'header_bottom_nav_dropdown_indicator',
		'label'   	=> __( 'Check to remove the dropdown indicator circle', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'checkbox',
		'default' 	=> 0,
	);

	$options['donation_button_show'] = array(
		'id' => 'donation_button_show',
		'label'   	=> __( 'Display donation button', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'checkbox',
		'default' 	=> 0,
	);

	$options['donate_button_text'] = array(
		'id' 		=> 'donate_button_text',
		'label'   	=> __( 'Text for donation button', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> 'Donate Now',
		'transport'	=> 'postMessage',
	);

	$options['donation_button_link'] = array(
		'id' 		=> 'donation_button_link',
		'label'   	=> __( 'Link for donation button', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text'
	);

	$options['donation_button_target'] = array(
		'id' 		=> 'donation_button_target',
		'label'   	=> __( 'Select to open link in new window.', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'checkbox',
		'default' 	=> 0,
	);

	$options['donate_bg_color'] = array(
		'id' 		=> 'donate_bg_color',
		'label'   	=> __( 'Select the donation button color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $donation_bg,
		'transport'	=> 'postMessage',
	);

	$options['donate_border_color'] = array(
		'id' 		=> 'donate_border_color',
		'label'   	=> __( 'Select the donation button bottom border color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $donation_border,
		'transport'	=> 'postMessage',
	);

	$options['donate_bg_color_hover'] = array(
		'id' 		=> 'donate_bg_color_hover',
		'label'   	=> __( 'Select the donation button hover color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $donation_border,
	);

	$options['donate_border_color_hover'] = array(
		'id' 		=> 'donate_border_color_hover',
		'label'   	=> __( 'Select the donation button bottom border hover color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $donation_border,
	);

    $options['donate_button_animate'] = array(
        'id' 		=> 'donate_button_animate',
        'label'   	=> __( 'Donation button animation effect', 'rescue' ),
        'section' 	=> $section,
        'type'    	=> 'select',
        'choices' 	=> $animate,
        'default' 	=> 'fadeInRight',
    );

	// Home Top Widgets
	$section = 'home-top-widgets';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Home Top Widgets', 'rescue' ),
		'priority' 		=> '40',
		'description' 	=> __( 'This section will display on the home page once widgets are added to it in the widgets section.', 'rescue' ),
		'panel' 		=> 'theme_options'
	);

	$options['home_top_widgets_bg'] = array(
		'id' 		=> 'home_top_widgets_bg',
		'label'   	=> __( 'Select the home top widgets background color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $home_top_widgets_bg,
		'transport'	=> 'postMessage',
	);

	$options['home_top_widgets_hover'] = array(
		'id' 		=> 'home_top_widgets_hover',
		'label'   	=> __( 'Select the home top widgets text hover color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $home_top_widgets_hover
	);

    $options['home_top_widgets_animation'] = array(
        'id' 		=> 'home_top_widgets_animation',
        'label'   	=> __( 'Home top widget section animation effect', 'rescue' ),
        'section' 	=> $section,
        'type'    	=> 'select',
        'choices' 	=> $animate,
        'default' 	=> 'none',
    );

    // Home Events
	$section = 'home-events';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Home Events', 'rescue' ),
		'priority' 		=> '40',
		'description' 	=> __( 'Home events section options', 'rescue' ),
		'panel' 		=> 'theme_options'
	);

    $options['home_events_animation'] = array(
        'id' 		=> 'home_events_animation',
        'label'   	=> __( 'Home events section animation effect', 'rescue' ),
        'section' 	=> $section,
        'type'    	=> 'select',
        'choices' 	=> $animate,
        'default' 	=> 'none',
    );

	$options['home_events_img_border'] = array(
		'id' 		=> 'home_events_img_border',
		'label'   	=> __( 'Select to display event images as square.', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'checkbox',
		'default' 	=> 0,
	);

	// Home News
	$section = 'home-news';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Home News', 'rescue' ),
		'priority' 		=> '40',
		'description' 	=> __( 'Home blog posts options', 'rescue' ),
		'panel' 		=> 'theme_options'
	);

	$options['home_news_show'] = array(
		'id' 		=> 'home_news_show',
		'label'   	=> __( 'Display home news section', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'checkbox',
		'default' 	=> 0,
	);

	$options['home_news_title'] = array(
		'id' 		=> 'home_news_title',
		'label'   	=> __( 'Title of the home page news section', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> 'Latest News Releases',
		'transport'	=> 'postMessage',
	);

	$options['home_blog_category'] = array(
		'id' 		=> 'home_blog_category',
		'label'   	=> __( 'Category for your home blog posts', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'select',
		'choices' 	=> $cats,
	);

	$options['home_blog_num'] = array(
		'id' 		=> 'home_blog_num',
		'label'   	=> __( 'Number of posts to display', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '1',
	);

	$options['home_news_link'] = array(
		'id' 		=> 'home_news_link',
		'label'   	=> __( 'Link to blog page', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['home_news_button_text'] = array(
		'id' 		=> 'home_news_button_text',
		'label'   	=> __( 'Blog page button text', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> 'View all news',
		'transport'	=> 'postMessage',
	);

    $options['home_news_animation'] = array(
        'id' 		=> 'home_news_animation',
        'label'   	=> __( 'Home news section animation effect', 'rescue' ),
        'section' 	=> $section,
        'type'    	=> 'select',
        'choices' 	=> $animate,
        'default' 	=> 'none',
    );

	// Home Gallery
	$section = 'home-gallery';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Home Gallery', 'rescue' ),
		'priority' 		=> '50',
		'description' 	=> __( 'Activate the Rescue Portfolio plugin and add portfolio posts to display gallery images on the home page', 'rescue' ),
		'panel' 		=> 'theme_options',
	);

	$options['home_gallery_show'] = array(
		'id' 		=> 'home_gallery_show',
		'label'   	=> __( 'Display home gallery section', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'checkbox',
		'default' 	=> 0,
	);

	$options['home_gallery_title'] = array(
		'id' 		=> 'home_gallery_title',
		'label'   	=> __( 'Title of the home page image gallery section', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> 'Latest Gallery Images',
		'transport'	=> 'postMessage',
	);

	$options['home_gallery_qty'] = array(
		'id' 		=> 'home_gallery_qty',
		'label'   	=> __( 'Number of gallery images to display on home page', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '3',
	);

	$options['home_gallery_link'] = array(
		'id' 		=> 'home_gallery_link',
		'label'   	=> __( 'Enter the link to your gallery page', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['home_gallery_button_text'] = array(
		'id' 		=> 'home_gallery_button_text',
		'label'   	=> __( 'Enter the text for your gallery button', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> 'View All Images',
		'transport'	=> 'postMessage',
	);

    $options['home_gallery_animation'] = array(
        'id' 		=> 'home_gallery_animation',
        'label'   	=> __( 'Home gallery section animation effect', 'rescue' ),
        'section' 	=> $section,
        'type'    	=> 'select',
        'choices' 	=> $animate,
        'default' 	=> 'none',
    );

	// Typography
	$section = 'typography';
	$font_choices = customizer_library_get_font_choices();

	$sections[] = array(
		'id' 		=> $section,
		'title' 	=> __( 'Typography', 'rescue' ),
		'priority' 	=> '60',
		'panel' 	=> 'theme_options',
	);

	$options['primary-font'] = array(
		'id' 		=> 'primary-font',
		'label'   	=> __( 'Header Font', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'select',
		'choices' 	=> $font_choices,
		'default' 	=> 'Open Sans',
		'transport'	=> 'postMessage',
	);

	$options['primary-font-color'] = array(
		'id' 		=> 'primary-font-color',
		'label'   	=> __( 'Header Font Color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $home_top_widgets_bg,
		'transport'	=> 'postMessage',
	);

	$options['secondary-font'] = array(
		'id' 		=> 'secondary-font',
		'label'   	=> __( 'Paragraph Font', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'select',
		'choices' 	=> $font_choices,
		'default' 	=> 'Open Sans',
		'transport'	=> 'postMessage',
	);

	$options['link_hover_color'] = array(
		'id' 		=> 'link_hover_color',
		'label'   	=> __( 'Post/Page Content link hover color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $primary_green,
	);

	$options['button_color'] = array(
		'id' 		=> 'button_color',
		'label'   	=> __( 'Sitewide buttons color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $primary_green,
		'transport'	=> 'postMessage',
	);

	$options['main_button_hover'] = array(
		'id' 		=> 'main_button_hover',
		'label'   	=> __( 'Sitewide button hover color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $primary_green_hover,
	);

	// Footer
	$section = 'footer';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Footer', 'rescue' ),
		'priority' 		=> '70',
		'description' 	=> __( 'Footer area options', 'rescue' ),
		'panel' 		=> 'theme_options',
	);

	$options['footer_bg_color'] = array(
		'id' 		=> 'footer_bg_color',
		'label'   	=> __( 'Footer background color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $top_header,
		'transport'	=> 'postMessage',
	);

    $options['footer_social_animation'] = array(
        'id' 		=> 'footer_social_animation',
        'label'   	=> __( 'Home social icons animation effect', 'rescue' ),
        'section' 	=> $section,
        'type'    	=> 'select',
        'choices' 	=> $animate,
        'default' 	=> 'none',
    );

	$options['footer_social_color'] = array(
		'id' 		=> 'footer_social_color',
		'label'   	=> __( 'Social Icons Color', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $social_icon,
		'transport'	=> 'postMessage',
	);

	$options['footer_social_color_hover'] = array(
		'id' 		=> 'footer_social_color_hover',
		'label'   	=> __( 'Social Icons Color Hover', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $white,
	);

	$options['twitter_link'] = array(
		'id' 		=> 'twitter_link',
		'label'   	=> __( 'Enter a Twitter link', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['facebook_link'] = array(
		'id' 		=> 'facebook_link',
		'label'   	=> __( 'Enter a Facebook link', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['google_link'] = array(
		'id' 		=> 'google_link',
		'label'   	=> __( 'Enter a Google link', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['instagram_link'] = array(
		'id' 		=> 'instagram_link',
		'label'   	=> __( 'Enter a Instagram link', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['vimeo_link'] = array(
		'id' 		=> 'vimeo_link',
		'label'   	=> __( 'Enter a Vimeo link', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['youtube_link'] = array(
		'id' 		=> 'youtube_link',
		'label'   	=> __( 'Enter a Youtube link', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['pinterest_link'] = array(
		'id' 		=> 'pinterest_link',
		'label'   	=> __( 'Enter a Pinterest link', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['linkedin_link'] = array(
		'id' 		=> 'linkedin_link',
		'label'   	=> __( 'Enter a LinkedIn link', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'text',
		'default' 	=> '',
	);

	$options['footer_copyright'] = array(
		'id' 		=> 'footer_copyright',
		'label'   	=> __( 'Enter footer copyright text.', 'rescue' ),
		'section' 	=> $section,
		'type'    	=> 'textarea',
		'default' 	=> '&#169; Copyright',
	);


	// Custom CSS
	$section = 'Custom-css';

	$sections[] = array(
		'id' 			=> $section,
		'title'		 	=> __( 'Custom CSS', 'rescue' ),
		'priority' 		=> '80',
		'description' 	=> __( 'Enter custom CSS styles', 'rescue' ),
		'panel' 		=> 'theme_options',
	);

	$options['custom_css_textarea'] = array(
		'id' 			=> 'custom_css_textarea',
		'label'   		=> __( 'Custom CSS', 'rescue' ),
		'section' 		=> $section,
		'type'    		=> 'textarea',
		'default' 		=> ''
	);


	// Adds the sections to the $options array
	$options['sections'] = $sections;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_rescue_options' );
