<?php

/*

  Plugin Name: jobran Post-listing shortcode

  Plugin URI: streamerz.net

  Description: This plugin provides a shortcode to list posts, with parameters. It also registers a couple of post types and tacxonomies to work with.

  Version: 1.0

  Author: Rachel McCollin

  Author URI: http://rachelmccollin.co.uk

  License: GPLv2

 */

add_action('admin_menu','parent_page_models_produits' );

function parent_page_models_produits() { remove_meta_box('pageparentdiv', 'projet', 'normal');}



add_action('add_meta_boxes', 'parent_page_models_boxes_produits');

function parent_page_models_boxes_produits() {

add_meta_box('chapter-parent', 'Parent', 'chapter_attributes_models_meta_box_produits', 'projet', 'side', 'high');

}



function chapter_attributes_models_meta_box_produits($post) {

$post_type_object = get_post_type_object($post->post_type);

if ( $post_type_object->hierarchical ) {

    $pages = wp_dropdown_pages(array('post_type' => 'projet', 'selected' => $post->post_parent, 'name' => 'parent_id', 'show_option_none' => __('(no parent)'), 'sort_column'=> 'menu_order, post_title', 'echo' => 0));

    if ( ! empty($pages) ) {

    echo $pages;

    }

}

}



// create shortcode with parameters so that the user can define what's queried - default is to list all blog posts

add_shortcode('load_box_produits', 'rmcc_post_listing_parameters_shortcode');

function rmcc_post_listing_parameters_shortcode($atts) {

    ob_start();

    ($attr['parent_id'])? $parent_id = $attr['parent_id'] : $parent_id = 0;

    $post_parent = get_post($parent_id);



    // define query parameters based on attributes



    extract(shortcode_atts(array(

        'type' => 'post',

        'types' => 'posts',

        ), $atts));

    



    $options = array(

        'post_type' => $type,

        'posts_per_page' => -1,

        'post_parent' => $types,

    );



   // if(isset($_GET['token'])) echo '<pre>'.print_r($produits,true).'</pre>';



    $query = new WP_Query($options);

    // run the loop based on the query

    if ($query->have_posts()) {

        ?>

        <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-3" data-uk-grid="{gutter: 10}">

            <?php $i=0; while ($query->have_posts()) : $query->the_post(); ?>
            
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

                        <div class="uk-modal-dialog uk-modal-dialog-large">

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

                                <li><?php the_field('prix'); echo " euros";  ?></li>

                                <li><?php the_field('environ'); echo "m²"; ?></li>

                                <li><?php the_field('piece') ;  echo "piece"; ?></li>

                              </ul>
                              <?php echo get_the_content(); ?>

                              

                            </div>

                           </div>

                        </div>

                    </div>

              </div>

            <?php $i++ ; endwhile;

            wp_reset_postdata();

            ?>

        </ul>

        <?php

        $myvariable = ob_get_clean();

        return $myvariable;

    }

}

?>