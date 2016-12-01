<section id="accueil">
            <div id="myslide" class="carousel slide " data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myslide" data-slide-to="0" class="active"></li>
                <li data-target="#myslide" data-slide-to="1"></li>
              </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxrelative">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/slider100.png"  alt="Pic 1">
                                <div class="textslider text-center">
                                    <!-- <h3 class="">Bienvenue chez nous!</h3>
                                    <p class="">Laissez-nous le plaisir de vous proposer <br> nos meilleures offres</p> -->
                                    <?php $the_query = new WP_Query( 'page_id=57' );?>
                                    <!-- la boucle -->
                                    <?php while ( $the_query->have_posts() ) : ?>
                                    <?php $the_query->the_post(); 
                                    // print_r($post);
                                    echo '<h3>' . get_the_title() . '</h3>';
                                    echo '<p>' . get_the_content() . '</p>';?>             
                                    <?php endwhile;?>
                                    <?php wp_reset_postdata(); ?>
                                    <a href="" class="sliderbtn ">VOIR PLUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxrelative">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/slider100.png" width="1500" height="964" alt="Pic 1">
                                <div class="textslider text-center">
                                    <!-- <h3 class="">Bienvenue chez nous!</h3>
                                    <p class="">Laissez-nous le plaisir de vous proposer <br> nos meilleures offres</p> -->
                                    <?php $the_query = new WP_Query( 'page_id=57' );?>
                                    <!-- la boucle -->
                                    <?php while ( $the_query->have_posts() ) : ?>
                                    <?php $the_query->the_post(); 
                                    // print_r($post);
                                    echo '<h3>' . get_the_title() . '</h3>';
                                    echo '<p>' . get_the_content() . '</p>';?>             
                                    <?php endwhile;?>
                                    <?php wp_reset_postdata(); ?>
                                    <a href="" class="sliderbtn">VOIR PLUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Carousel -->
        </section>