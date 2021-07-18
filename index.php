<?php get_header() ?>
                <!-- HOME -->
                <section class="home bg-home home-slider" id="home">

<div class="bg-overlay"></div>

<div class="container-fluid">
    <div id="home-slider" class="flexslider">
        <ul class="slides">
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="home-wrapper text-center">
                                <div class="">
                                    <h1><?php echo get_theme_mod('hero_heading1', 'We are <span class="font-2">Passionate</span> and <span class="font-2">Creative</span>'); ?></h1>
                                    <h4><?php echo get_theme_mod('hero_text1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat arcu ut orci porta, eget porttitor felis suscipit. Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros.'); ?></h4>
                                    <a href="<?php echo get_theme_mod('hero_button1', 'https://scottmacquoid.co.uk/project/mair'); ?>" class="btn btn-custom"><?php echo get_theme_mod('hero_button1_text', 'Buy Now'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="home-wrapper text-center">
                                <div class="">
                                    <h1><?php echo get_theme_mod('hero_heading1', 'We are <span class="font-2">Passionate</span> and <span class="font-2">Creative</span>'); ?></h1>
                                    <h4><?php echo get_theme_mod('hero_text1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat arcu ut orci porta, eget porttitor felis suscipit. Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros.'); ?></h4>
                                    <a href="<?php echo get_theme_mod('hero_button1', 'https://scottmacquoid.co.uk/project/mair'); ?>" class="btn btn-custom"><?php echo get_theme_mod('hero_button1_text', 'Buy Now'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="is-prev"><i class="ti-arrow-circle-left"></i></div>
        <div class="is-next"><i class="ti-arrow-circle-right"></i></div>
    </div>
</div>
<!-- end container -->
</section>
<!-- END HOME -->
<!-- START ABOUT -->
<section class="section bg-lightgray" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h2><?php echo get_theme_mod('about_title', 'About Mair Theme'); ?></h2>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row vertical-content features">
                    <div class="col-sm-5">

                        <div class="features-box">
                            <h3><?php echo get_theme_mod('about_heading', 'Mair Multipurpose Theme'); ?></h3>

                            <p><?php echo get_theme_mod('about_text1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted.'); ?></p>

                            <p><?php echo get_theme_mod('about_text2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted.'); ?></p>

                            <a href="<?php echo get_theme_mod('about_button_url', ''); ?>" class="btn btn-link margin-t-30"><?php echo get_theme_mod('about_button', 'Learn More'); ?> <i class="<?php echo get_theme_mod('about_icon', 'ti-angle-double-right'); ?>"></i></a>
                        </div>

                    </div> <!-- end col -->

                    <div class="col-sm-6 col-sm-offset-1">
                        <img src="<?php echo get_theme_mod('about_image', get_bloginfo('template_directory').'/images/slider2.jpg'); ?>" class="img-responsive" alt="img">
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </section>
        <!-- END ABOUT -->

        <!-- SERVICES -->
        <section class="section" id="services">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h2><?php echo get_theme_mod('services_title', 'Our Featured Services'); ?></h2>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-4">
                        <div class="services-box">
                            <i class="<?php echo get_theme_mod('service_icon1', 'ti-ruler-pencil'); ?>"></i>
                            <a href="<?php echo get_theme_mod('service_url1', ''); ?>"><h4><?php echo get_theme_mod('service_title1', 'Web Development'); ?></h4></a>
                            <p><?php echo get_theme_mod('service_text1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.'); ?></p>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-sm-4">
                        <div class="services-box">
                        <i class="<?php echo get_theme_mod('service_icon2', 'ti-ruler-pencil'); ?>"></i>
                            <a href="<?php echo get_theme_mod('service_url2', ''); ?>"><h4><?php echo get_theme_mod('service_title2', 'Web Development'); ?></h4></a>
                            <p><?php echo get_theme_mod('service_text2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.'); ?></p>
                       </div>
                    </div> <!-- end col -->

                    <div class="col-sm-4">
                        <div class="services-box">
                        <i class="<?php echo get_theme_mod('service_icon3', 'ti-ruler-pencil'); ?>"></i>
                            <a href="<?php echo get_theme_mod('service_url3', ''); ?>"><h4><?php echo get_theme_mod('service_title3', 'Web Development'); ?></h4></a>
                            <p><?php echo get_theme_mod('service_text3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.'); ?></p>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-4">
                        <div class="services-box">
                        <i class="<?php echo get_theme_mod('service_icon4', 'ti-ruler-pencil'); ?>"></i>
                            <a href="<?php echo get_theme_mod('service_url4', ''); ?>"><h4><?php echo get_theme_mod('service_title4', 'Web Development'); ?></h4></a>
                            <p><?php echo get_theme_mod('service_text4', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.'); ?></p>
                       </div>
                    </div> <!-- end col -->

                    <div class="col-sm-4">
                        <div class="services-box">
                        <i class="<?php echo get_theme_mod('service_icon5', 'ti-ruler-pencil'); ?>"></i>
                            <a href="<?php echo get_theme_mod('service_url5', ''); ?>"><h4><?php echo get_theme_mod('service_title5', 'Web Development'); ?></h4></a>
                            <p><?php echo get_theme_mod('service_text5', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.'); ?></p>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-sm-4">
                        <div class="services-box">
                        <i class="<?php echo get_theme_mod('service_icon6', 'ti-ruler-pencil'); ?>"></i>
                            <a href="<?php echo get_theme_mod('service_url6', ''); ?>"><h4><?php echo get_theme_mod('service_title6', 'Web Development'); ?></h4></a>
                            <p><?php echo get_theme_mod('service_text6', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.'); ?></p>
                         </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


            </div> <!-- end container -->
        </section>
        <!-- end SERVICES -->
        <!-- FEATURES -->
        <section class="section bg-lightgray" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h2><?php echo get_theme_mod('features_title', 'Features'); ?></h2>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row vertical-content features">
                    <div class="col-sm-5">

                        <div class="features-box">
                            <div class="number">
                                1
                            </div>
                            <h3><?php echo get_theme_mod('features_heading1', 'Responsive Layout'); ?></h3>

                            <p><?php echo get_theme_mod('features_text1_1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted.'); ?></p>

                            <p><?php echo get_theme_mod('features_text1_2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted.'); ?></p>

                            <a href="<?php echo get_theme_mod('features_button_url1', ''); ?>" class="btn btn-link margin-t-30"><?php echo get_theme_mod('features_button1', 'Learn More'); ?> <i class="<?php echo get_theme_mod('features_icon1', 'ti-angle-double-right'); ?>"></i></a>
                        </div>

                    </div> <!-- end col -->

                    <div class="col-sm-6 col-sm-offset-1">
                        <img src="<?php echo get_theme_mod('features_image1', get_bloginfo('template_directory').'/images/slide1.jpg'); ?>" class="img-responsive" alt="img">
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


                <div class="row vertical-content features">
                    <div class="col-sm-4">
                    <img src="<?php echo get_theme_mod('features_image2', get_bloginfo('template_directory').'/images/slider3.jpg'); ?>" class="img-responsive" alt="img">
                    </div> <!-- end col -->

                    <div class="col-sm-6 col-sm-offset-1">

                        <div class="features-box">
                            <div class="number">
                                2
                            </div>
                            <h3><?php echo get_theme_mod('features_heading2', 'PageSpeed Optimised'); ?></h3>

                            <p><?php echo get_theme_mod('features_text2_1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted.'); ?></p>

                            <p><?php echo get_theme_mod('features_text2_2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted.'); ?></p>

                            <a href="<?php echo get_theme_mod('features_button_url2', ''); ?>" class="btn btn-link margin-t-30"><?php echo get_theme_mod('features_button2', 'Learn More'); ?> <i class="<?php echo get_theme_mod('features_icon2', 'ti-angle-double-right'); ?>"></i></a>
                            </div>

                    </div> <!-- end col -->

                </div>
                <!-- end row -->

            </div> <!-- end container -->
        </section>
        <!-- end FEATURES -->

        <!-- TESTIMONIALS -->
        <section class="section bg-testimonials">
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                        <div class="testimonial-box text-center">
                            <h1><i class="ti-quote-left"></i></h1>
                            <h4> <?php echo get_theme_mod('testimonial_text', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.'); ?></h4>
                            <img src="<?php echo get_theme_mod('testimonial_image', get_bloginfo('template_directory').'/images/user-1.jpg'); ?>" class="testi-user img-circle" alt="testimonials-user">
                            <p>- <?php echo get_theme_mod('testimonial_user', 'Scott MacQuoid'); ?></p>
 
                        </div>

                    </div> <!-- col -->
                </div> <!-- row -->
            </div><!-- end container -->
        </section>
        <!-- end TESTIMONIALS -->
        <!-- CTA -->
        <section class="section bg-lightgray">
            <div class="container">

                <div class="row text-center">
                    
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="cta-section">
                            <h4><?php echo get_theme_mod('cta_title1','Are You Ready?'); ?></h4>
                            <h1 class="text-uppercase"><?php echo get_theme_mod('cta_title2','Download Mair Now!') ?></h1>
                            <a href="<?php echo get_theme_mod('cta_url','https://scottmacquoid.co.uk/project/mair'); ?>" class="btn btn-link margin-t-30"><?php echo get_theme_mod('cta_button','DOWNLOAD'); ?> <i class="<?php echo get_theme_mod('cta_icon','ti-angle-double-down'); ?>"></i></a>
                        </div>
                    </div>
                    
                </div> <!-- end row -->

            </div> <!-- end container -->
        </section>
        <!-- end FUN-FACTS -->
       <!-- CONTACT -->
       <section class="section" id="contact">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h2><?php echo get_theme_mod('contact_title', 'Contact Us') ?></h2>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row contact-footer">
                    <div class="col-sm-4">
                        <div class="contact-footer-box text-center">
                            <i class="<?php echo get_theme_mod('phone_icon', 'ti-mobile') ?>"></i>
                            <h5><?php echo get_theme_mod('phone_number', '07520-665051') ?></h5>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="contact-footer-box text-center">
                            <i class="<?php echo get_theme_mod('address_icon', 'ti-map-alt') ?>"></i>
                            <h5><?php echo get_theme_mod('address_text', 'Manchester, UK') ?></h5>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="contact-footer-box text-center">
                            <i class="<?php echo get_theme_mod('email_icon', 'ti-email') ?>"></i>
                            <h5><?php echo get_theme_mod('email_address', 'info@maircompany.com') ?></h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                
                </div> <!-- end container -->
        </section>
        <!-- end CONTACT -->

<?php get_footer() ?>