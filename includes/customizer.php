<?php

function wpb_customize_register($wp_customize) {
    //Hero Area Main Panel
    $wp_customize->add_panel( 'panel1', array(
        'priority'       => 10,
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __('Header Section', 'mair'),
         'description'    => __('Hero Area options', 'mair'),
       ) );
    //Hero Area Background Image Section

    $wp_customize->add_section('hero_background', array(
        'title' => __('Background Image', 'mair'),
        'description' => sprintf(__('Hero Area background image', 'mair')),
        'priority' => 10,
        'panel'  => 'panel1',
    ));
    $wp_customize->add_setting('hero_image', array(
        'default'   => get_bloginfo('template_directory').'/images/slider3.jpg',
        'type'      => 'theme_mod'
      ));
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label'   => __('Background Image', 'mair'),
        'section' => 'hero_background',
        'settings' => 'hero_image',
        'priority'  => 1
      )));

          //Hero Area Slide 1 Section

      $wp_customize->add_section('hero_slide1', array(
        'title' => __('Slide 1', 'mair'),
        'description' => sprintf(__('Hero Area Settings', 'mair')),
        'priority' => 30,
        'panel'  => 'panel1',
    ));
    $wp_customize->add_setting('hero_heading1', array(
        'default' => __('Creative Multipurpose Landing Page', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('hero_heading1', array(
        'label' => __('Heading 1', 'mair'),
        'section'    => 'hero_slide1',
        'priority'  => 2
    ));
    $wp_customize->add_setting('hero_text1', array(
        'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat arcu ut orci porta, eget porttitor felis suscipit. Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros.', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('hero_text1', array(
        'label' => __('Text 1', 'mair'),
        'section'    => 'hero_slide1',
        'priority'  => 3,
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting('hero_button1', array(
        'default' => __('https://scottmacquoid.co.uk/project/mair', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('hero_button1', array(
        'label' => __('Button 1', 'mair'),
        'section'    => 'hero_slide1',
        'priority'  => 4
    ));
    $wp_customize->add_setting('hero_button1_text', array(
        'default' => __('Learn More', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('hero_button1_text', array(
        'label' => __('Button 1 Text', 'mair'),
        'section'    => 'hero_slide1',
        'priority'  => 5
    ));
        //Hero Area Slide 2 Section

    $wp_customize->add_section('hero_slide2', array(
        'title' => __('Slide 2', 'mair'),
        'description' => sprintf(__('Hero Area Settings', 'mair')),
        'priority' => 40,
        'panel'  => 'panel1',
    ));
    $wp_customize->add_setting('hero_heading2', array(
        'default' => __('We are Passionate and Creative', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('hero_heading2', array(
        'label' => __('Heading 2', 'mair'),
        'section'    => 'hero_slide2',
        'priority'  => 6
    ));
    $wp_customize->add_setting('hero_text2', array(
        'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat arcu ut orci porta, eget porttitor felis suscipit. Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros.', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('hero_text2', array(
        'label' => __('Text 2', 'mair'),
        'section'    => 'hero_slide2',
        'priority'  => 7,
        'type'  => 'textarea'

    ));

    $wp_customize->add_setting('hero_button2', array(
        'default' => __('https://scottmacquoid.co.uk/project/mair', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('hero_button2', array(
        'label' => __('Button 2', 'mair'),
        'section'    => 'hero_slide2',
        'priority'  => 8
    ));
    $wp_customize->add_setting('hero_button2_text', array(
        'default' => __('Learn More', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('hero_button2_text', array(
        'label' => __('Button 1 Text', 'mair'),
        'section'    => 'hero_slide2',
        'priority'  => 9
    ));
    //Services Main Panel

    $wp_customize->add_panel( 'services', array(
        'priority'       => 20,
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __('Services Section', 'mair'),
         'description'    => __('Services options', 'mair'),
       ) );
    $wp_customize->add_section('services_title', array(
        'title' => __('Services Title', 'mair'),
        'description' => sprintf(__('Services Title', 'mair')),
        'priority' => 10,
        'panel'  => 'services',
    ));
    $wp_customize->add_setting('services_title', array(
        'default' => __('Our Featured Services', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('services_title', array(
        'label' => __('Services Title', 'mair'),
        'section'    => 'services_title',
        'priority'  => 1
    ));
    $wp_customize->add_section('services_boxes', array(
        'title' => __('Services Items', 'mair'),
        'description' => sprintf(__('For more icon choices, please check <a target="_blank" href="https://themify.me/themify-icons">Themify Free Icons</a> and choose the icon you want, and paste the icon shortcode in the icon field', 'mair')),
        'priority' => 20,
        'panel'  => 'services',
    ));
    
        //Service item

    $wp_customize->add_setting('service_title1', array(
        'default' => __('Service 1', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_title1', array(
        'label' => __('Service Title 1', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 1
    ));
    $wp_customize->add_setting('service1_icon', array(
        'default' => __('ti-ruler-pencil', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service1_icon', array(
        'label' => __('Service Icon 1', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 2
    ));
    $wp_customize->add_setting('service1_text', array(
        'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service1_text', array(
        'label' => __('Service Description 1', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 3,
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting('service_url1', array(
        'default' => __('', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_url1', array(
        'label' => __('Service url 1', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 4,
        'type' => 'url'
    ));
       //Service item

       $wp_customize->add_setting('service_title2', array(
        'default' => __('Service 2', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_title2', array(
        'label' => __('Service Title 2', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 5
    ));
    $wp_customize->add_setting('service_icon2', array(
        'default' => __('ti-harddrives', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_icon2', array(
        'label' => __('Service Icon 2', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 6
    ));
    $wp_customize->add_setting('service_text2', array(
        'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_text2', array(
        'label' => __('Service Description 2', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 7,
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting('service_url2', array(
        'default' => __('', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_url2', array(
        'label' => __('Service url 2', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 8,
        'type' => 'url'
    ));
       //Service item

       $wp_customize->add_setting('service_title3', array(
        'default' => __('Service 3', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_title3', array(
        'label' => __('Service Title 3', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 9
    ));
    $wp_customize->add_setting('service_icon3', array(
        'default' => __('ti-harddrives', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_icon3', array(
        'label' => __('Service Icon 3', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 10
    ));
    $wp_customize->add_setting('service_text3', array(
        'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_text3', array(
        'label' => __('Service Description 3', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 11,
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting('service_url3', array(
        'default' => __('', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_url3', array(
        'label' => __('Service url 3', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 12,
        'type' => 'url'
    ));
       //Service item

       $wp_customize->add_setting('service_title4', array(
        'default' => __('Service 4', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_title4', array(
        'label' => __('Service Title 4', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 13
    ));
    $wp_customize->add_setting('service_icon4', array(
        'default' => __('ti-harddrives', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_icon4', array(
        'label' => __('Service Icon 4', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 14
    ));
    $wp_customize->add_setting('service_text4', array(
        'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_text4', array(
        'label' => __('Service Description 4', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 15,
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting('service_url4', array(
        'default' => __('', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_url4', array(
        'label' => __('Service url 4', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 16,
        'type' => 'url'
    ));
       //Service item

       $wp_customize->add_setting('service_title5', array(
        'default' => __('Service 5', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_title5', array(
        'label' => __('Service Title 5', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 17
    ));
    $wp_customize->add_setting('service_icon5', array(
        'default' => __('ti-harddrives', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_icon5', array(
        'label' => __('Service Icon 5', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 18
    ));
    $wp_customize->add_setting('service_text5', array(
        'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_text5', array(
        'label' => __('Service Description 5', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 19,
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting('service_url5', array(
        'default' => __('', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_url5', array(
        'label' => __('Service url 5', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 20,
        'type' => 'url'
    ));
       //Service item

       $wp_customize->add_setting('service_title6', array(
        'default' => __('Service 6', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_title6', array(
        'label' => __('Service Title 6', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 21
    ));
    $wp_customize->add_setting('service_icon6', array(
        'default' => __('ti-harddrives', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_icon6', array(
        'label' => __('Service Icon 6', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 22
    ));
    $wp_customize->add_setting('service_text6', array(
        'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_text6', array(
        'label' => __('Service Description 6', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 23,
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting('service_url6', array(
        'default' => __('', 'mair'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('service_url6', array(
        'label' => __('Service url 6', 'mair'),
        'section'    => 'services_boxes',
        'priority'  => 24,
        'type' => 'url'
    ));

/******************************** 
*About Us Section
*********************************/ 


$wp_customize->add_section('about', array(
    'title' => __('About Section', 'mair'),
    'description' => sprintf(__('Change the contents of the about section', 'mair')),
    'priority' => 20,
));
$wp_customize->add_setting('about_image', array(
    'default'   => get_bloginfo('template_directory').'/images/slider2.jpg',
    'type'      => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
    'label'   => __('About Image', 'mair'),
    'section' => 'about',
    'settings' => 'about_image',
    'priority'  => 1
  )));
  $wp_customize->add_setting('about_title', array(
    'default' => __('About Us', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('about_title', array(
    'label' => __('Section Title', 'mair'),
    'section'    => 'about',
    'priority'  => 2
));
$wp_customize->add_setting('about_heading', array(
    'default' => __('Mair Multipurpose Theme', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('about_heading', array(
    'label' => __('About Headline', 'mair'),
    'section'    => 'about',
    'priority'  => 3
));
$wp_customize->add_setting('about_text1', array(
    'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('about_text1', array(
    'label' => __('Text 1', 'mair'),
    'section'    => 'about',
    'priority'  => 4,
    'type'  => 'textarea'
));
$wp_customize->add_setting('about_text2', array(
    'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('about_text2', array(
    'label' => __('Text 2', 'mair'),
    'section'    => 'about',
    'priority'  => 5,
    'type'  => 'textarea'

));
$wp_customize->add_setting('about_button_url', array(
    'default' => __('https://scottmacquoid.co.uk/project/mair', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('about_button_url', array(
    'label' => __('Button Link', 'mair'),
    'section'    => 'about',
    'priority'  => 6
));
$wp_customize->add_setting('about_button', array(
    'default' => __('Learn More', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('about_button', array(
    'label' => __('Button Text', 'mair'),
    'section'    => 'about',
    'priority'  => 7
));
$wp_customize->add_setting('about_icon', array(
    'default' => __('ti-angle-double-right', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('about_icon', array(
    'label' => __('Button Icon', 'mair'),
    'section'    => 'about',
    'priority'  => 8
));
/******************************** 
*Features Section
*********************************/ 
$wp_customize->add_panel( 'features', array(
    'priority'       => 40,
     'capability'     => 'edit_theme_options',
     'theme_supports' => '',
     'title'          => __('Features Section', 'mair'),
     'description'    => __('Features Section options', 'mair'),
   ) );
   $wp_customize->add_section('featuretitle', array(
    'title' => __('Features Title', 'mair'),
    'description' => sprintf(__('Change the contents of the Features section', 'mair')),
    'priority' => 10,
    'panel' => 'features'
));
   $wp_customize->add_setting('features_title', array(
    'default' => __('Features Title', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_title', array(
    'label' => __('Section Title', 'mair'),
    'section'    => 'featuretitle',
    'priority'  => 2
));
$wp_customize->add_section('feature1', array(
    'title' => __('Feature 1 Section', 'mair'),
    'description' => sprintf(__('Change the contents of the Features section', 'mair')),
    'priority' => 20,
    'panel' => 'features'

));

$wp_customize->add_setting('features_image1', array(
    'default'   => get_bloginfo('template_directory').'/images/slider2.jpg',
    'type'      => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'features_image1', array(
    'label'   => __('Feature Image 1', 'mair'),
    'section' => 'feature1',
    'settings' => 'features_image1',
    'priority'  => 1
  )));

$wp_customize->add_setting('features_heading1', array(
    'default' => __('Mair Multipurpose Theme', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_heading1', array(
    'label' => __('features Headline', 'mair'),
    'section'    => 'feature1',
    'priority'  => 3
));
$wp_customize->add_setting('features_text1_1', array(
    'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_text1_1', array(
    'label' => __('Text 1', 'mair'),
    'section'    => 'feature1',
    'priority'  => 4,
    'type'  => 'textarea'
));
$wp_customize->add_setting('features_text1_2', array(
    'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_text1_2', array(
    'label' => __('Text 2', 'mair'),
    'section'    => 'feature1',
    'priority'  => 5,
    'type'  => 'textarea'

));
$wp_customize->add_setting('features_button_url1', array(
    'default' => __('https://scottmacquoid.co.uk/project/mair', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_button_url1', array(
    'label' => __('Button Link', 'mair'),
    'section'    => 'feature1',
    'priority'  => 6
));
$wp_customize->add_setting('features_button1', array(
    'default' => __('Learn More', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_button1', array(
    'label' => __('Button Text', 'mair'),
    'section'    => 'feature1',
    'priority'  => 7
));
$wp_customize->add_setting('features_icon1', array(
    'default' => __('ti-angle-double-right', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_icon1', array(
    'label' => __('Button Icon', 'mair'),
    'section'    => 'feature1',
    'priority'  => 8
));
$wp_customize->add_section('feature2', array(
    'title' => __('Feature 2 Section', 'mair'),
    'description' => sprintf(__('Change the contents of the Features section', 'mair')),
    'priority' => 30,
    'panel' => 'features'

));

$wp_customize->add_setting('features_image2', array(
    'default'   => get_bloginfo('template_directory').'/images/slide1.jpg',
    'type'      => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'features_image2', array(
    'label'   => __('Feature Image 2', 'mair'),
    'section' => 'feature2',
    'settings' => 'features_image2',
    'priority'  => 1
  )));

$wp_customize->add_setting('features_heading2', array(
    'default' => __('Mair Multipurpose Theme', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_heading2', array(
    'label' => __('features Headline', 'mair'),
    'section'    => 'feature2',
    'priority'  => 3
));
$wp_customize->add_setting('features_text2_1', array(
    'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_text2_1', array(
    'label' => __('Text 1', 'mair'),
    'section'    => 'feature2',
    'priority'  => 4,
    'type'  => 'textarea'
));
$wp_customize->add_setting('features_text2_2', array(
    'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_text2_2', array(
    'label' => __('Text 2', 'mair'),
    'section'    => 'feature2',
    'priority'  => 5,
    'type'  => 'textarea'

));
$wp_customize->add_setting('features_button_url2', array(
    'default' => __('https://scottmacquoid.co.uk/project/mair', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_button_url2', array(
    'label' => __('Button Link', 'mair'),
    'section'    => 'feature2',
    'priority'  => 6
));
$wp_customize->add_setting('features_button2', array(
    'default' => __('Learn More', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_button2', array(
    'label' => __('Button Text', 'mair'),
    'section'    => 'feature2',
    'priority'  => 7
));
$wp_customize->add_setting('features_icon2', array(
    'default' => __('ti-angle-double-right', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('features_icon2', array(
    'label' => __('Button Icon', 'mair'),
    'section'    => 'feature2',
    'priority'  => 8
));
/******************************** 
*Testimonials Section
*********************************/ 

$wp_customize->add_section('testimonial', array(
    'title' => __('Testimonial Section', 'mair'),
    'description' => sprintf(__('Change the contents of the testimonial section', 'mair')),
    'priority' => 40,
));
$wp_customize->add_setting('testimonial_image', array(
    'default'   => get_bloginfo('template_directory').'/images/user-1.jpg',
    'type'      => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial_image', array(
    'label'   => __('testimonial Image', 'mair'),
    'section' => 'testimonial',
    'settings' => 'testimonial_image',
    'priority'  => 1
  )));
  $wp_customize->add_setting('testimonial_user', array(
    'default' => __('Testimonial User', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('testimonial_user', array(
    'label' => __('Testimonial user', 'mair'),
    'section'    => 'testimonial',
    'priority'  => 2
));

$wp_customize->add_setting('testimonial_text', array(
    'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('testimonial_text', array(
    'label' => __('Text 1', 'mair'),
    'section'    => 'testimonial',
    'priority'  => 3,
    'type'  => 'textarea'
));


/******************************** 
*Call To Action Section
*********************************/
$wp_customize->add_section('cta', array(
    'title' => __('Call To Action Section', 'mair'),
    'description' => sprintf(__('Change the contents of the CTA section', 'mair')),
    'priority' => 40,
));

  $wp_customize->add_setting('cta_title1', array(
    'default' => __('Are You Ready?', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('cta_title1', array(
    'label' => __('CTA Title 1', 'mair'),
    'section'    => 'cta',
    'priority'  => 2
));
$wp_customize->add_setting('cta_title2', array(
    'default' => __('Download Mair Now!', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('cta_title2', array(
    'label' => __('CTA Title 2', 'mair'),
    'section'    => 'cta',
    'priority'  => 3
));
$wp_customize->add_setting('cta_url', array(
    'default' => __('https://scottmacquoid.co.uk/project/mair', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('cta_url', array(
    'label' => __('Button URL', 'mair'),
    'section'    => 'cta',
    'priority'  => 4
));
$wp_customize->add_setting('cta_button', array(
    'default' => __('Download!', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('cta_button', array(
    'label' => __('Button Text', 'mair'),
    'section'    => 'cta',
    'priority'  => 5
));
$wp_customize->add_setting('cta_icon', array(
    'default' => __('ti-angle-double-down', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('cta_icon', array(
    'label' => __('CTA Icon', 'mair'),
    'section'    => 'cta',
    'priority'  => 6
));

/******************************** 
*Contact Section
*********************************/
$wp_customize->add_section('contact', array(
    'title' => __('Contact Section', 'mair'),
    'description' => sprintf(__('Change the contents of the contact section', 'mair')),
    'priority' => 50,
));

  $wp_customize->add_setting('contact_title', array(
    'default' => __('Contact Title', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('contact_title', array(
    'label' => __('Contact Us', 'mair'),
    'section'    => 'contact',
    'priority'  => 2
));
$wp_customize->add_setting('phone_icon', array(
    'default' => __('ti-mobile', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('phone_icon', array(
    'label' => __('Phone Icon', 'mair'),
    'section'    => 'contact',
    'priority'  => 3
));
$wp_customize->add_setting('phone_number', array(
    'default' => __('07520-665051', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('phone_number', array(
    'label' => __('Phone Number', 'mair'),
    'section'    => 'contact',
    'priority'  => 4
));
$wp_customize->add_setting('address_icon', array(
    'default' => __('ti-map-alt', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('address_icon', array(
    'label' => __('address Icon', 'mair'),
    'section'    => 'contact',
    'priority'  => 5
));
$wp_customize->add_setting('address_text', array(
    'default' => __('Manchester, UK', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('address_text', array(
    'label' => __('Address Text', 'mair'),
    'section'    => 'contact',
    'priority'  => 6
));
$wp_customize->add_setting('email_icon', array(
    'default' => __('ti-email', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('email_icon', array(
    'label' => __('Email Icon', 'mair'),
    'section'    => 'contact',
    'priority'  => 7
));
$wp_customize->add_setting('email_text', array(
    'default' => __('info@maircompany.com', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('email_text', array(
    'label' => __('Email Address', 'mair'),
    'section'    => 'contact',
    'priority'  => 8
));

/******************************** 
*Footer Section
*********************************/

$wp_customize->add_section('footer', array(
    'title' => __('Copyright Text', 'mair'),
    'description' => sprintf(__('Change Copyright Text', 'mair')),
    'priority' => 70,
));
$wp_customize->add_setting('footer_text', array(
    'default' => __('2019 © Scott MacQuoid. All Rights Reserved', 'mair'),
    'type'    => 'theme_mod'
));
$wp_customize->add_control('footer_text', array(
    'label' => __('Copyright Text', 'mair'),
    'section'    => 'footer',
    'priority'  => 1
));
}

add_action('customize_register', 'wpb_customize_register');