

<section id="content" class="site-content">

	<div id="primary" role="main" class="container primary">

<div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3" data-uk-grid="{gutter: 20}">
<?php
	$the_query = new WP_Query($args);
        //global $post;
        //print_r($post) ; exit; 
        

        $i=0;
	if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post(); 
?>   


   <?php $image = get_field('bigimg'); $colors = get_field('check'); ?>     
	 
<div class="img<?php echo $i ; ?> jsgrid" <?php if( ($colors ) ){ ?> id="idjsgrid<?php echo $i ; ?>"  <?php }?>>

<div class="uk-thumbnail uk-overlay-hover" <?php if( !($colors ) ){ ?> data-uk-modal="{target:'#modal-<?php echo $i ; ?>'}" <?php }?> >

         <figure class="uk-overlay">

            <?php  if( !($colors ) ): ?>

                  <img width="100%" class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />

              <?php endif; ?>

                  <figcaption class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></figcaption>

                    <a class="uk-position-cover" href="#"></a>

                </figure>

                <a href="<?php  the_permalink();?>"  class="captionprojet" >

                  <h4 class="titleportfolio"><?php  the_title();?></h4>

                </a>

            </div>





  <div id="modal-<?php echo $i ; ?>" class="uk-modal popupstyle" aria-hidden="true" style="display: none; overflow-y: scroll;">

                        <div class="uk-modal-dialog uk-modal-dialog-large" style="background: #fff;" >

                            <a href="" class="uk-modal-close uk-close uk-close-alt"></a>

                            <div class="uk-grid">

                             <div class="uk-width-medium-1-2">

                               <div data-uk-slideshow data-uk-check-display class="slidehowpop">



                                   

                                        <?php if(have_rows('repeter')): ?>
                                            <?php $repeter=get_field('repeter');?>

                                            <ul class="uk-slideshow">

                                            <?php foreach ($repeter[0] as $image) {?>

                                             <li ><img src="<?php echo $image['url']; ?>" alt="" /></li>


                                            <?php  }?>

                                            </ul>

                                          <?php endif; ?>


                                          <?php if(have_rows('repeter')): ?>
                                            <?php $repeter=get_field('repeter');?>
                                            
                                            <ul class="uk-grid uk-grid-width-1-3 thamnail">

                                            <?php $p=0; foreach ($repeter[0] as $image) {?>

                                             <li><a data-uk-slideshow-item="<?php echo $p ;?>" class="" ><img src="<?php echo $image['url']; ?>"></a></li>
                                              
                                            <?php  $p++; }?>

                                             </ul>

                                          <?php endif; ?>

                                    <a  class="leftsl btnslid" href="" data-uk-slideshow-item="previous"><</a>

                                    <a class="rightsl btnslid" href="" data-uk-slideshow-item="next">></a>

                                </div>

                             </div>

                             <div class="uk-width-medium-1-2 poptextstyle">

                              <h2><?php the_title(); ?></h2>

                              <ul>

                                <li><?php the_field('appartement') ?></li>

                                <li><?php the_field('prix') ?></li>

                                <li><?php the_field('environ') ?></li>

                                <li><?php the_field('piece') ?></li>

                              </ul>
                              <?php echo get_the_content(); ?>

                              

                            </div>

                           </div>

                        </div>

                    </div>
            </div>

       











<?php $i++ ; endwhile; 
	wp_reset_postdata();
	endif;	
        
        
?> 
          
    </div>
</div>
