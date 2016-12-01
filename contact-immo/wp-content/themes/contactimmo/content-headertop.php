    <header id="header" >
        <div class="bande_top">
    <!--carousel_news-->
    <div id="carousel_news" class="HiddenBlock actualite">
        <a href="#" class="close_trigger">Fermer</a>
            <div class="uk-slidenav-position uk-margin" data-uk-slider="">
                <div class="uk-slider-container">
                    <ul style="min-width: 3495px; min-height: 150.833px; transform: translateX(0px);" class="uk-slider uk-grid uk-grid-width-medium-1-2 ">
                    <?php $documents = new WP_Query(array(
                        'post_type' => 'actualite',
                        )) ;?>
                        <?php while ($documents->have_posts()) : $documents->the_post(); ?>
                        <li class="uk-slide-after" >
                            <?php // print_r($post);?>
                            <a href="#<?php echo  $postid = get_the_ID();  ?>" data-uk-modal>
                                <div class="uk-grid uk-flex-middle padin" data-uk-grid-margin="">
                                    <div class="uk-width-medium-2-5 ">
                                        <div class="imgactualite">
                                            <?php $image = get_field('image');
                                            if( !empty($image) ): ?>
                                                <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-3-5 uk-flex-middle">
                                    <h3 class="title"><?php the_title();  ?></h3>
                                    <?php  echo   custom_field_excerpt();  ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php  endwhile; ?>
                    </ul>
                    <?php $documents = new WP_Query(array(
                        'post_type' => 'actualite',
                        )) ;?>
                        <?php while ($documents->have_posts()) : $documents->the_post(); ?>
                        <div id="<?php echo  $postid = get_the_ID();  ?>" class="uk-modal">
                            <div class="uk-modal-dialog uk-modal-dialog-large posmodallrg">
                                 <div class="uk-grid uk-flex-middle padin" data-uk-grid-margin="">
                                    <div class="uk-width-medium-1-2 ">
                                        <div class="imgactualite">
                                            <?php $image = get_field('image');
                                            if( !empty($image) ): ?>
                                                <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-2 uk-flex-middle">
                                    <h3 class="popupstylt"><?php the_title();  ?></h3>
                                    <p class="popupstylc"><?php the_field('content',false,false); ?></p>

                                    </div>
                                </div>
                                <a href="" class="uk-modal-close close_popup"></a>
                            </div>
                        </div>
                       <?php  endwhile; ?>
                    </div>
                <a draggable="false" href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous colorblack" data-uk-slider-item="previous"></a>
                <a draggable="false" href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next colorblack" data-uk-slider-item="next"></a>
            </div>
        </div>
        <!--end carousel_news-->
        <!--carousel_videos-->
        <div id="carousel_videos" class="HiddenBlock">
        <a href="#" class="close_trigger">Fermer2</a>
            <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-slidenav-position uk-margin" data-uk-slider="{autoplay: true}">
                <div class="uk-slider-container">
                    <ul style="min-width: 3390px; min-height: 188.333px; transform: translateX(-2825px);" class="uk-slider uk-grid-width-medium-1-4">
                       <?php $documents = new WP_Query(array(
                        'post_type' => 'video',
                        )) ;?>
                        <?php while ($documents->have_posts()) : $documents->the_post(); ?>
                        <li class="uk-slide-after" >
                            <a href='<?php the_field("link"); ?>' data-uk-lightbox="{group:'group2'}" class="uk-icon-play-circle-o espacevid" >
                               <div class="imgvid">
                                    <?php $image = get_field('image');
                                    if( !empty($image) ): ?>
                                        <img  class="img-responsive " src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" 
                                    <?php endif; ?>>
                                </div>
                            </a>
                        </li>
                        <?php  endwhile; ?>
                    </ul>
                </div>
                <a draggable="false" href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                <a draggable="false" href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>

            </div>
            </div>
        </div>
        </div>
        <!--end carousel_videos-->
         <!--carousel_recette-->
        <div id="carousel_recette" class="HiddenBlock">
        <a href="#" class="close_trigger">Fermer</a>
            <p>
                jo
                kaka
                jo
                kaka
            </p>
        </div>
        <!--end carousel_recette-->
         <!--carousel_astuce-->
        <div id="carousel_astuce" class="HiddenBlock actualite">
        <a href="#" class="close_trigger">Fermer</a>
            <div class="uk-slidenav-position uk-margin" data-uk-slider="">
                <div class="uk-slider-container">
                    <ul style="min-width: 3495px; min-height: 150.833px; transform: translateX(0px);" class="uk-slider uk-grid uk-grid-width-medium-1-2 ">
                    <?php $documents = new WP_Query(array(
                        'post_type' => 'astucechef',
                        )) ;?>
                        <?php while ($documents->have_posts()) : $documents->the_post(); ?>
                        <li class="uk-slide-after" >
                            <?php // print_r($post);?>
                            <a href="#<?php echo  $postid = get_the_ID();  ?>" data-uk-modal>
                                <div class="uk-grid uk-flex-middle padin" data-uk-grid-margin="">
                                    <div class="uk-width-medium-2-5 ">
                                        <div class="imgactualite">
                                            <?php $image = get_field('image');
                                            if( !empty($image) ): ?>
                                                <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-3-5 uk-flex-middle">
                                    <h3 class="title"><?php the_title();  ?></h3>
                                    <?php  echo   custom_field_excerpt();  ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php  endwhile; ?>
                    </ul>
                    <?php $documents = new WP_Query(array(
                        'post_type' => 'astucechef',
                        )) ;?>
                        <?php while ($documents->have_posts()) : $documents->the_post(); ?>
                        <div id="<?php echo  $postid = get_the_ID();  ?>" class="uk-modal">
                            <div class="uk-modal-dialog uk-modal-dialog-large posmodallrg">
                                 <div class="uk-grid uk-flex-middle padin" data-uk-grid-margin="">
                                    <div class="uk-width-medium-1-2 ">
                                        <div class="imgactualite">
                                            <?php $image = get_field('image');
                                            if( !empty($image) ): ?>
                                                <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-2 uk-flex-middle">
                                    <h3 class="popupstylt"><?php the_title();  ?></h3>
                                    <p class="popupstylc"><?php the_field('content',false,false); ?></p>
                                    </div>
                                </div>
                                <a href="" class="uk-modal-close close_popup"></a>
                            </div>
                        </div>
                       <?php  endwhile; ?>
                    </div>
                <a draggable="false" href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous colorblack" data-uk-slider-item="previous"></a>
                <a draggable="false" href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next colorblack" data-uk-slider-item="next"></a>
            </div>
        </div>
        <!--end carousel_astuce-->
