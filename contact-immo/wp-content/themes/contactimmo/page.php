<?php get_header(); ?>
<div id="main">		
    <div class="ci-header">
		<div class="container flextop">
	        <div class="ci-header-content">
	            <div class="search-form-container">
					<?php get_search_form(); ?>
				</div>
	        </div>
	        <div class="ci-header-content">
	            <?php 
				$args=array("post_type"=>"page","p"=>326);
				query_posts( $args );
				while ( have_posts() ) : the_post();
				
				echo get_the_content();
				?>
				<?php endwhile; wp_reset_query(); ?>  
	        </div>
            <div class="ci-header-content">
                <?php 
				$args=array("post_type"=>"page","p"=>324);
				query_posts( $args );
				while ( have_posts() ) : the_post();
				echo get_the_content();
				?>
				<?php endwhile; wp_reset_query(); ?>  
            </div>
		</div>
	</div>
	<div class="bgmenu">
	    <div class="container posheader" style="">

    	<div class="header">

			<div class="row">

				<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">

					<a class="logo hidden-xs" href="<?php bloginfo("url");?>"><img src="<?php bloginfo("stylesheet_directory");?>/images/Logo.png" alt=""></a>

					<nav class="navbar  ">

					    <!-- Brand and toggle get grouped for better mobile display -->

					    <div class="navbar-header hidden-lg hidden-md hidden-sm">

					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

					        <span class="sr-only">Toggle navigation</span>

					        <span class="icon-bar"></span>

					        <span class="icon-bar"></span>

					        <span class="icon-bar"></span>

					      </button>

					      <a class="navbar-brand" href="<?php bloginfo("url");?>" ><img class="img-responsive center-block" src="<?php bloginfo("stylesheet_directory");?>/images/Logo.png" alt=""></a>

					    </div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<?php 

								wp_nav_menu(array(

									'theme_location' => 'primary',

									'container' => false,

									'menu_class' => 'nav navbar-nav ',

									'walker' => new Walker_Nav_Primary()

									)

								);

							?>



						</div>

					</nav>

					<a href="" class="icon-menu"><img src="<?php bloginfo("stylesheet_directory");?>/images/side-icon.png" alt=""></a>

				</div>

			</div>

		</div>

    </div>	
	</div>    
</div>
<section id="content">
	<?php
	if (have_posts()):
		// Start the loop.
		while ( have_posts() ) : the_post();

           //the_content();
			// Include the page content template.
			get_template_part( 'content', 'page' );
		endwhile;
		else:
			echo 'No content found';

		endif;
		?>
</section>
<footer>
	<div class="footerbottom">          
		<?php 
			$args=array("post_type"=>"page","p"=>260);
			query_posts( $args );
			while ( have_posts() ) : the_post();
			
			echo get_the_content();
			?>
					
			<?php endwhile; wp_reset_query(); ?>   
	</div>
</footer>
<?php get_footer(); ?>