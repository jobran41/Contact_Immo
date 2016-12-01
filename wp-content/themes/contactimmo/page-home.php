<?php  /* Template Name: Page Accueil*/ ?>
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
        
    <!--<div id="search-result"></div> -->

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

					      <a class="navbar-brand "  href="<?php bloginfo("url");?>" ><img class="img-responsive center-block" src="<?php bloginfo("stylesheet_directory");?>/images/Logo.png" alt=""></a>

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

	<div id="myCarousel" class="carousel slide fp-slide fp-table active" data-ride="carousel" style="width: 100%;">

		<!-- Indicators -->

			  <ol class="carousel-indicators">

			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

			    <li data-target="#myCarousel" data-slide-to="1"></li>

			  </ol>

            <div class="carousel-inner" role="listbox">

              <?php $documents = new WP_Query(array(

				'post_type' => 'slide',

				)) ;?>

				<?php while ($documents->have_posts()) : $documents->the_post(); ?>

				<div class="item  ">

	                  <?php $image = get_field('image');

						    if( !empty($image) ): ?>

						        <img width="100%" height="" class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />

						<?php endif; ?> 

	              </div>

				<?php  endwhile; ?>

            </div>

            <a class=" slidparalaxleft hidden-xs" href="#myCarousel" role="button" data-slide="prev">

              <span class="" href=""></span>

            </a>

            <a class=" slidparalaxright hidden-xs" href="#myCarousel" role="button" data-slide="next">

              <span class="bx-next" href=""></span>

            </a>

            <div class="ci-text-hello hidden-xs">
               <p>entrez <span class="slidtext"> chez vous</span></p>
            </div>

      </div>

      <div class="ci-intro-bar">
      	 <?php 
				$args=array("post_type"=>"page","p"=>328);
				query_posts( $args );
				while ( have_posts() ) : the_post();
				
				echo get_the_content();
				?>
				<?php endwhile; wp_reset_query(); ?>   

	   </div>

</div>

<section class="monprojet">

	<div class="bgmonprojt">

		<div class="container">

		    <ul class="uk-grid  uk-grid-width-small-1-1 uk-grid-width-medium-1-3 uk-grid-width-large-1-5 mesprojet">

			    <?php $documents = new WP_Query(array(

					'post_type' => 'projet',

					'showposts' => 5,

					'post_parent' => 0

					)) ;?>

					<?php while ($documents->have_posts()) : $documents->the_post(); ?>

					<li>

						<a href="<?php the_permalink(); ?>" class="blockprojet">

					    	<div class="panel-heading">

				                <span class="maisons">

				                	<?php $image = get_field('smallimg');

								    if( !empty($image) ): ?>

								        <img width="100%" height="" class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />

								    <?php endif; ?> 

				                </span>

				                <span class="titlepro"><?php the_title(); ?></span>

				            </div>

				            <div class="panel-body">

				                <?php echo get_the_excerpt();?>

				            </div>

				        </a>    

				    </li>

				<?php  endwhile; ?>

			</ul>

	    </div>

	</div>

    <?php 
			$args=array("post_type"=>"page","p"=>238);
			query_posts( $args );
			while ( have_posts() ) : the_post();
			
			echo get_the_content();
			?>
					
			<?php endwhile; wp_reset_query(); ?>   

</section>

<section class="presentation">

	 <?php 
			$args=array("post_type"=>"page","p"=>241);
			query_posts( $args );
			while ( have_posts() ) : the_post();
			
			echo get_the_content();
			?>
					
			<?php endwhile; wp_reset_query(); ?>   

</section>

<section class="nosbien">

	<div class="container">

		<h3 class="titleagence text-center">Nos<span class="spanagence">biens</span></h3>

		<?php $documents = new WP_Query(array(

		'post_type' => 'nosbien',

		)) ;?>

		<div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-3" data-uk-grid="{gutter: 20}">

			<?php $i=0; while ($documents->have_posts()) : $documents->the_post(); ?>

	         <div class="img<?php echo $i ; ?> jsgrid">

				<div class="uk-thumbnail uk-overlay-hover" data-uk-modal="{target:'#modal-<?php echo $i ; ?>'}">

	                <figure class="uk-overlay">

	                	<?php $image = get_field('images');

					    if( !empty($image) ): ?>

					        <img width="100%" class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />

					    <?php endif; ?>

	                	<figcaption class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></figcaption>

	                    <a class="uk-position-cover" href="#"></a>

	                </figure>

	                <a href="#" class="captionportfolio">

						<h3 class="titleportfolio"><?php  the_title();?></h3>

					    <p class="contentporfolio"><?php  the_excerpt();?></p>

					</a>

	            </div>

	            <div id="modal-<?php echo $i ; ?>" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: scroll;">

	                <div class="uk-modal-dialog uk-modal-dialog-lightbox">

	                    <a href="" class="uk-modal-close uk-close uk-close-alt"></a>

	                   <?php $image = get_field('images');

					    if( !empty($image) ): ?>

					        <img width="100%" class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />

					    <?php endif; ?>

	                </div>

	            </div>

			</div>

			<?php   $i++ ; endwhile; ?> 

			<a href="http://streamerzweb.com/contact-immo/gallery/" class="voirplus">VOIR TOUS</a>

		</div>	



    </div>

</section>

<section id="contact">

	
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.6660389966105!2d7.350355015646935!3d48.07808877921872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479165ddc458918d%3A0xe969cffe73d092c9!2s2+Place+Jean+de+Lattre+de+Tassigny%2C+68000+Colmar!5e0!3m2!1sfr!2sfr!4v1474018169759" width="100%" height="470" frameborder="0" style="border:0" allowfullscreen></iframe>

	 

	 <div class="container infocontact">

		<div class="uk-grid">

			<div class="uk-width-large-1-2 uk-width-small-1-1 uk-width-medium-1-2">

				<a class="logocontact" href="<?php bloginfo("url");?>"><img src="<?php bloginfo("stylesheet_directory");?>/images/Logo.png" alt=""></a>

				<ul class="reseau">

					<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

					<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

					<li><a href=""><i class="fa fa-rss" aria-hidden="true"></i></a></li>

					<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>

				</ul>

				<?php 
			$args=array("post_type"=>"page","p"=>71);
			query_posts( $args );
			while ( have_posts() ) : the_post();
			
			echo get_the_content();
			?>
					
			<?php endwhile; wp_reset_query(); ?>   

				

			</div>

			<div class="uk-width-large-1-2 uk-width-small-1-1 uk-width-medium-1-2">

				<?php echo do_shortcode( '[contact-form-7 id="17" title="Formulaire de contact 1"]' ); ?>

			</div>

		</div>		

	</div>

<div class="footerbottom2 footerbottom">          

		<?php 
			$args=array("post_type"=>"page","p"=>260);
			query_posts( $args );
			while ( have_posts() ) : the_post();
			
			echo get_the_content();
			?>
					
			<?php endwhile; wp_reset_query(); ?>   

</div>


</section>
<?php get_footer(); ?>