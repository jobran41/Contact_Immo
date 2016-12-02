(function($){



$(document).ready(function() {

	 /*$('.jsgrid').delegate('.linkhreff','click',function(){
            alert('jooooooo');
        });*/
    $('.linkhreff').mousedown(function(){
        var hach='alocontcrsv';
        var query = "nosb=";
        var firstPart = $(this).attr('href')+"?";
        //alert(firstPart+query+hach);
        location.href= firstPart + query + hach;  
    });


	$('ul#menu-primary li').find('a').removeAttr('data-toggle');

	$('.signin').click(function(es){
		$('.login-page').slideToggle();
		es.preventDefault();
	});

	$('#myCarousel .carousel-inner  .item:first-child').addClass("active");

	// $('#content .primary article.type-projet .uk-modal-dialog .slidehowpop ul.thamnail li:first-child').addClass("uk-active");

	$('a.uk-position-cover').click(function(e){

         e.preventDefault();

	    });

	$('a.captionportfolio').click(function(ev){

         ev.preventDefault();

	    });



	//$('.message a').click(function(){

		//e.preventDefault();

	   //$('form').animate({height: "toggle", opacity: "toggle"}, "slow");

	    

	//});



	$('.jsgrid').on({

	    'show.uk.modal': function(){

	    	//$( "#slidshowe ul.uk-slideshow li" ).trigger( "click" );

	        console.log("Modal is visible.");

	  //       $( "#slidshowe ul li").click(function() {

			// 	 console.log('hi jo');

			// });

			// var variableToCancelInterval = setInterval(function(){

			// 	$("#slidshowe ul li:last").click();

			// 	 console.log('hi jo');

			// }, 2000);



	    },

	    'hide.uk.modal': function(){

	        console.log("Element is not visible.");

	    }
            
            

	});
        
        $('#search-post').click(function(event){
            
            event.preventDefault();
	    var keyword = $('#keyword').val();
            //alert(keyword);
            $.ajax({
	          url: ajaxurl,
	          type: 'post',
	          data: {
	            action : "search_post",
	            keyword : keyword            
	          },
	          success: function (data) {
	          	$('#search-result').html(data);
                       // alert(keyword);
                       //console.log(data);
	          },
	          error: function (xhr, ajaxOptions, thrownError) {
	                console.log(xhr.status);
	                console.log(xhr.responseText);
	                console.log(thrownError);
	            },
	            beforeSend : function(){
	            	//alert('salut');
	            },
	            complete : function(){
	            	//alert('fin');
	            }
	        });
        });



var url      = window.location.href;   
        if(url == 'http://streamerzweb.com/contact-immo/#contact'){
	    $('html, body').animate({
	            scrollBottom: $("#contact").offset().bottom
	    }, 1200);
	}

	});

    

})(jQuery);