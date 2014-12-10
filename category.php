<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">		
				
			<h3 class="text-center category">Category: <?php single_cat_title(); ?></h3>	

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'post' ); ?>

			<?php endwhile; else:  ?>

				<p>There are no posts or pages here.</p>

			<?php endif; ?>
			
		</div>

		<?php get_template_part( 'content', 'testemonials' ); ?>

	</div>
</div>

<?php get_footer(); ?>