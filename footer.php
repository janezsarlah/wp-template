			<div class="container">
				<div class="col-md-12">	
					<div class="col-md-12">
						<div class="col-md-6 footer-left">
								
							<?php if( dynamic_sidebar( 'footer-left' ) ) : ?>
							
							<?php else : ?>
							
								<h5>Facebook</h5>
								<p>Install the Facebook plugin and place the widget here.</p>
							
							<?php endif; ?>
							
						</div>
						<div class="col-md-6">
							
							<?php if( dynamic_sidebar( 'footer-right' ) ) : ?>
							
							<?php else : ?>
							
								<h5>Twitter</h5>
								<p>Install the TwitterGet plugin and place the widget here.</p>
							
							<?php endif; ?>
							
						</div>
	
					</div>
				</div>
			</div>
		
			<footer>
				<div id="copyright">
					<p>&copy; Copyright <?php echo date( 'Y' ); ?> <a href="#">@janezsarlah</a>. All Rights Reserved.</p>
					<a href="#"><li class="icon-large icon-facebook"></li></a>
				</div>
			</footer>
		
		<?php wp_footer(); ?>

	</body>
</html>
