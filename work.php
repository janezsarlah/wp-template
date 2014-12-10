<?php 

/*
	Template name: Work page
*/

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">	

			<?php 

				$args = array(
					'post_type' => 'work'
				);

				$the_query = new WP_Query( $args );

			?>
			
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<?php get_template_part( 'content', 'work' ); ?>
			
			<?php endwhile; endif; ?>
				
		</div>
	</div>
</div>

<?php get_footer(); ?>