<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title( '-', ture, 'right' ); bloginfo( 'name' );?></title>
	</head>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">

	<?php wp_head(); ?>

	<body>
		<!-- Page Header Title -->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><a href="<?php bloginfo( 'siteurl' )?>"><?php bloginfo( 'name' )?></a></h1>
						<h2><?php bloginfo( 'description' ) ?></h2>		
					</div>
				</div>
			</div>

			<!-- Navigation -->
			<div class="container">	
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">
						<div class="navbar-header">
						    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
						    	<span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						    </button>
						</div>

						<div class="collapse navbar-collapse navbar-inner" id="navbar-collapse">
				            <ul class="nav nav-justified">
				            	<?php 
				            		
				            		$args = array(
				            			'menu' => 'main-menu',
				            			'echo' => false
				            		);

				            		$pateren = array(0 => '/class=".*?"/', 1 => '/id=".*?"/');

				            		echo strip_tags(preg_replace($pateren, '', wp_nav_menu( $args )), '<li><a>');
				            	?>
				            </ul>
			        	</div>
					</div>
				</nav>
			</div>
		</header>