<?php get_header(); ?>
<?php get_template_part('content', 'headertop'); ?>
<div class="bgproduit">
	<div class="container-fluid ">
	<div class="elemprod" style=" margin-left:-15px;margin-right:-15px;" >
		<div class="uk-grid uk-grid-collapse">
		    <div class="uk-width-8-10 bgcatalogue" style="">
			    <div class="uk-grid uk-grid-collapse "> 	
				    <ul  class=" uk-width-1-3 bgmargarine  bgprodimg nav nav-tabs unstyled" >
						<li >
							<div class="uk-margin-top">
								<a href="#grass" data-toggle="tab" >
								<img width="60%"height="40%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/grass.png" alt="" >
								<div class="bggrasstxt bgalltxtarticle">
							    	<h2 class="" id="txtprod">Matiéres  grass <br> Composé</h2>
			    	                <a href="#my-tab-content" class="flechdown" data-uk-smooth-scroll="{offset: 155}">
								    	<svg class="arrows floating">
						                    <path d="M0 40 L20 62 L40 40"></path>
						               </svg>
					                </a>
							    </div>
							   </a>
							</div>
						</li>
					</ul>
					<ul  class=" uk-width-1-3 bgprodimg bgmargarinepro nav nav-tabs unstyled" >	
				        <li class="active">	
							<div class="uk-margin-top" >
				    	        <a  href="#margarine" data-toggle="tab" >
									<img width="60%"height="40%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/margarinee.png" alt="" >
								    <div class="bgmargarinetxt bgalltxtarticle">
								    	<h2 class="padingtoptxt" id="txtprod">Margarine</h2>
								    	<a href="#my-tab-content" class="flechdown" data-uk-smooth-scroll="{offset: 155}">
									    	<svg class="arrows floating">
							                    <path d="M0 40 L20 62 L40 40"></path>
							               </svg>
						                </a>
								    </div>
					            </a>
							</div>
						</li>
					</ul>
					<ul  class=" uk-width-1-3  bgvetela  bgprodimg bggrass nav nav-tabs unstyled" >
			            <li>
							<div class="uk-margin-top">
								<a  href="#margarinepro" data-toggle="tab">
									<img width="60%"height="40%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/margarinepro.png" alt="" >
									<div class="bgmargarineprotxt bgalltxtarticle">
								    	<h2 class="" id="txtprod">Margarine <br> professionnelle</h2>
								    	<a href="#my-tab-content" class="flechdown" data-uk-smooth-scroll="{offset: 155}">
									    	<svg class="arrows floating">
							                    <path d="M0 40 L20 62 L40 40"></path>
							               </svg>
						                </a>
								    </div>
							   </a>
							</div>
						</li>
					</ul>
				</div>
 				<div class="uk-grid uk-grid-collapse "> 	
				    <ul  class=" uk-width-1-3 bgvetela  bgprodimg nav nav-tabs unstyled" >
						<li >
							<div class="uk-margin-top">
								<a href="#graise" data-toggle="tab">
								<img width="38%"height="23%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/graisevegetal.png" alt="" >
								<div class="bgvegetaltxt bgalltxtarticle">
							    	<h2 class="" id="txtprod">Graise <br> végétale</h2>
							    	<a href="#my-tab-content" class="flechdown" data-uk-smooth-scroll="{offset: 155}">
								    	<svg class="arrows floating">
						                    <path d="M0 40 L20 62 L40 40"></path>
						               </svg>
					                </a>
							    </div>
							   </a>
							</div>
						</li>
					</ul>
					<ul  class=" uk-width-1-3 bgprodimg bgmoutard nav nav-tabs unstyled" >	
				        <li class="active floatnone">	
							<div class="uk-margin-top">
				    	        <a  href="#moutard" data-toggle="tab" >
									<img width="23%"height="13%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/moutard.png" alt="" >
									<div class="bgmoutardtxt bgalltxtarticle">
								    	<h2 class="padingtoptxt" id="txtprod">Moutard</h2>
									    	<a href="#my-tab-content" class="flechdown" data-uk-smooth-scroll="{offset: 155}">
									    	<svg class="arrows floating">
							                    <path d="M0 40 L20 62 L40 40"></path>
							               </svg>
						                </a>
								    </div>
					            </a>
							</div>
						</li>
					</ul>
					<ul  class=" uk-width-1-3  bgvetela  bgprodimg bgmayonaise nav nav-tabs unstyled" >
			            <li class="floatnone">
							<div class="uk-margin-top">
								<a  href="#mayonaise" data-toggle="tab">
									<img width="25%"height="15%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/mayonaise.png" alt="" >
									<div class="bgmayonaisetxt bgalltxtarticle">
								    	<h2 class="padingtoptxt" id="txtprod">Mayonaise</h2>
									    	<a href="#my-tab-content" class="flechdown" data-uk-smooth-scroll="{offset: 155}">
									    	<svg class="arrows floating">
							                    <path d="M0 40 L20 62 L40 40"></path>
							               </svg>
						                </a>
								    </div>
							   </a>
							</div>
						</li>
					</ul>
				</div>
		    </div>
		    <div class="uk-width-2-10 colorgreen" >
	            <ul  class="nav  nav-tabs unstyled bghuil " >
			         <li>
				        <div class="uk-margin-top"  >
					    	<a href="#huil" data-toggle="tab">
						    	<img width="220px"height="300px" class="img-responsive center-block" src="<?php   bloginfo('template_url')?>/img/produit/huil.png" alt="" >
						    	<div class="bgdesc ">
						    		<h2 id="txtprod">
			                     	    <?php $term = get_term( '2', 'type' ); 
										echo $term->name;?>
	                                </h2>
	                                <a href="#my-tab-content" class="flechdownhuil" data-uk-smooth-scroll="{offset: 155}">
								    	<svg class="arrows floating">
						                    <path d="M0 40 L20 62 L40 40"></path>
						               </svg>
					                </a>
						    	</div>
					        </a>
						</div>
				    </li>
				</ul>
		    </div>
		</div>
	</div>
