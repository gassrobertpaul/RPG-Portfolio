<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name'); ?><?php wp_title('-'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- pingback -->
		<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>	

		<?php wp_head(); ?>
	</head>

<body class="twoColumnBody">
<?php get_sidebar(); ?>
<div id="container"> 
  <div id="mainContent">
    <?php get_header(); ?>
  	<div id="innerMainContent">
		<div id="articleContainer">

				<?php

					if ( have_posts() ):

						while( have_posts() ): the_post();

							get_template_part( 'template-contents/content', get_post_format() );

						endwhile;

					endif;

				?>
				
		</div>

    </div> <!-- End of #innerMainContent -->

	<!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
	<?php get_footer(); ?>


<!-- end #container --></div>
<?php wp_footer(); ?>
</body>
</html>