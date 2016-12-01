<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php // the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
		<h3><?php the_field('title') ;?></h3>
		<div class="clear"></div>
	    <?php echo  get_field('desc') ;?>
	</header>
	<div class="row">
			<div class="col-xs-12">
				<?php the_content(); ?>
			</div>
	</div>

</article>