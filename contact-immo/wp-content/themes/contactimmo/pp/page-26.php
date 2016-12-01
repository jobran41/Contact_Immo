<?php get_header(); ?>
 <header id="header" >
    	<div class="bande_top">
	<!--carousel_news-->
	<div id="carousel_news" class="HiddenBlock">
		<a href="#" class="close_trigger">Fermer</a>
            <p>
                loremmmmmmmmmmm
                lorem
                lore
                lorem
                lorem
            </p>
        </div>
        <!--end carousel_news-->
        <!--carousel_videos-->
	    <div id="carousel_videos" class="HiddenBlock">
		<a href="#" class="close_trigger">Fermer2</a>
            <p>
            	video
                loremmmmmmmmmmm
                lorem
                lore
                lorem
                lorem
            </p>
        </div>
        <!--end carousel_videos-->
         <!--carousel_recette-->
	    <div id="carousel_recette" class="HiddenBlock">
		<a href="#" class="close_trigger">Fermer</a>
            <p>
            	recette
                loremmmmmmmmmmm
                lorem
                lore
                lorem
                lorem
            </p>
        </div>
        <!--end carousel_recette-->
         <!--carousel_astuce-->
	    <div id="carousel_astuce" class="HiddenBlock">
		<a href="#" class="close_trigger">Fermer</a>
            <p>
            	astuce
                loremmmmmmmmmmm
                lorem
                lore
                lorem
                lorem
            </p>
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
								<li><a class="texttop" href="" rel='trigger_recette'>Nos recettes</a></li>
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
						<ul id="menu" class="nav navbar-nav ">
							<li data-menuanchor="firstPage"><a href="#firstPage">Accueil</a></li>
							<li data-menuanchor="secondPage"><a href="#secondPage">Présentation <br> de l’entreprise</a></li>
							<li data-menuanchor="3rdPage"><a href="#3rdPage">Qui Sommes-nous</a></li>
							<li data-menuanchor="4thpage"><a href="#4thpage">Chart de Qualité</a></li>
							<li data-menuanchor="5thpage"><a href="#5thpage">Historique</a></li>
							<li><a href="#">Produits</a></li>
							<li data-menuanchor="contact"><a href="#contact">Contact</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
			</nav>
			<div class="logo1 pull-right"><a href="<?php bloginfo('url');?>"><img  src="<?php  bloginfo('template_url');  ?>/img/logoo.png" class="  img-responsive" /></a></div>
		</div>
		<div class="bgtop"></div>
    </header>
