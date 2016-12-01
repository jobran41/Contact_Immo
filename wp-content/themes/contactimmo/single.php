<?php get_header(); ?>

<section class="singlerecette" id="bgrecette">
	<!-- <div class="container-fluid"> -->
		<div class="uk-grid uk-grid-collapse">
		    <div class="uk-width-1-2">
		    	<div class="imgart">
					<?php $image = get_field('image');
				    if( !empty($image) ): ?>
				        <img class="img-responsive " src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
				    <?php endif; ?>
				    <div class="fontbottom">
				    	<div class="uk-grid uk-grid-collapse">
				    		<div class="uk-width-1-5">
				    			<p class="textfontbtl">
				    			<i class="uk-icon-user uk-icon-large"></i>
				    			 <?php the_field('personne'); ?>
				    			 </p>
				    		</div>
				    		<div class="uk-width-1-5">
				    			<p class="textfontbtl">
				    			<img  src="<?php  bloginfo('template_url');  ?>/img/recette/time.png">
				    			<?php the_field('time'); ?>
				    			</p>
				    		</div>
				    		<div class="uk-width-3-5">
				    			<div class="imgform">
			                    	 <?php $image = get_field('smallimage');
								    if( !empty($image) ): ?>
								        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
								    <?php endif; ?>
			                    </div>
				    		</div>
				    	</div>
				    </div>
				</div>
		    </div>
		    <div class="uk-width-1-2">
			    <h3 class="singletitle">Coulis de fruits rouges</h3>
				<h4 class="smalltitlesingle">Ingrédients pour 4 personnes</h4>
				<p class="singletext">
				200 g de framboises 200 g de beurre<br>
				250 g de groseilles<br>
				1/2 citron<br>
				2 cuil. à soupe de sucre pour confitures</p>

				<h4 class="smalltitlesingle">Etapes de préparation</h4>
				<p class="singletext">Rincez rapidement les groseilles et égrappez-les à l'aide d'une fourchette.
				Placez les groseilles, les framboises, le sucre et le jus du demi-citron dans le bol du mixer. Mixez pendant 1 ou 2 min.
				Filtrez le coulis pour éliminer les petites graines puis versez-le dans une petite casserole.
				Portez à ébullition. Retirez aussitôt du feu. Laissez refroidir.</p>

				<h4 class="smalltitlesingle">Astuces et conseils pour Coulis de fruits rouges</h4>
				<p class="singletext">Evitez de lavez les fruits rouges pour ne pas les gorger d'eau. Au besoin, essuyez-les avec un linge humide.</p>
				<p class="singletext">Pour égrapper les groseilles facilement, sans les abîmer, utilisez une fourchette et faites-la glisser le long des tiges.</p>
				<p class="singletext">Pour filtrer le coulis , versez-le dans une passoire fine, tapissée d'une gaze humide qui retiendra les minuscules graines.</p>
		    </div>
		</div>
		</section>

<?php get_template_part('content', 'headertop'); ?>
<?php get_footer(); ?>