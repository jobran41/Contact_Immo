<?php get_header(); ?>
<div id="fullpage">
	<div class="section " id="section1">
		  <div class="logo  "><img src="<?php bloginfo("stylesheet_directory");?>/images/logo.png" alt="" class="center-block "></div>
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
			    <div class="container">
			    	<div class="uk-grid">
			    		<div class="uk-width-2-10"></div>
						<div class="uk-width-3-10">
							<?php echo do_shortcode('[contact-form-7 id="23" title="Contact form 1"]'); ?>
						</div>
						<div class="uk-width-3-10">
							<?php 
						$args=array("post_type"=>"page","p"=>16);
						query_posts( $args );
						while ( have_posts() ) : the_post();
						?>
								<div class="part1 ">
								    
									<?php echo  get_the_content();?>
								</div>
								
						<?php endwhile; wp_reset_query(); ?>
						</div>
						<div class="uk-width-2-10"></div>
					</div>
			    </div>
			    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.7121365645758!2d10.186170467041876!3d36.810769202399015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDQ4JzM5LjAiTiAxMMKwMTEnMTYuMSJF!5e0!3m2!1sfr!2stn!4v1466520599488" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		

<div class="footer ">
	<p class="text-center ft">
		© Copyright 2016 - streamerz
	</p>
</div>

<?php get_footer(); ?>

