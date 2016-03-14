<?php get_header();  ?>

	<section id="">
			<div class="contentContainer">
				<div class="homeText">
					<h3><?php the_title(); ?></h3>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
			</div> <!-- /contentContainer -->
	</section> <!-- /section.about -->

	<section id="portfolio">
			<?php $portfolioQuery = new WP_Query(
				array(
					'posts_per_page' => -1,
					'post_type' => 'portfolio',
					'orderby' => 'ASC'
				)
			); ?>
			<?php if ( $portfolioQuery -> have_posts() ) : ?>
				<?php while ( $portfolioQuery -> have_posts() ) : $portfolioQuery -> the_post(); ?>
					<div class="portfolioItem contentContainer">

						<div class="portfolioText">

							<h3><?php the_title(); ?></h3>
							<ul class="portfolioSkills">
								<?php while( has_sub_fields('project_skills') ): ?>
									<li><?php the_sub_field('project_skill'); ?></li>
								<?php endwhile; ?>
							</ul>
							<p><?php the_field('project_description'); ?></p>
							<a class="liveButton" target="_blank" href="<?php the_field('project_button_url'); ?>">
								<?php the_field('project_button_label'); ?>
							</a>
						</div> <!-- /.portfolioText -->

						<div class="portfolioImage">
							<img src="<?php the_field('project_image'); ?>" alt="">
						</div> <!-- /.portfolioImage -->

					</div> <!-- /.portfolioItem -->
				<?php endwhile; ?>
				
				<?php wp_reset_postdata(); ?>

			<?php else : ?>

			<?php endif; ?>
	</section> <!-- /section.portfolio -->
	<section id="about">
		<div class="contentContainer">
			<div class="aboutMe">
				<div class="aboutMeText">
					<h3><?php the_field('about_title') ?></h3>
					<p><?php the_field('about_text') ?></p>
				</div> <!-- /.aboutMeText -->
				<div class="aboutMeImage">
					<img src="<?php the_field('about_image') ?>" alt="">
				</div> <!-- /.aboutMeImage -->
			</div> <!-- /.aboutMe -->
		</div> <!-- /.contentContainer -->
	</section>

	<section id="contact">
			<div class="contentContainer">
				<div class="contact">

					<div class="contactText">	
						<h3><?php the_field('contact_title') ?></h3>
						<p><?php the_field('contact_text') ?></p>
					</div> <!-- /.contactText -->
					
					<div class="contactForm">
						<?php echo do_shortcode('[contact-form-7 id="37" title="Contact Form"]') ?>
					</div> <!-- .contactForm -->
					
				</div> <!-- /.contact -->
			</div> <!-- .contentContainer -->
	</section>

<?php get_footer(); ?>