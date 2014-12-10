<div class="divider col-md-12">
	<h5>Testimonial</h5>
</div>

<?php 

$args = array(
	'post_type'		=> 'testemonials',
	'posts_per_page' => 1,
	'orderby'		=> 'rand'
);

$the_query = new WP_Query($args);

?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="testimonial col-md-10 col-md-offset-2">
		<blockquote>
			&ldquo; <?php the_field( 'testemonial' ); ?> &rdquo;
			<footer class="testemonials-footer"><?php the_field( 'name' ); ?></footer>
		</blockquote>
	</div>
<?php endwhile; endif; ?>
