<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">	

			<p>This is a single-work.php file</p>	
				
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h3><?php the_title(); ?></h3>
				<div class="intro">
					<?php the_field( 'description' ); ?>
				</div>
				
				<p>
					<a class="btn btn-lg btn-primary" style="background-color: <?php the_field( 'button_color' ); ?>" href="<?php the_field( 'url' ); ?>">
						View project &rarr;
					</a>
				</p>	

				<hr>

				<div class="project-images">
					<?php the_field( 'project_images' ); ?>
				</div>

			<?php endwhile; else:  ?>

				<p>There are no posts or pages here.</p>

			<?php endif; ?>

		</div>
	</div>
</div>


<?php get_footer(); ?>