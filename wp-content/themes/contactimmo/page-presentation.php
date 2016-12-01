<?php get_header(); ?>

<div id="fullpage">
	<div class="section " id="section0">
		
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
		    	<div id="myCarousel" class="carousel slide fp-slide fp-table active" data-ride="carousel" style="width: 100%;">
		    		<!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						    <li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>
			            <div class="carousel-inner" role="listbox">
			              <div class="item active left">
			                  <img width="100%" height="" class="center-block img-responsive" src="<?php bloginfo("stylesheet_directory");?>/images/slide1.png"> 
			              </div>
			              <div class="item next left">
			                  <img width="100%" height="" class="center-block img-responsive" src="<?php bloginfo("stylesheet_directory");?>/images/slide1.png">
			              </div>
			              <div class="item">
			                  <img width="100%" height="" class="center-block img-responsive" src="<?php bloginfo("stylesheet_directory");?>/images/slide1.png">
			              </div>
			            </div>
			            <!-- <a class=" slidparalaxleft" href="#myCarousel" role="button" data-slide="prev">
			              <span class="" href="">«</span>
			            </a>
			            <a class=" slidparalaxright" href="#myCarousel" role="button" data-slide="next">
			              <span class="bx-next" href="">»</span>
			            </a> -->
			      </div>

	</div>
</div>

<div class="footer ">
	<p class="text-center ft">
		© Copyright 2016 - streamerz
	</p>
</div>

<?php get_footer(); ?>