<div class="bgproduit">

	<div class="container-fluid ">
	<div class="elemprod" style=" margin-left:-15px;margin-right:-15px;" >
		<div class="uk-grid uk-grid-collapse">

		    <div class="uk-width-8-10 bgcatalogue" style="">
		    	<div class="down"><a href="#my-tab-content" class="uk-button" data-uk-smooth-scroll="{offset: 155}">down</a></div>
			    <div class="uk-grid uk-grid-collapse "> 	
				    <ul  class=" uk-width-1-3 bgmargarine  bgprodimg nav nav-tabs unstyled" >
						<li >
							<div class="uk-margin-top">
								<a href="#grass" data-toggle="tab" >
								<img width="60%"height="40%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/grass.png" alt="" >
								<div class="bggrasstxt bgalltxtarticle">
							    	<h2 class="" id="txtprod">Matiéres  grass <br> Composé</h2>
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
								    </div>
							   </a>
							</div>
						</li>
					</ul>
				</div>
		    </div>
		    <div class="uk-width-2-10" >
	            <ul  class="nav  nav-tabs unstyled bghuil " >
			         <li>
				        <div class="uk-margin-top">
						    	<a href="#huil" data-toggle="tab">
						    	<img width="220px"height="300px" class="img-responsive center-block" src="<?php   bloginfo('template_url')?>/img/produit/huil.png" alt="" >
			                     <h2 id="txtprod">HUILE</h2>
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
            <h1>mayonaise</h1>
            <p>red mayonaise</p>
        </div>
        <div class="tab-pane " id="moutard">
            <h1>moutard</h1>
            <p>moutard red</p>
        </div>
        <div class="tab-pane " id="graise">
            <h1>graise</h1>
            <p>red graise</p>
        </div>	
        <div class="tab-pane" id="margarinepro">
            <h1>margarine pro</h1>
            <p>red margarine</p>
        </div>
        <div class="tab-pane" id="margarine">
            <h1>margarine</h1>
            <p>orange </p>
        </div>
        <div class="tab-pane" id="yellow">
            <h1>yellow</h1>
            <p>yellow yellow yellow yellow yellow</p>
        </div>
        <div class="tab-pane active" id="huil">
            <h1 class="titleslidprod">huilE</h1>
            <div class="uk-margin" data-uk-slideset="{medium: 4, animation: 'slide-bottom'}">
            <ul class="uk-subnav stylenav uk-subnav-pill">
                <!-- <li  data-uk-filter=""><a href="#">All</a></li> -->
                <li data-uk-filter="test-a" class=" uk-active activ activemenu center-block" ><a href="#">MAIS</a></li>
                <li data-uk-filter="test-b " class="center-block activemenu"><a href="#">TOURNSOL</a></li>
                <li data-uk-filter="test-c" class="center-block activemenu"><a href="#">SOJA</a></li>
                <li data-uk-filter="test-d" class="center-block activemenu"><a href="#">Végétale</a></li>
            </ul>
            <div class="uk-slidenav-position uk-margin">
                <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4">
                    <li class="uk-active" style="" data-uk-filter="test-a"><img data-holder-rendered="true" class="img-responsive center-block"  src="<?php bloginfo('template_url')?>/img/produit/boit1.png" alt="" height="200" width="100"></li>
                    <li class="uk-active" style="" data-uk-filter="test-a"><img data-holder-rendered="true" class="img-responsive center-block"  src="<?php bloginfo('template_url')?>/img/produit/boit2.png" alt="" height="200" width="100"></li>
                    <li class="uk-active" style="" data-uk-filter="test-a"><img data-holder-rendered="true" class="img-responsive center-block"  src="<?php bloginfo('template_url')?>/img/produit/boit3.png" alt="" height="200" width="100"></li>
                    <li class="uk-active" style="" data-uk-filter="test-a"><img data-holder-rendered="true" class="img-responsive center-block" src="<?php bloginfo('template_url')?>/img/produit/boit4.png" alt="" height="200" width="100"></li>
                    <li class="uk-active" style="" data-uk-filter="test-a"><img data-holder-rendered="true" class="img-responsive center-block"  src="<?php bloginfo('template_url')?>/img/produit/boit5.png" alt="" height="200" width="100"></li>
                    
                    <li class="uk-active" style="" data-uk-filter="test-a"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 4" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gNApDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi41ODMzMzMwMTU0NDE5IiB5PSIyMzYuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij5JdGVtPC90ZXh0Pjx0ZXh0IHg9IjMyOS44MzMzMzMwMTU0NDE5IiB5PSIyMzYuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij40PC90ZXh0PjwvZz48L3N2Zz4=" alt="Group 1 \n Item 4 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-a"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 5" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gNQpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjU8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 5 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-a"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 6" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gNgpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjY8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 6 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-a"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 7" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gNwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjc8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 7 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-a"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 8" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gOApDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjg8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 8 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-a"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 9" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gOQpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjk8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 9 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-a"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 10" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gMTAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjUuMi4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzLz48cmVjdCB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgZmlsbD0iIzBEOEZEQiIvPjxnPjx0ZXh0IHg9IjIxNy44ODMzMzUxMTM1MjU0IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij5Hcm91cDwvdGV4dD48dGV4dCB4PSIzNDguODY2NjY0ODg2NDc0NiIgeT0iMTkwLjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+MTwvdGV4dD48dGV4dCB4PSIyMjUuNjI1IiB5PSIyMzYuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij5JdGVtPC90ZXh0Pjx0ZXh0IHg9IjMxOC44NzUiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjEwPC90ZXh0PjwvZz48L3N2Zz4=" alt="Group 1 \n Item 10 [600x400]" height="400" width="600"></li>

                    <li style="display: none;" data-uk-filter="test-b"><img data-holder-rendered="true" data-src="holder.js/600x400/vine/auto/text:Group 2 \n Item 1" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvdmluZS9hdXRvL3RleHQ6R3JvdXAgMiBcbiBJdGVtIDEKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjUuMi4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzLz48cmVjdCB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9IjIxNy44ODMzMzUxMTM1MjU0IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij5Hcm91cDwvdGV4dD48dGV4dCB4PSIzNDguODY2NjY0ODg2NDc0NiIgeT0iMTkwLjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+MjwvdGV4dD48dGV4dCB4PSIyMzYuNzUiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkl0ZW08L3RleHQ+PHRleHQgeD0iMzMwIiB5PSIyMzYuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0PjwvZz48L3N2Zz4=" alt="Group 2 \n Item 1 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-b"><img data-holder-rendered="true" data-src="holder.js/600x400/vine/auto/text:Group 2 \n Item 2" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvdmluZS9hdXRvL3RleHQ6R3JvdXAgMiBcbiBJdGVtIDIKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjUuMi4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzLz48cmVjdCB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9IjIxNy44ODMzMzUxMTM1MjU0IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij5Hcm91cDwvdGV4dD48dGV4dCB4PSIzNDguODY2NjY0ODg2NDc0NiIgeT0iMTkwLjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+MjwvdGV4dD48dGV4dCB4PSIyMzYuNzUiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkl0ZW08L3RleHQ+PHRleHQgeD0iMzMwIiB5PSIyMzYuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4yPC90ZXh0PjwvZz48L3N2Zz4=" alt="Group 2 \n Item 2 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-b"><img data-holder-rendered="true" data-src="holder.js/600x400/vine/auto/text:Group 2 \n Item 3" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvdmluZS9hdXRvL3RleHQ6R3JvdXAgMiBcbiBJdGVtIDMKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjUuMi4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzLz48cmVjdCB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9IjIxNy44ODMzMzUxMTM1MjU0IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij5Hcm91cDwvdGV4dD48dGV4dCB4PSIzNDguODY2NjY0ODg2NDc0NiIgeT0iMTkwLjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+MjwvdGV4dD48dGV4dCB4PSIyMzYuNzUiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkl0ZW08L3RleHQ+PHRleHQgeD0iMzMwIiB5PSIyMzYuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4zPC90ZXh0PjwvZz48L3N2Zz4=" alt="Group 2 \n Item 3 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-b"><img data-holder-rendered="true" data-src="holder.js/600x400/vine/auto/text:Group 2 \n Item 4" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvdmluZS9hdXRvL3RleHQ6R3JvdXAgMiBcbiBJdGVtIDQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjUuMi4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzLz48cmVjdCB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9IjIxNy44ODMzMzUxMTM1MjU0IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij5Hcm91cDwvdGV4dD48dGV4dCB4PSIzNDguODY2NjY0ODg2NDc0NiIgeT0iMTkwLjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+MjwvdGV4dD48dGV4dCB4PSIyMzYuNTgzMzMzMDE1NDQxOSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMjkuODMzMzMzMDE1NDQxOSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+NDwvdGV4dD48L2c+PC9zdmc+" alt="Group 2 \n Item 4 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-b"><img data-holder-rendered="true" data-src="holder.js/600x400/vine/auto/text:Group 2 \n Item 5" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvdmluZS9hdXRvL3RleHQ6R3JvdXAgMiBcbiBJdGVtIDUKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjUuMi4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzLz48cmVjdCB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9IjIxNy44ODMzMzUxMTM1MjU0IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij5Hcm91cDwvdGV4dD48dGV4dCB4PSIzNDguODY2NjY0ODg2NDc0NiIgeT0iMTkwLjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+MjwvdGV4dD48dGV4dCB4PSIyMzYuNzUiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkl0ZW08L3RleHQ+PHRleHQgeD0iMzMwIiB5PSIyMzYuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij41PC90ZXh0PjwvZz48L3N2Zz4=" alt="Group 2 \n Item 5 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-b"><img data-holder-rendered="true" data-src="holder.js/600x400/vine/auto/text:Group 2 \n Item 6" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvdmluZS9hdXRvL3RleHQ6R3JvdXAgMiBcbiBJdGVtIDYKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjUuMi4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzLz48cmVjdCB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9IjIxNy44ODMzMzUxMTM1MjU0IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij5Hcm91cDwvdGV4dD48dGV4dCB4PSIzNDguODY2NjY0ODg2NDc0NiIgeT0iMTkwLjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+MjwvdGV4dD48dGV4dCB4PSIyMzYuNzUiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkl0ZW08L3RleHQ+PHRleHQgeD0iMzMwIiB5PSIyMzYuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij42PC90ZXh0PjwvZz48L3N2Zz4=" alt="Group 2 \n Item 6 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-b"><img data-holder-rendered="true" data-src="holder.js/600x400/vine/auto/text:Group 2 \n Item 7" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvdmluZS9hdXRvL3RleHQ6R3JvdXAgMiBcbiBJdGVtIDcKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjUuMi4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzLz48cmVjdCB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9IjIxNy44ODMzMzUxMTM1MjU0IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij5Hcm91cDwvdGV4dD48dGV4dCB4PSIzNDguODY2NjY0ODg2NDc0NiIgeT0iMTkwLjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+MjwvdGV4dD48dGV4dCB4PSIyMzYuNzUiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkl0ZW08L3RleHQ+PHRleHQgeD0iMzMwIiB5PSIyMzYuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij43PC90ZXh0PjwvZz48L3N2Zz4=" alt="Group 2 \n Item 7 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-b"><img data-holder-rendered="true" data-src="holder.js/600x400/vine/auto/text:Group 2 \n Item 8" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvdmluZS9hdXRvL3RleHQ6R3JvdXAgMiBcbiBJdGVtIDgKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjUuMi4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzLz48cmVjdCB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9IjIxNy44ODMzMzUxMTM1MjU0IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij5Hcm91cDwvdGV4dD48dGV4dCB4PSIzNDguODY2NjY0ODg2NDc0NiIgeT0iMTkwLjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+MjwvdGV4dD48dGV4dCB4PSIyMzYuNzUiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkl0ZW08L3RleHQ+PHRleHQgeD0iMzMwIiB5PSIyMzYuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij44PC90ZXh0PjwvZz48L3N2Zz4=" alt="Group 2 \n Item 8 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-b"><img data-holder-rendered="true" data-src="holder.js/600x400/vine/auto/text:Group 2 \n Item 9" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvdmluZS9hdXRvL3RleHQ6R3JvdXAgMiBcbiBJdGVtIDkKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjUuMi4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzLz48cmVjdCB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9IjIxNy44ODMzMzUxMTM1MjU0IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij5Hcm91cDwvdGV4dD48dGV4dCB4PSIzNDguODY2NjY0ODg2NDc0NiIgeT0iMTkwLjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+MjwvdGV4dD48dGV4dCB4PSIyMzYuNzUiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkl0ZW08L3RleHQ+PHRleHQgeD0iMzMwIiB5PSIyMzYuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij45PC90ZXh0PjwvZz48L3N2Zz4=" alt="Group 2 \n Item 9 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-b"><img data-holder-rendered="true" data-src="holder.js/600x400/vine/auto/text:Group 2 \n Item 10" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvdmluZS9hdXRvL3RleHQ6R3JvdXAgMiBcbiBJdGVtIDEwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi41LjIuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcy8+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiMzOURCQUMiLz48Zz48dGV4dCB4PSIyMTcuODgzMzM1MTEzNTI1NCIgeT0iMTkwLjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+R3JvdXA8L3RleHQ+PHRleHQgeD0iMzQ4Ljg2NjY2NDg4NjQ3NDYiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjI8L3RleHQ+PHRleHQgeD0iMjI1LjYyNSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiMxRTI5MkM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMTguODc1IiB5PSIyMzYuOCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xMDwvdGV4dD48L2c+PC9zdmc+" alt="Group 2 \n Item 10 [600x400]" height="400" width="600"></li>
                    
                    <li style="display: none;" data-uk-filter="test-c"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 6" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gNgpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjY8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 6 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-c"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 7" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gNwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjc8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 7 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-c"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 8" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gOApDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjg8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 8 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-c"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 9" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gOQpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjk8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 9 [600x400]" height="400" width="600"></li>

                    <li style="display: none;" data-uk-filter="test-d"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 6" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gNgpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjY8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 6 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-d"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 7" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gNwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjc8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 7 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-d"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 8" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gOApDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjg8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 8 [600x400]" height="400" width="600"></li>
                    <li style="display: none;" data-uk-filter="test-d"><img data-holder-rendered="true" data-src="holder.js/600x400/sky/auto/text:Group 1 \n Item 9" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDpHcm91cCAxIFxuIEl0ZW0gOQpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjE3Ljg4MzMzNTExMzUyNTQiIHk9IjE5MC44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPkdyb3VwPC90ZXh0Pjx0ZXh0IHg9IjM0OC44NjY2NjQ4ODY0NzQ2IiB5PSIxOTAuOCIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozMHB0Ij4xPC90ZXh0Pjx0ZXh0IHg9IjIzNi43NSIgeT0iMjM2LjgiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MzBwdCI+SXRlbTwvdGV4dD48dGV4dCB4PSIzMzAiIHk9IjIzNi44IiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjMwcHQiPjk8L3RleHQ+PC9nPjwvc3ZnPg==" alt="Group 1 \n Item 9 [600x400]" height="400" width="600"></li>

                </ul>
                <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
            </div>
            <ul class="uk-slideset-nav uk-dotnav uk-flex-center"><li class="uk-active" data-uk-slideset-item="0"><a></a></li><li data-uk-slideset-item="1"><a></a></li><li data-uk-slideset-item="2"><a></a></li><li data-uk-slideset-item="3"><a></a></li><li data-uk-slideset-item="4"><a></a></li></ul>
        </div>
        </div>
        <div class="tab-pane" id="grass">
            <h1>grass</h1>
            <p>green grass</p>
        </div>
    </div>
	</div>
	<div class="container">
		
		<!-- <a class="uk-button" href="#modal-blank" data-uk-modal="">Blank (Fullscreen)</a>
		<div style="display: none; overflow-y: auto;" aria-hidden="false" id="modal-blank" class="uk-modal uk-open">
                <div class="uk-modal-dialog uk-modal-dialog-blank">
                    <button class="uk-modal-close uk-close" type="button"></button>
                    <div class="uk-grid uk-flex-middle" data-uk-grid-margin="">
                        <div class="uk-width-medium-1-2 uk-height-viewport uk-cover-background uk-row-first" style="background-image: url('http://unsplash.it/600/600');"></div>
                        <div class="uk-width-medium-1-2">
                            <h1>Modal Blank</h1>
                        </div>
                    </div>
                </div>
            </div> -->
            <button class="uk-button" data-uk-modal="{target:'#modal'}">Open</button>
            <div style="display: none; overflow-y: auto;" aria-hidden="false" id="modal" class="uk-modal uk-open">
                <div class="uk-modal-dialog">
                    <button type="button" class="uk-modal-close uk-close"></button>
                    <div class="uk-modal-header">
                        <h2>Headline</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="uk-modal-footer uk-text-right">
                        <button type="button" class="uk-button">Cancel</button>
                        <button type="button" class="uk-button uk-button-primary">Save</button>
                    </div>
                    <div class="uk-modal-caption">Caption</div>
                </div>
            </div>
	</div>
	
	<div class="totop"><a href="#" data-uk-smooth-scroll>top</a></div>
</div>

<?php get_footer(); ?>