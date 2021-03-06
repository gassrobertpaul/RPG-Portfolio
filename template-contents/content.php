<?php

/*
	
@package rpgmobilefriendlyportfolio
-- Standard Post Format
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><a class="standard-link-title" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>

		<div class="entry-meta">
			<div class="standard-entry-meta"><?php echo rpg_portfolio_posted_meta(); ?></div>
		</div>

	</header>

	<div class="entry-content">

		<?php if( rpg_portfolio_get_attachment() ): 
				$featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
		?>
			<?php if (!empty($featured_image)) { ?>
				<a class="standard-featured-link" href="<?php the_permalink(); ?>">
				 	<img src="<?php echo $featured_image; ?>" /> 
				</a>
			<?php } // End of if (!empty($featured_image)) { ?>

		<?php endif; ?>

		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
		</div>

		<div class="button-container">
			<a href="<?php the_permalink(); ?>" class="btn-rpgportfolio"><?php _e( 'Read More' ); ?></a>
		</div>

	</div> <!-- .entry-content -->

	<footer class="entry-footer">
		<?php echo rpg_portfolio_tags(); ?>			
	</footer>

</article>