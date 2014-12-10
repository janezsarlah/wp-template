<div class="col-sm-6">
	<div class="spotlight project" style="background-color: <?php the_field( 'background_color' ); ?>">
		<div class="text-center"><a href="<?php the_permalink(); ?>">
			<img src="<?php the_field( 'display_image' ); ?>">
		</a></div>

		<h4>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h4>

		<p><?php the_field( 'description' ); ?></p>

		<p>
			<a class="btn btn-lg btn-primary" style="background-color: <?php the_field( 'button_color' ); ?>" href="<?php the_permalink(); ?>">
				View project &rarr;
			</a>
		</p>
	</div>
</div>