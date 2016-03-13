<?php get_header();  ?>

	
	<section id="home">
		<div class="sectionContainer">
			<div class="contentContainer">
				<div class="homeText">
					<h3><?php the_title(); ?></h3>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div> <!-- /.container -->
	</section> <!-- /section.about -->

	<section id="portfolio">
		<div class="sectionContainer">
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
		</div> <!-- /.container -->
	</section> <!-- /section.portfolio -->
	<section id="about">
		<div class="sectionContainer">
			<div class="contentContainer">
				<div class="aboutText">
					<h3><?php the_field('about_title') ?></h3>
					<p><?php the_field('about_text') ?></p>
				</div>
			</div>
		</div> <!-- /.container -->
	</section>

	<section id="contact">
		<div class="sectionContainer">
			<div class="contentContainer">
				<div class="contact">
					<h3><?php the_field('contact_title') ?></h3>
					<div class="contactForm">
						<?php echo do_shortcode('[contact-form-7 id="37" title="Contact Form"]') ?>
					</div>
					
				</div>
			</div>
		</div> <!-- /.container -->
	</section>

<?php get_footer(); ?>