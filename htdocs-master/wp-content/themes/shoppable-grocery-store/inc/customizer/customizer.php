<?php
/**
 * Enqueue customizer css.
 */

function shoppable_grocery_store_customize_enqueue_style() {

	wp_enqueue_style( 'shoppable-grocery-store-customize-controls', get_stylesheet_directory_uri() . '/inc/customizer/customizer.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'shoppable_grocery_store_customize_enqueue_style', 99 );

/**
 * Kirki Customizer
 *
 * @return void
 */
add_action( 'init' , 'shoppable_grocery_store_kirki_fields', 999, 1 );

function shoppable_grocery_store_kirki_fields(){

	/**
	* If kirki is not installed do not run the kirki fields
	*/

	if ( !class_exists( 'Kirki' ) ) {
		return;
	}
	//Departments
	Kirki::add_section( 'blog_departments', array(
	    'title'          => esc_html__( 'Departments', 'shoppable-grocery-store' ),
	    'description'  	 => esc_html__( 'WooCommerce plugin is required for this section.', 'shoppable-grocery-store' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 26,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Departments Section', 'shoppable-grocery-store' ),
		'type'         => 'toggle',
		'settings'     => 'departments_section',
		'section'      => 'blog_departments',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'departments_one_general_separator',
	    'section'     => 'blog_departments',
	    'default'     => esc_html__( 'Department One Section', 'shoppable-grocery-store' ),
	    'priority'	  => 20,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Department Title One', 'shoppable-grocery-store' ),
		'type'        => 'text',
		'settings'    => 'departments_title_one',
		'section'     => 'blog_departments',
		'default'     => '',
		'priority'	   => 30,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Image One', 'shoppable-grocery-store' ),
		'type'         => 'image',
		'settings'     => 'departments_image_one',
		'section'      => 'blog_departments',
		'default'      => '',
		'priority'	   => 40,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Category One', 'shoppable-grocery-store' ),
		'type'        => 'select',
		'settings'    => 'departments_category_one',
		'section'     => 'blog_departments',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Category One', 'shoppable-grocery-store' ),
		'choices'     => shoppable_grocery_store_get_product_categories(),
		'priority'	  => 50,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Image Two', 'shoppable-grocery-store' ),
		'type'         => 'image',
		'settings'     => 'departments_image_two',
		'section'      => 'blog_departments',
		'default'      => '',
		'priority'	   => 60,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Category Two', 'shoppable-grocery-store' ),
		'type'        => 'select',
		'settings'    => 'departments_category_two',
		'section'     => 'blog_departments',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Category Two', 'shoppable-grocery-store' ),
		'choices'     => shoppable_grocery_store_get_product_categories(),
		'priority'	  => 70,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Image Three', 'shoppable-grocery-store' ),
		'type'         => 'image',
		'settings'     => 'departments_image_three',
		'section'      => 'blog_departments',
		'default'      => '',
		'priority'	   => 80,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Category Three', 'shoppable-grocery-store' ),
		'type'        => 'select',
		'settings'    => 'departments_category_three',
		'section'     => 'blog_departments',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Category Three', 'shoppable-grocery-store' ),
		'choices'     => shoppable_grocery_store_get_product_categories(),
		'priority'	  => 90,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Image Four', 'shoppable-grocery-store' ),
		'type'         => 'image',
		'settings'     => 'departments_image_four',
		'section'      => 'blog_departments',
		'default'      => '',
		'priority'	   => 100,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Category Four', 'shoppable-grocery-store' ),
		'type'        => 'select',
		'settings'    => 'departments_category_four',
		'section'     => 'blog_departments',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Category Four', 'shoppable-grocery-store' ),
		'choices'     => shoppable_grocery_store_get_product_categories(),
		'priority'	  => 110,
	) );

	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'departments_two_general_separator',
	    'section'     => 'blog_departments',
	    'default'     => esc_html__( 'Department Two', 'shoppable-grocery-store' ),
	    'priority'	  => 120,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Department Title Two', 'shoppable-grocery-store' ),
		'type'        => 'text',
		'settings'    => 'departments_title_two',
		'section'     => 'blog_departments',
		'default'     => '',
		'priority'	   => 130,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Image Five', 'shoppable-grocery-store' ),
		'type'         => 'image',
		'settings'     => 'departments_image_five',
		'section'      => 'blog_departments',
		'default'      => '',
		'priority'	   => 140,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Category Five', 'shoppable-grocery-store' ),
		'type'        => 'select',
		'settings'    => 'departments_category_five',
		'section'     => 'blog_departments',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Category Five', 'shoppable-grocery-store' ),
		'choices'     => shoppable_grocery_store_get_product_categories(),
		'priority'	  => 150,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Image Six', 'shoppable-grocery-store' ),
		'type'         => 'image',
		'settings'     => 'departments_image_six',
		'section'      => 'blog_departments',
		'default'      => '',
		'priority'	   => 160,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Category Six', 'shoppable-grocery-store' ),
		'type'        => 'select',
		'settings'    => 'departments_category_six',
		'section'     => 'blog_departments',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Category Six', 'shoppable-grocery-store' ),
		'choices'     => shoppable_grocery_store_get_product_categories(),
		'priority'	  => 170,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Image Seven', 'shoppable-grocery-store' ),
		'type'         => 'image',
		'settings'     => 'departments_image_seven',
		'section'      => 'blog_departments',
		'default'      => '',
		'priority'	   => 180,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Category Seven', 'shoppable-grocery-store' ),
		'type'        => 'select',
		'settings'    => 'departments_category_seven',
		'section'     => 'blog_departments',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Category Seven ', 'shoppable-grocery-store' ),
		'choices'     => shoppable_grocery_store_get_product_categories(),
		'priority'	  => 190,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Image Eight', 'shoppable-grocery-store' ),
		'type'         => 'image',
		'settings'     => 'departments_image_eight',
		'section'      => 'blog_departments',
		'default'      => '',
		'priority'	   => 200,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Category Eight', 'shoppable-grocery-store' ),
		'type'        => 'select',
		'settings'    => 'departments_category_eight',
		'section'     => 'blog_departments',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Category Eight ', 'shoppable-grocery-store' ),
		'choices'     => shoppable_grocery_store_get_product_categories(),
		'priority'	  => 210,
	) );

	// Responsive for departments
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'departments_responsive_separator',
	    'section'     => 'blog_departments',
	    'default'     => esc_html__( 'Responsive', 'shoppable-grocery-store' ),
	    'priority'	  => 220,
	    'active_callback' => array(
			array(
				'setting'  => 'departments_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Departments Section', 'shoppable-grocery-store' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_departments',
		'section'      => 'blog_departments',
		'default'      => true,
		'priority'	   => 230,
		'active_callback' => array(
			array(
				'setting'  => 'departments_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	//views
	Kirki::add_section( 'blog_views', array(
	    'title'          => esc_html__( 'Views', 'shoppable-grocery-store' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 27,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Views Section', 'shoppable-grocery-store' ),
		'type'         => 'toggle',
		'settings'     => 'views_section',
		'section'      => 'blog_views',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 1', 'shoppable-grocery-store' ),
		'type'        => 'select',
		'settings'    => 'views_page_one',
		'section'     => 'blog_views',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 1', 'shoppable-grocery-store' ),
		'choices'     => shoppable_grocery_store_get_pages(),
		'priority'	  => 20,
	) );
		

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 2', 'shoppable-grocery-store' ),
		'type'        => 'select',
		'settings'    => 'views_page_two',
		'section'     => 'blog_views',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 2', 'shoppable-grocery-store' ),
		'choices'     => shoppable_grocery_store_get_pages(),
		'priority'	  => 30,
		
	) );

	// Responsive for views
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'views_responsive_separator',
	    'section'     => 'blog_views',
	    'default'     => esc_html__( 'Responsive', 'shoppable-grocery-store' ),
	    'priority'	  => 40,
	    'active_callback' => array(
			array(
				'setting'  => 'views_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'views Section', 'shoppable-grocery-store' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_views',
		'section'      => 'blog_views',
		'default'      => true,
		'priority'	   => 50,
		'active_callback' => array(
			array(
				'setting'  => 'views_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	//Advert
	Kirki::add_section( 'blog_advert', array(
	    'title'          => esc_html__( 'Advert', 'shoppable-grocery-store' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 28,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Advert Section', 'shoppable-grocery-store' ),
		'type'         => 'toggle',
		'settings'     => 'advert_section',
		'section'      => 'blog_advert',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Advert 1', 'shoppable-grocery-store' ),
		'type'         => 'image',
		'settings'     => 'blog_advert_one',
		'section'      => 'blog_advert',
		'default'      => '',
		'priority'	   => 20,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Advert 2', 'shoppable-grocery-store' ),
		'type'         => 'image',
		'settings'     => 'blog_advert_two',
		'section'      => 'blog_advert',
		'default'      => '',
		'priority'	   => 30,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Advert 3', 'shoppable-grocery-store' ),
		'type'         => 'image',
		'settings'     => 'blog_advert_three',
		'section'      => 'blog_advert',
		'default'      => '',
		'priority'	   => 40,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	// Responsive for advert
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'advert_responsive_separator',
	    'section'     => 'blog_advert',
	    'default'     => esc_html__( 'Responsive', 'shoppable-grocery-store' ),
	    'priority'	  => 50,
	    'active_callback' => array(
			array(
				'setting'  => 'advert_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Advert Section', 'shoppable-grocery-store' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_advert',
		'section'      => 'blog_advert',
		'default'      => true,
		'priority'	   => 60,
		'active_callback' => array(
			array(
				'setting'  => 'advert_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );
}