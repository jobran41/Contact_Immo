<?php get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			

			<div class="section " id="section-international">
				
			<div class="container">
					<div class="row">
						<?php 
			$args=array("post_type"=>"post");
			query_posts( $args );
			while ( have_posts() ) : the_post();
			?>
					<div class="part1 col-lg-12 columns">
					    <h2 class="title_section"><?php the_title();?><h2>
						<?php the_content();?>
					</div>
			
			<?php endwhile; ?>
			<?php wp_pagenavi(); ?>
					</div>
				</div>

		</div>
			
		</div>
	</div>
</section>

<?php get_footer(); ?>