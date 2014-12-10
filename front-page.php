<?php get_header(); ?>

<div id="featured" class="clearfix flexslider" style="background-color: #E5411C">

	<ul class="slides">
		<?php 

			$args = array(
				'post_type' => 'work'
			);

			$the_query = new WP_Query( $args );

		?>
		
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li style="background-color: <?php the_field( 'background_color' ); ?>">
				<div class="container">
					<div class="row spacing">
						<div class="col-md-4 col-md-offset-2 text-center"><img src="<?php the_field( 'display_image' ); ?>" alt="Screen shoot of the project"></div>
						<div id="featured-info" class="col-md-4 col-md-offset-2">
							<h5>Featured Project</h5>
							<h3 style="color: <?php the_field( 'button_color' ); ?>"><?php the_title(); ?></h3>
							<p><?php the_field( 'description' ); ?></p>
							<a class="btn btn-lg btn-primary" style="background-color: <?php the_field( 'button_color' ); ?>" href="<?php the_permalink(); ?>">
				View project &rarr;</a>
						</div>
					</div>
				</div>
			</li>
		<?php endwhile; endif; ?>
	</ul>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">		
			<div class="col-md-12">
				<h5>Featured Post</h5>
			</div>

			<?php 
		
			$args = array(
				'post_type'			=> 'post',
				'category_name'		=> 'featured',
				'posts_per_page' 	=> 1
			);

			$the_query = new WP_Query($args);

			?>

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<div class="col-md-8 col-md-offset-2 clearfix">
					<article>
						<?php get_template_part( 'content', 'post' ); ?>
					</article>
				</div>

			<?php endwhile; endif; ?>


			<!-- Reacend posts -->

			<div class="col-md-12 clearfix">
				<div class="col-md-6 recent-post">

					<?php 
					
					$args = array(
						'post_type'			=> 'post',
						'cat'				=> -7,
						'posts_per_page' 	=> 1
					);

					$the_query = new WP_Query($args);

					?>

					<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<article>
							<h5>Recent Post</h5>
							<?php get_template_part( 'content', 'post' ); ?>
						</article>
					<?php endwhile; endif; ?>
				</div>

			    <?php 

    				$args = array(
    					'post_type' 		=> 'work',
    					'posts_per_page'	=> 1
    				);

    				$the_query = new WP_Query( $args );

    			?>
    			
    			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    				<?php get_template_part( 'content', 'work' ); ?>
    			
    			<?php endwhile; endif; ?>	
			
			</div>

			<?php get_template_part( 'content', 'testemonials' ); ?>

		</div>
	</div>
</div>
<?php get_footer(); ?>