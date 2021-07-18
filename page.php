<?php


get_header(); ?>

<!-- START ABOUT -->
<section class="section bg-lightgray" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                        <?php while ( have_posts() ) :
				the_post(); ?>
                            <h2><?php echo the_title(); ?></h2>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row vertical-content features">
                    <div class="col-sm-12">

                        <div class="features-box">
                            <h3><?php echo get_theme_mod('about_heading', 'Mair Multipurpose Theme'); ?></h3>

                            <p><?php the_content();
                             ?></p> </div>
              <?php               if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

                    </div> <!-- end col -->

                </div>
                <!-- end row -->
            </div>
        </section>
        <!-- END ABOUT -->

			
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