</div>
<div class="don"></div>
	<div class="container" style="margin-top:200px;">
		<div id="my-tab-content" class="tab-content">
		<div class="tab-pane " id="mayonaise">
		    <!-- <h1>mayonaise</h1> -->
		    <div class="uk-margin" data-uk-slideset="{medium: 3, animation: 'slide-top'}">
            <ul class="uk-subnav stylenav uk-subnav-pill">
                <!-- <li  data-uk-filter=""><a href="#">All</a></li> -->
                <li data-uk-filter="<?php $term = get_term( '74', 'type' ); 
						echo $term->slug;
					?>" class=" uk-active activ activemenu center-block"   >
                	<a href="#" class="upper">
                	<?php $term = get_term( '74', 'type' ); 
						echo $term->name;
					?>
					</a>
				</li>
                <li data-uk-filter="<?php $term = get_term( '73', 'type' ); 
						echo $term->slug;
					?> " class="center-block activemenu"><a class="upper" href="#">
                	<?php $term = get_term( '73', 'type' ); 
						echo $term->name;
					?>
                </a></li>
            </ul>
            <div class="uk-slidenav-position uk-margin">
                <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-3">
                       <?php query_posts('post_type=produit&showposts=-1&cat=66'); ?>
				            <?php while ( have_posts() ) : the_post(); ?>
				            <?php $terms = get_the_terms($post->id,'type');
				               $terms_name=array();
				               foreach($terms as $term){
				                $terms_name[] = $term->name;
				               }
				            ?>
				            <li class="uk-active <?php echo $term->slug ;?>" style="display: none;" data-uk-filter="<?php echo $term->slug ;?>">
					            <a  href="#<?php echo  $postid = get_the_ID();  ?>" data-uk-modal="">
								    <div class="cadre2 text-center">							    
										<?php $image = get_field('image');
									    if( !empty($image) ): ?>
									        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>"  height="300" width="200" />
									    <?php endif; ?>
									    <?php the_title();  ?>
									</div>
									<div style="display: none; overflow-y: auto;" aria-hidden="false" id="<?php echo  $postid = get_the_ID();  ?>" class="uk-modal uk-open">
					                <div class="uk-modal-dialog uk-modal-dialog-large posmodal">
					                    <button type="button" class="uk-modal-close uk-close"></button>
					                     <div class="uk-grid">
					                     	<div class="uk-width-10-10">
					                     	<?php  $terns = get_field('domaine'); // $t = get_field('domaine'); ?>
					                     	 <?php
					                     	 foreach($terns as $tern){
									                $terns_name[] = $tern->name;
									                 $tern->term_id;
									               }?>
									               <div class="uk-hidden">
									               	<?php  echo  $var = $tern->term_id;?>
									               </div>
					                     	<?php 
					                     	$ct=0;
					                     	$args_produits=array("post_type"=>"produit","order"=>"Asc","cat"=>$var);?>
					                     	<?php $documents = new WP_Query($args_produits) ;?>
													<?php while ($documents->have_posts()) : $documents->the_post(); ?>
															<div class="uk-accordion <?php echo 'j'.$ct ;?>  " data-uk-accordion="" >
											                   <h3 class="uk-accordion-title uk-active  "><?php  the_title(); ?></h3>
												                <div aria-expanded="false" data-wrapper="true" style="height: 0px; position: relative; overflow: hidden;">
													                <div class="uk-accordion-content  ">
													                    <div class="uk-grid">
													                     	<div class="uk-width-2-10">
														                     	<div class="imgart">
																					<?php $image = get_field('image');
																				    if( !empty($image) ): ?>
																				        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" height="400" width="300"/>
																				    <?php endif; ?>
																				</div>
													                     	</div>
													                     	<div class="uk-width-8-10">
													                     		<div class="uk-modal-header">
															                        <h3 class="modaltitle">
															                        	<?php the_title();  ?>
															                        </h3>
															                    </div>
															                     <p class="txtpoup">
										                                         <?php echo get_the_content(); // the_field('content');  ?>
															                    </p>
													                     	</div>
													                     </div>
													                </div>
											                    </div>
											                </div>
                                                           <?php $ct++;  ?>
		                                    <?php  endwhile; ?>
					                     	</div>
					                     </div>
					                </div>
					            </div>
								</a>
						    </li>
				            <?php endwhile; ?>
				        <?php wp_reset_query(); ?>
                </ul>
                <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
            </div>
            <ul class="uk-slideset-nav uk-dotnav uk-flex-center"><li class="uk-active" data-uk-slideset-item="0"><a></a></li><li data-uk-slideset-item="1"><a></a></li><li data-uk-slideset-item="2"><a></a></li><li data-uk-slideset-item="3"><a></a></li><li data-uk-slideset-item="4"><a></a></li></ul>
        </div>
        </div>
        <div class="tab-pane " id="moutard">
            <h1>moutard</h1>
            <div class="uk-width-medium-1-2 uk-row-first">
                    <div data-uk-switcher="{connect:'#button-content'}">
                        <a aria-expanded="true" class="uk-button uk-active" href="#">Link</a>
                        <button aria-expanded="false" class="uk-button">Button</button>
                        <button aria-expanded="false" class="uk-button">Button</button>
                        <button aria-expanded="false" class="uk-button" disabled="">Disabled</button>
                    </div>
                    <ul id="button-content" class="uk-switcher uk-margin">
                        <li aria-hidden="false" class="uk-active">Hello!</li>
                        <li class="" aria-hidden="true">Hello again!</li>
                        <li class="" aria-hidden="true">Bazinga!</li>
                        <li aria-hidden="true">You will never see me!</li>
                    </ul>
                </div>
        </div>
        <div class="tab-pane " id="graise">
            <!-- <h1>graise vegetal</h1> -->
            <div class="uk-margin" data-uk-slideset="{medium: 4, animation: 'slide-left'}">
            <ul class="uk-subnav stylenav uk-subnav-pill">
                <!-- <li  data-uk-filter=""><a href="#">All</a></li> -->
                <li data-uk-filter="<?php $term = get_term( '8', 'type' ); 
						echo $term->slug;
					?>" class=" uk-active activ activemenu center-block"   >
                	<a href="#" class="upper">
                	<?php $term = get_term( '46', 'type' ); 
						echo $term->name;
					?>
					</a>
				</li>
            </ul>
            <div class="uk-slidenav-position uk-margin">
                <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4">
                       <?php query_posts('post_type=produit&showposts=-1&cat=38'); ?>
				            <?php while ( have_posts() ) : the_post(); ?>
				            <?php $terms = get_the_terms($post->id,'type');
				               $terms_name=array();
				               foreach($terms as $term){
				                $terms_name[] = $term->name;
				               }
				            ?>
				            <li class="uk-active" style="display: none;" data-uk-filter="<?php echo $term->slug ;?>">
					            <a  href="#<?php echo  $postid = get_the_ID();  ?>" data-uk-modal="">
								    	<div class="cadre2 text-center">							    
										<?php $image = get_field('image');
									    if( !empty($image) ): ?>
									        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>"  height="300" width="200" />
									    <?php endif; ?>
									    <?php the_title();  ?>
									    </div>
									
									<div style="display: none; overflow-y: auto;" aria-hidden="false" id="<?php echo  $postid = get_the_ID();  ?>" class="uk-modal uk-open">
					                <div class="uk-modal-dialog uk-modal-dialog-large posmodal">
					                    <button type="button" class="uk-modal-close uk-close"></button>
					                     <div class="uk-grid">
					                     	<div class="uk-width-2-10">
						                     	<div class="imgart">
													<?php $image = get_field('image');
												    if( !empty($image) ): ?>
												        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" height="400" width="300"/>
												    <?php endif; ?>
												</div>
					                     	</div>
					                     	<div class="uk-width-8-10">
					                     		<div class="uk-modal-header">
							                        <h3 class="modaltitle">
							                        	<?php the_title();  ?>
							                        </h3>
							                    </div>
							                     <p class="txtpoup">
		                                         <?php echo get_the_content();  // the_field('content'); ?>
							                    </p>
					                     	</div>
					                     </div>
					                </div>
					            </div>
								</a>
						        
						    </li>
				            <?php endwhile; ?>
				        <?php wp_reset_query(); ?>
                </ul>
                <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
            </div>
            <ul class="uk-slideset-nav uk-dotnav uk-flex-center"><li class="uk-active" data-uk-slideset-item="0"><a></a></li><li data-uk-slideset-item="1"><a></a></li><li data-uk-slideset-item="2"><a></a></li><li data-uk-slideset-item="3"><a></a></li><li data-uk-slideset-item="4"><a></a></li></ul>
        </div>




        </div>	
        <div class="tab-pane" id="margarinepro">
           <!--  <h1>margarine pro</h1> -->
           <div class="uk-margin" data-uk-slideset="{medium: 3, animation: 'slide-top'}">
            <ul class="uk-subnav stylenav uk-subnav-pill">
                <!-- <li  data-uk-filter=""><a href="#">All</a></li> -->
                <li data-uk-filter="<?php $term = get_term( '53', 'type' ); 
						echo $term->slug;
					?>" class=" uk-active activ activemenu center-block"   >
                	<a href="#" class="upper">
                	<?php $term = get_term( '53', 'type' ); 
						echo $term->name;
					?>
					</a>
				</li>
                <li data-uk-filter="<?php $term = get_term( '56', 'type' ); 
						echo $term->slug;
					?> " class="center-block activemenu"><a class="upper" href="#">
                	<?php $term = get_term( '56', 'type' ); 
						echo $term->name;
					?>
                </a></li>
                <li data-uk-filter="<?php $term = get_term( '54', 'type' ); 
						echo $term->slug;
					?>" class="center-block activemenu"><a class="upper" href="#">
                	<?php $term = get_term( '54', 'type' ); 
						echo $term->name;
					?>
                </a></li>
                <li data-uk-filter="<?php $term = get_term( '55', 'type' ); 
						echo $term->slug;
					?>" class="center-block activemenu"><a class="upper" href="#">
                	<?php $term = get_term( '55', 'type' ); 
						echo $term->name;
					?>
                </a></li>
            </ul>
            <div class="uk-slidenav-position uk-margin">
                <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4">
                       <?php query_posts('post_type=produit&showposts=-1&cat=44'); ?>
				            <?php while ( have_posts() ) : the_post(); ?>
				            <?php $terms = get_the_terms($post->id,'type');
				               $terms_name=array();
				               foreach($terms as $term){
				                $terms_name[] = $term->name;
				               }
				            ?>
				            <li class="uk-active <?php echo $term->slug ;?>" style="display: none;" data-uk-filter="<?php echo $term->slug ;?>">
					            <a  href="#<?php echo  $postid = get_the_ID();  ?>" data-uk-modal="">
								    <div class="cadre2 text-center">							    
										<?php $image = get_field('image');
									    if( !empty($image) ): ?>
									        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>"  height="300" width="200" />
									    <?php endif; ?>
									    <?php the_title();  ?>
									</div>
									<div style="display: none; overflow-y: auto;" aria-hidden="false" id="<?php echo  $postid = get_the_ID();  ?>" class="uk-modal uk-open">
					                <div class="uk-modal-dialog uk-modal-dialog-large posmodal">
					                    <button type="button" class="uk-modal-close uk-close"></button>
					                     <div class="uk-grid">
					                     	<div class="uk-width-10-10">
					                     	<?php  $terns = get_field('domaine'); // $t = get_field('domaine'); ?>
					                     	 <?php
					                     	 foreach($terns as $tern){
									                $terns_name[] = $tern->name;
									                 $tern->term_id;
									               }?>
									               <div class="uk-hidden">
									               	<?php  echo  $var = $tern->term_id;?>
									               </div>
					                     	<?php 
					                     	$ct=0;
					                     	$args_produits=array("post_type"=>"produit","order"=>"Asc","cat"=>$var);?>
					                     	<?php $documents = new WP_Query($args_produits) ;?>
													<?php while ($documents->have_posts()) : $documents->the_post(); ?>
															<div class="uk-accordion <?php echo 'j'.$ct ;?>  " data-uk-accordion="" >
											                   <h3 class="uk-accordion-title uk-active  "><?php  the_title(); ?></h3>
												                <div aria-expanded="false" data-wrapper="true" style="height: 0px; position: relative; overflow: hidden;">
													                <div class="uk-accordion-content  ">
													                    <div class="uk-grid">
													                     	<div class="uk-width-2-10">
														                     	<div class="imgart">
																					<?php $image = get_field('image');
																				    if( !empty($image) ): ?>
																				        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" height="400" width="300"/>
																				    <?php endif; ?>
																				</div>
													                     	</div>
													                     	<div class="uk-width-8-10">
													                     		<div class="uk-modal-header">
															                        <h3 class="modaltitle">
															                        	<?php the_title();  ?>
															                        </h3>
															                    </div>
															                     <p class="txtpoup">
										                                         <?php echo get_the_content(); // the_field('content');  ?>
															                    </p>
													                     	</div>
													                     </div>
													                </div>
											                    </div>
											                </div>
                                                           <?php $ct++;  ?>
		                                    <?php  endwhile; ?>
					                     	</div>
					                     </div>
					                </div>
					            </div>
								</a>
						    </li>
				            <?php endwhile; ?>
				        <?php wp_reset_query(); ?>
                </ul>
                <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
            </div>
            <ul class="uk-slideset-nav uk-dotnav uk-flex-center"><li class="uk-active" data-uk-slideset-item="0"><a></a></li><li data-uk-slideset-item="1"><a></a></li><li data-uk-slideset-item="2"><a></a></li><li data-uk-slideset-item="3"><a></a></li><li data-uk-slideset-item="4"><a></a></li></ul>
        </div>
        </div>
        <div class="tab-pane" id="margarine">
            <h1 class="titleslidprod">margarine</h1>
            <div class="uk-margin" data-uk-slideset="{medium: 3, animation: 'slide-top'}">
            <ul class="uk-subnav stylenav uk-subnav-pill">
                <!-- <li  data-uk-filter=""><a href="#">All</a></li> -->
                <li data-uk-filter="<?php $term = get_term( '12', 'type' ); 
						echo $term->slug;
					?>" class=" uk-active activ activemenu center-block"   >
                	<a href="#" class="upper">
                	<?php $term = get_term( '12', 'type' ); 
						echo $term->name;
					?>
					</a>
				</li>
                <li data-uk-filter="<?php $term = get_term( '13', 'type' ); 
						echo $term->slug;
					?> " class="center-block activemenu"><a class="upper" href="#">
                	<?php $term = get_term( '13', 'type' ); 
						echo $term->name;
					?>
                </a></li>
                <li data-uk-filter="<?php $term = get_term( '14', 'type' ); 
						echo $term->slug;
					?>" class="center-block activemenu"><a class="upper" href="#">
                	<?php $term = get_term( '14', 'type' ); 
						echo $term->name;
					?>
                </a></li>
            </ul>
            <div class="uk-slidenav-position uk-margin">
                <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4">
                       <?php query_posts('post_type=produit&showposts=-1&cat=26'); ?>
				            <?php while ( have_posts() ) : the_post(); ?>
				            <?php $terms = get_the_terms($post->id,'type');
				               $terms_name=array();
				               foreach($terms as $term){
				                $terms_name[] = $term->name;
				               }
				            ?>
				            <li class="uk-active" style="display: none;" data-uk-filter="<?php echo $term->slug ;?>">
					            <a  href="#<?php echo  $postid = get_the_ID();  ?>" data-uk-modal="">
								    <div class="cadre2 text-center">							    
										<?php $image = get_field('image');
									    if( !empty($image) ): ?>
									        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>"  height="300" width="200" />
									    <?php endif; ?>
									    <?php the_title();  ?>
									</div>
									<div style="display: none; overflow-y: auto;" aria-hidden="false" id="<?php echo  $postid = get_the_ID();  ?>" class="uk-modal uk-open">
					                <div class="uk-modal-dialog uk-modal-dialog-large posmodal">
					                    <button type="button" class="uk-modal-close uk-close"></button>
					                     <div class="uk-grid">
					                     	<div class="uk-width-10-10">
					                     	<?php  $terns = get_field('domaine'); // $t = get_field('domaine'); ?>
					                     	 <?php
					                     	 foreach($terns as $tern){
									                $terns_name[] = $tern->name;
									                 $tern->term_id;
									               }?>
									               <div class="uk-hidden">
									               	<?php  echo  $var = $tern->term_id;?>
									               </div>
					                     	<?php 
					                     	$ct=0;
					                     	$args_produits=array("post_type"=>"produit","order"=>"Asc","cat"=>$var);?>
					                     	<?php $documents = new WP_Query($args_produits) ;?>
													<?php while ($documents->have_posts()) : $documents->the_post(); ?>
															<div class="uk-accordion <?php echo 'j'.$ct ;?>  " data-uk-accordion="" >
											                   <h3 class="uk-accordion-title uk-active  "><?php  the_title(); ?></h3>
												                <div aria-expanded="false" data-wrapper="true" style="height: 0px; position: relative; overflow: hidden;">
													                <div class="uk-accordion-content  ">
													                    <div class="uk-grid">
													                     	<div class="uk-width-2-10">
														                     	<div class="imgart">
																					<?php $image = get_field('image');
																				    if( !empty($image) ): ?>
																				        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" height="400" width="300"/>
																				    <?php endif; ?>
																				</div>
													                     	</div>
													                     	<div class="uk-width-8-10">
													                     		<div class="uk-modal-header">
															                        <h3 class="modaltitle">
															                        	<?php the_title();  ?>
															                        </h3>
															                    </div>
															                     <p class="txtpoup">
										                                         <?php echo get_the_content(); // the_field('content');  ?>
															                    </p>
													                     	</div>
													                     </div>
													                </div>
											                    </div>
											                </div>
                                                           <?php $ct++;  ?>
		                                    <?php  endwhile; ?>
					                     	</div>
					                     </div>
					                </div>
					            </div>
								</a>
						    </li>
				            <?php endwhile; ?>
				        <?php wp_reset_query(); ?>
                </ul>
                <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
            </div>
            <ul class="uk-slideset-nav uk-dotnav uk-flex-center"><li class="uk-active" data-uk-slideset-item="0"><a></a></li><li data-uk-slideset-item="1"><a></a></li><li data-uk-slideset-item="2"><a></a></li><li data-uk-slideset-item="3"><a></a></li><li data-uk-slideset-item="4"><a></a></li></ul>
        </div>
        </div>
        <div class="tab-pane" id="yellow">
            <h1>yellow</h1>
            <p>yellow yellow yellow yellow yellow</p>
        </div>
        <!-- start tab huil -->
        <div class="tab-pane active" id="huil">
            <h1 class="titleslidprod">huilE</h1>
            <div class="uk-margin" data-uk-slideset="{medium: 3, animation: 'slide-bottom'}">
            <ul class="uk-subnav stylenav uk-subnav-pill">
                <!-- <li  data-uk-filter=""><a href="#">All</a></li> -->
                <li data-uk-filter="<?php $term = get_term( '8', 'type' ); 
						echo $term->slug;
					?>" class=" uk-active activ activemenu center-block"   >
                	<a href="#" class="upper">
                	<?php $term = get_term( '8', 'type' ); 
						echo $term->name;
					?>
					</a>
				</li>
                <li data-uk-filter="<?php $term = get_term( '9', 'type' ); 
						echo $term->slug;
					?> " class="center-block activemenu"><a class="upper" href="#">
                	<?php $term = get_term( '9', 'type' ); 
						echo $term->name;
					?>
                </a></li>
                <li data-uk-filter="<?php $term = get_term( '10', 'type' ); 
						echo $term->slug;
					?>" class="center-block activemenu"><a class="upper" href="#">
                	<?php $term = get_term( '10', 'type' ); 
						echo $term->name;
					?>
                </a></li>
                <li data-uk-filter="<?php $term = get_term( '11', 'type' ); 
						echo $term->slug;
					?>" class="center-block activemenu"><a class="upper" href="#">
                	<?php $term = get_term( '11', 'type' ); 
						echo $term->name;
					?>
                </a></li>
            </ul>

            <div class="uk-slidenav-position uk-margin">
                <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4">
                       <?php query_posts('post_type=produit&showposts=-1&cat=21'); ?>
				            <?php while ( have_posts() ) : the_post(); ?>
				            <?php $terms = get_the_terms($post->id,'type');
				               $terms_name=array();
				               foreach($terms as $term){
				                $terms_name[] = $term->name;
				               }
				            ?>
				            <li class="uk-active" style="display: none;" data-uk-filter="<?php echo $term->slug ;?>">
					            <a  href="#<?php echo  $postid = get_the_ID();  ?>" data-uk-modal="">
								    	<div class="cadre2 text-center">							    
										<?php $image = get_field('image');
									    if( !empty($image) ): ?>
									        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>"  height="300" width="200" />
									    <?php endif; ?>
									    <?php the_title();  ?>
									    </div>
									
									<div style="display: none; overflow-y: auto;" aria-hidden="false" id="<?php echo  $postid = get_the_ID();  ?>" class="uk-modal uk-open">
					                <div class="uk-modal-dialog uk-modal-dialog-large posmodal">
					                    <button type="button" class="uk-modal-close uk-close"></button>
					                     <div class="uk-grid">
					                     	<div class="uk-width-2-10">
						                     	<div class="imgart">
													<?php $image = get_field('image');
												    if( !empty($image) ): ?>
												        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" height="400" width="300"/>
												    <?php endif; ?>
												</div>
					                     	</div>
					                     	<div class="uk-width-8-10">
					                     		<div class="uk-modal-header">
							                        <h3 class="modaltitle">
							                        	<?php the_title();  ?>
							                        </h3>
							                    </div>
							                     <p class="txtpoup">
		                                         <?php echo get_the_content();  // the_field('content'); ?>
							                    </p>
					                     	</div>
					                     </div>
					                </div>
					            </div>
								</a>
						        
						    </li>
				            <?php endwhile; ?>
				        <?php wp_reset_query(); ?>
                </ul>
                <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
            </div>
            <ul class="uk-slideset-nav uk-dotnav uk-flex-center"><li class="uk-active" data-uk-slideset-item="0"><a></a></li><li data-uk-slideset-item="1"><a></a></li><li data-uk-slideset-item="2"><a></a></li><li data-uk-slideset-item="3"><a></a></li><li data-uk-slideset-item="4"><a></a></li></ul>
        </div>
        </div>
        <!-- end tab huil -->
        <div class="tab-pane" id="grass">
        <!-- <h1>matier compose grass</h1> -->
          <div class="uk-margin" data-uk-slideset="{medium: 4, animation: 'slide-left'}">
            <ul class="uk-subnav stylenav uk-subnav-pill">
                <!-- <li  data-uk-filter=""><a href="#">All</a></li> -->
                <li data-uk-filter="<?php $term = get_term( '7', 'type' ); 
						echo $term->slug;
					?>" class=" uk-active activ activemenu center-block"   >
                	<a href="#" class="upper">
                	<?php $term = get_term( '7', 'type' ); 
						echo $term->name;
					?>
					</a>
				</li>
            </ul>
            <div class="uk-slidenav-position uk-margin">
                <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4">
                       <?php query_posts('post_type=produit&showposts=-1&cat=42'); ?>
				            <?php while ( have_posts() ) : the_post(); ?>
				            <?php $terms = get_the_terms($post->id,'type');
				               $terms_name=array();
				               foreach($terms as $term){
				                $terms_name[] = $term->name;
				               }
				            ?>
				            <li class="uk-active" style="display: none;" data-uk-filter="<?php echo $term->slug ;?>">
					            <a  href="#<?php echo  $postid = get_the_ID();  ?>" data-uk-modal="">
								    	<div class="cadre2 text-center">							    
										<?php $image = get_field('image');
									    if( !empty($image) ): ?>
									        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>"  height="300" width="200" />
									    <?php endif; ?>
									    <?php the_title();  ?>
									    </div>
									
									<div style="display: none; overflow-y: auto;" aria-hidden="false" id="<?php echo  $postid = get_the_ID();  ?>" class="uk-modal uk-open">
					                <div class="uk-modal-dialog uk-modal-dialog-large posmodal">
					                    <button type="button" class="uk-modal-close uk-close"></button>
					                     <div class="uk-grid">
					                     	<div class="uk-width-2-10">
						                     	<div class="imgart">
													<?php $image = get_field('image');
												    if( !empty($image) ): ?>
												        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" height="400" width="300"/>
												    <?php endif; ?>
												</div>
					                     	</div>
					                     	<div class="uk-width-8-10">
					                     		<div class="uk-modal-header">
							                        <h3 class="modaltitle">
							                        	<?php the_title();  ?>
							                        </h3>
							                    </div>
							                     <p class="txtpoup">
		                                         <?php echo get_the_content();  // the_field('content'); ?>
							                    </p>
					                     	</div>
					                     </div>
					                </div>
					            </div>
								</a>
						        
						    </li>
				            <?php endwhile; ?>
				        <?php wp_reset_query(); ?>
                </ul>
                <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
            </div>
            <ul class="uk-slideset-nav uk-dotnav uk-flex-center"><li class="uk-active" data-uk-slideset-item="0"><a></a></li><li data-uk-slideset-item="1"><a></a></li><li data-uk-slideset-item="2"><a></a></li><li data-uk-slideset-item="3"><a></a></li><li data-uk-slideset-item="4"><a></a></li>
            </ul>
        </div>
        </div>
    </div>
	</div>
	<div class="container">
            <!-- <button class="uk-button" data-uk-modal="{target:'#modal'}">Open</button> -->
	</div>
	
	




	
	<div class="totop">
	<a href="#" data-uk-smooth-scroll><i class="uk-icon-toggle-up"></i></a>
	</div>
</div>

<?php get_footer(); ?>