<!DOCTYPE HTML>
<html lang="language_attributes">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />
</head>
<body class="body">

<div class="container_full">
	<div class="fix container">
	<div class="header"> 
	<h1>Reverted</h1>
	<p>The first XHTML 1.1 Validated Template by Mehedi Hasan</p>
	</div>
	
	
	<nav class="main-menu">
			<div id="menu">
				<?php
				
				$args = array(
					'theme_location' => 'primary'
				);

				wp_nav_menu( $args ); ?>
			</div>
		</nav>	
	</div>
</div>


<div class="container_full">
	<div class="fix container">
	<div class="main"> 
	
	<?php 
				
				if(have_posts()) : 
					while(have_posts()) : the_post(); ?>
					
					<article>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_content(); ?></p>
					</article>
					
				<?php	endwhile;
				else:
				echo 'No Posts Found';
				endif;
				
				?>
	

<center><h6><a href="#">web page designer Mehedi Hasan</a></h6></center>
	</div>
	</div>
</div>





<!-- Calling Favicon -->
<!----
<div class="container_full">
	<div class="fix container">
	
	</div>
</div>

---->

	
</body>
</html>