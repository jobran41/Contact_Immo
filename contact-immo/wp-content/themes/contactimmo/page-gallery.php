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
					<div class="col-xs-12">
						<a class="logo" href="<?php bloginfo("url");?>"><img src="<?php bloginfo("stylesheet_directory");?>/images/Logo.png" alt=""></a>
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
<section id="" class="nosbien">
<div class="container">

		<h3 class="titleagence text-center">Nos-<span class="spanagence">biens</span></h3>

		<?php $documents = new WP_Query(array(

		'post_type' => 'nosbien',

		)) ;?>

		<div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3" data-uk-grid="{gutter: 20}">

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

			

		</div>	



    </div>
</section>
<footer>
	<div class="footerbottom">          
		<ul>
			<li>Copyright 2015 ContactImmo</li>
			<li>|</li>
			<li>Tous droits réservés</li>
			<li>| </li>
			<li>Mentions légales </li>
			<li> | </li>
			<li><a href="www.streamerz.com">Powred by Streamerz</a></li>
		</ul>
	</div>
</footer>
<?php get_footer(); ?>