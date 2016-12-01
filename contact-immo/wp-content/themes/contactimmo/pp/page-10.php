<?php get_header(); ?>
<div class="sectionrecette" id="bgrecette">
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery-1.12.2.min.js"></script>
<?php // get_template_part('content', 'headertop'); ?>
<script type="text/javascript">
$(document).ready(function(){
	
	//how much items per page to show
	var show_per_page = 4; 
	//getting the amount of elements inside content div
	var number_of_items = $('#content').children().size();
	//calculate the number of pages we are going to have
	var number_of_pages = Math.ceil(number_of_items/show_per_page);
	
	//set the value of our hidden input fields
	$('#current_page').val(0);
	$('#show_per_page').val(show_per_page);
	
	//now when we got all we need for the navigation let's make it '
	
	/* 
	what are we going to have in the navigation?
		- link to previous page
		- links to specific pages
		- link to next page
	*/

	var navigation_html = '<a class="previous_link stylinkre" href="javascript:previous();"><i class="uk-icon-arrow-circle-o-left"></i> Avant</a>';
	var current_link = 0;
	while(number_of_pages > current_link){
		navigation_html += '<a class="page_link stylinkre pg' + current_link +'" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';
		current_link++;
	}
	navigation_html += '<a class="next_link stylinkre" href="javascript:next();">Suivant <i class="uk-icon-arrow-circle-o-right"></i></a>';
	
	$('#page_navigation').html(navigation_html);
	
	//add active_page class to the first page link
	$('#page_navigation .page_link:first').addClass('active_page');
	
	//hide all the elements inside content div
	$('#content').children().css('display', 'none');
	
	//and show the first n (show_per_page) elements
	$('#content').children().slice(0, show_per_page).css('display', 'block');
	
});

function previous(){
	
	new_page = parseInt($('#current_page').val()) - 1;
	//if there is an item before the current active link run the function
	if($('.active_page').prev('.page_link').length==true){
		go_to_page(new_page);
	}
	
}

function next(){
	new_page = parseInt($('#current_page').val()) + 1;
	//if there is an item after the current active link run the function
	if($('.active_page').next('.page_link').length==true){
		go_to_page(new_page);
	}
	
}
function go_to_page(page_num){
	//get the number of items shown per page
	var show_per_page = parseInt($('#show_per_page').val());
	
	//get the element number where to start the slice from
	start_from = page_num * show_per_page;
	
	//get the element number where to end the slice
	end_on = start_from + show_per_page;
	
	//hide all children elements of content div, get specific items and show them
	$('#content').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
	
	/*get the page link that has longdesc attribute of the current page and add active_page class to it
	and remove that class from previously active page link*/
	$('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');
	
	//update the current page input field
	$('#current_page').val(page_num);
}
  
</script>
<style>
#page_navigation a{
	padding:3px;
	border:1px solid gray;
	margin:2px;
	color:black;
	text-decoration:none
}
.active_page{
	background:darkblue;
	color:white !important;
}
</style>
</head>
<body>
	
	<!-- the input fields that will hold the variables we will use -->
	<input type='hidden' id='current_page' />
	<input type='hidden' id='show_per_page' />
	
	<!-- Content div. The child elements will be used for paginating(they don't have to be all the same,
		you can use divs, paragraphs, spans, or whatever you like mixed together). '-->

		<div class="container jo">
	    
            <!-- An empty div which will be populated using jQuery -->
	

	<ul class="uk-grid  uk-grid-width-medium-1-3 " id="content" style="transition: transform 150ms linear 0s;" data-uk-grid-margin="" data-uk-grid-parallax="">
	    
	    	<?php $documents = new WP_Query(array(
				'post_type' => 'post',
				)) ;?>
				<?php while ($documents->have_posts()) : $documents->the_post(); ?>
					<li>
		        		<div class="uk-overlay uk-overlay-hover">
	                        <div class="cadre">
			        		    <div class="fontbl">
					        	    <div class="uk-grid uk-grid-collapse" data-uk-grid-margin="">
				                        <div class="uk-width-medium-1-10 uk-row-first">
				                              <i class="uk-icon-user uk-icon-medium"></i>
				                        </div>
				                        <div class="uk-width-medium-4-10">
				                        	<p class="textfontbtl"> <?php the_field('personne'); ?></p>
				                        </div>
				                        <div class="uk-width-medium-1-10"></div>
				                        <div class="uk-width-medium-1-10">
				                        	<img  src="<?php  bloginfo('template_url');  ?>/img/recette/time.png">
				                        </div>
				                        <div class="uk-width-medium-3-10">
				                        	<p class="textfontbtl"><?php the_field('time'); ?></p>
				                        </div>
				                    </div>
			                    </div>
		                        <!-- <img src="<?php // bloginfo('template_url');  ?>/img/recette/recette6.png" alt=""> -->
		                        <div class="imgart">
									<?php $image = get_field('image');
								    if( !empty($image) ): ?>
								        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
								    <?php endif; ?>
								</div>
		                        <div class="uk-overlay-panel uk-overlay-plus-circle uk-icon-plus-circle uk-overlay-background uk-overlay-slide-left"></div>
		                        <a class="uk-position-cover" href="<?php the_permalink(); ?>"></a>
		                        <div class="imgform">
			                    	 <?php $image = get_field('smallimage');
								    if( !empty($image) ): ?>
								        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
								    <?php endif; ?>
			                    </div>
		                    </div>
	                    </div>
	                    <p class="titlerecette"><?php the_title(); ?></p>
		        	</li>
				<?php  endwhile; ?>

	    
	</ul>
	<div id='page_navigation'></div>
</div>
	    	
	

	

            
	        	    
	                    
	        		
	        		
	</div>
</div>
<?php get_template_part('content', 'headertop'); ?>
<?php get_footer(); ?>