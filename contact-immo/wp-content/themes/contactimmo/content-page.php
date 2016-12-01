<!-- <article id="post-<?php the_ID(); ?>" //<?php post_class(); ?>> -->
	
		<?php
		// $args2=array('child_of' => get_top_ancestor_id(),
		// 'title_li' => '');
		// wp_list_pages($args2);
		//the_content();
		echo do_shortcode( get_the_content() );
		?>
	
<!-- </article> -->