</div><!--bande top  -->
        <div id="bgred" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-6">
                        <div  id="box">
                            <ul class="list-inline">
                                <li><a class="texttop" href="" rel='trigger_news'>Actualités</a></li>
                                <li><a class="texttop"  href="" rel='trigger_videos'>Nos vidéos</a></li>
                                <li><a class="texttop" href="<?php  bloginfo('url');?>/recette" rel='trigger_recett'>Nos recettes</a></li>
                                <li><a class="texttop" href="" rel='trigger_astuce'>les astices du chef</a></li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div id="box">
                            <div class="search-form-container">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar container">
            <div class="logo2 pull-left"><a href="<?php bloginfo('url');?>"><img id="Logo" src="<?php bloginfo('template_url');  ?>/img/Logo.png" class="img-responsive" /></a></div>
            <nav class="navbar navbar-nav" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand navbar-left" href="<?php // bloginfo('url');?>"><img id="Logo" src="<?php // bloginfo('template_url');  ?>/img/Logo.png" class="image img-responsive" /></a> -->
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <!-- <ul id="menu" class="nav navbar-nav ">
                            <li data-menuanchor="firstPage"><a href="#firstPage">Accueil</a></li>
                            <li data-menuanchor="secondPage"><a href="#secondPage">Présentation <br> de l’entreprise</a></li>
                            <li data-menuanchor="3rdPage"><a href="#3rdPage">Qui Sommes-nous</a></li>
                            <li data-menuanchor="4thpage"><a href="#4thpage">Chart de Qualité</a></li>
                            <li data-menuanchor="5thpage"><a href="#5thpage">Historique</a></li>
                            <li><a href="<?php // bloginfo('url');?>/produit">Produits</a></li>
                            <li data-menuanchor="contact"><a href="#contact">Contact</a></li>
                        </ul> -->

                        <?php 
                        if ( is_front_page() ) {    
                        wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'menu_class' => 'nav navbar-nav navbar-right',
                                    'walker' => new Walker_Nav_Primary()
                                    )
                                );
                        }else{
                            wp_nav_menu(array(
                                    'theme_location' => 'secondary',
                                    'container' => false,
                                    'menu_class' => 'nav navbar-nav navbar-right',
                                    'walker' => new Walker_Nav_Primary()
                                    )
                                );
                        }
                                
                            ?>
                    </div><!-- /.navbar-collapse -->
            </nav>
            <div class="logo1 pull-right"><a href="<?php bloginfo('url');?>"><img  src="<?php  bloginfo('template_url');  ?>/img/logoo.png" class="  img-responsive" /></a></div>
        </div>
        <div class="bgtop"></div>
    </header>