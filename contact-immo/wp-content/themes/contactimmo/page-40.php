<?php get_header(); ?>

<!-- <div id="fullpage">
	<div class="section " id="section0"> -->
		
		  <div class="logo  "><a href="<?php bloginfo('url');?>"><img src="<?php bloginfo("stylesheet_directory");?>/images/logo.png" alt="" class="center-block "></a></div>
		  <div class="container-fluid" style="">
					<div class="row">
						<div class="col-xs-12">
							<nav class="navbar  ">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header hidden-lg hidden-md hidden-sm">
							      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							      <a class="navbar-brand" href="#">Awesome Theme</a>
							    </div>
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<?php 
										wp_nav_menu(array(
											'theme_location' => 'primary',
											'container' => false,
											'menu_class' => 'nav navbar-nav navbar-right',
											'walker' => new Walker_Nav_Primary()
											)
										);
									?>
								</div>
							  
							</nav>
						</div>
						<div class="col-xs-12" style="display:none;">
							<div class="search-form-container">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
			    </div>	
			    <div class="container-fluid menu2" style="">
					<div class="row">
						<div class="col-xs-12">
							<nav class="navbar  ">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header hidden-lg hidden-md hidden-sm">
							      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							      <a class="navbar-brand" href="#">Awesome Theme</a>
							    </div>
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
									<?php 
										wp_nav_menu(array(
											'theme_location' => 'top',
											'container' => false,
											'menu_class' => 'nav navbar-nav navbar-right',
											'walker' => new Walker_Nav_Primary()
											)
										);
									?>
								</div>
							  
							</nav>
						</div>
						<div class="col-xs-12" style="display:none;">
							<div class="search-form-container">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
			    </div>	

			    <div class="content">
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
			    	
			    </div>
		    	

<!-- 	</div>
</div> -->

<!-- <div class="footer ">
	<p class="text-center ft">
		© Copyright 2016 - streamerz
	</p>
</div> -->

<?php get_footer(); ?>