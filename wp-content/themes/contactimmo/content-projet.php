                    

<?php

$mot=$_GET['nosb']; 

if( $mot=='alocontcrsv'){ ?> 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="uk-grid uk-margin-top" >
    <div class="uk-width-medium-1-2">
      <div data-uk-slideshow  class="slidehowpop">
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

       <li><?php the_field('prix'); echo " euros";  ?></li>

       <li><?php the_field('environ'); echo "m²"; ?></li>

       <li><?php the_field('piece') ;  echo "piece"; ?></li>

     </ul>
     <?php echo get_the_content(); ?>
     <a  class="uk-float-left "  href="<?php the_field('plan') ;?>" data-uk-lightbox title="">Notre Plan</a>



   </div>

  </div> 
 </article>              
<?php }else { ?>

    

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php // the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>

		<h3><?php the_field('title') ;?></h3>

		<div class="clear"></div>

	    <?php echo  get_field('desc') ;?> 

	</header>

	<div class="row">

            <div class="col-xs-12">

                    <?php the_content(); ?>

            </div>

	</div>

</article>

    

<?php }

?>



                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              