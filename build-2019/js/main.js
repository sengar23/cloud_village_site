$(document).ready(function () {

	add_talk_count();
	// smooth scroll
	$('.nav__item a').smoothScroll({
		speed: 900
	});

	$('.slider-wrap').slick({
		dots: true,
  		infinite: true
	});

	// PDF object

	//PDFObject.embed("./pdf/Exploiting_IAM.pdf", "#colinestep-pdf");
	//PDFObject.embed("./pdf/build_to_hack.pdf", "#chrisleroy-pdf");
	//PDFObject.embed("./pdf/Your_Blacklist_is_Dead.pdf", "#erickgalinkin-pdf");
	//PDFObject.embed("./pdf/pacbot.pdf", "#setuparimi-pdf");
	//PDFObject.embed("./pdf/sentinal.pdf", "#olafedoardo-pdf");
	//PDFObject.embed("./pdf/Microsoft_Cloud_Azure.pdf", "#seanmetcalf-pdf");
	//PDFObject.embed("./pdf/Here_for_a_Good_Time.pdf", "#jenkohwong-pdf");
	//PDFObject.embed("./pdf/Mining_Malevolence.pdf", "#cherylbiswas-pdf");
	//PDFObject.embed("./pdf/MozDef.pdf", "#andrewnathan-pdf");
	//PDFObject.embed("./pdf/Phishing_in_the_Cloud_Era.pdf", "#ashwinabhinav-pdf");
	//PDFObject.embed("./pdf/Pragmatic_Cloud.pdf", "#richmogull-pdf");
	//PDFObject.embed("./pdf/Security_Battle.pdf", "#janemiceli-pdf");
	//PDFObject.embed("./pdf/Splunk.pdf", "#rodjose-pdf");
	//PDFObject.embed("./pdf/Scaling_Security.pdf", "#jamesstrassburg-pdf");
	//PDFObject.embed("./pdf/Battle_in_the_Clouds.pdf", "#danimohsan-pdf");



	// animate text inside slide
	// initialize text to animate
	$('.item__text').textillate({
		in: {
			effect: 'flipInX',
			delay: 5
		},
		loop: false
	});

	$(".panel-btn").click(function(){
		var el = $(this);
		var id = $(el).siblings().attr("id");
		talklink_change(id);
	});

	$(".schedule-item").click(function () {
		var el = $(this);
		var article_id = el.data("id");
		if(article_id){
			article_id = "#" + article_id;
    		var article_parent = $(article_id).parent().parent().parent();
    		var article_opened = $("#talks .panel-collapse.collapse.in");
    		if(article_opened.length > 0){
    			article_opened.collapse("toggle");
    		}
    		var article_parent_id = article_parent.attr("id");
    		$('.nav.nav-tabs a[href="#'+article_parent_id+'"]').tab('show');
    		setTimeout(function(){
    			var t = $(article_id).siblings(".panel-btn").offset().top;
    			$.smoothScroll({
				    
				    scrollTarget: $(article_id).siblings(".panel-btn"),
				    offset: -100
				});
    			$(article_id).collapse("toggle");
    		},300);
    		
		}
    	
	});

	
	var page_url = get_url_hash();
	if(page_url != "" && page_url != "index"){
	    page_section_link(page_url, 0);
	}
    
	setTimeout(function () {
		$(".loading-wrap").removeClass("visible");
		setTimeout(function () {
			$('.item__text').show();
			$('.item__text').textillate('start');
			
			
		}, 300);
	}, 2000);
	

	
	var galleryContainer = $(".gallery__items"),
		isotopFilterButtons = $(".works__nav__item");

	isotopFilterButtons.on('click', function () {
		var filterValue = $(this).attr('data-filter');

		galleryContainer.isotope({
			filter: filterValue
		});

		for (var i = 0; i < isotopFilterButtons.length; i++) {
			$(isotopFilterButtons[i]).removeClass('works__nav__item_active');
		}

		$(this).addClass('works__nav__item_active');
	});
	
});

function add_talk_count() {
	var tabs = $("#talks .tab-pane");
	tabs.each(function (index, target) {
		var count = $(target).find(".panel-default").length;
		var id = $(target).attr("id");
		$("#talks .nav-tabs a[href$='" + "#" + id + "'] span").text(count);
	});



}

/* Get page url parameter*/

function get_url_parameter(){
    
    var newPageArray = location.pathname.split('/'),
    
    newPage = newPageArray[newPageArray.length - 1];
    
    return newPage;
}
function get_url_hash(){
    var page_array = location.href.split('#');
    var page="";
    if(page_array.length > 1){
    	page = page_array[page_array.length - 1];
    }
    
    
    return page;

}
function hashlink_change(url){
    url = "#"+url;
    if (url != window.location) {
            //add the new page to the window.history
            //if the new page was triggered by a 'popstate' event, don't add it
            window.history.pushState({
                path: url
            }, "", url);
        }

}
function talklink_change(talk_id){
    var url = "#talks?"+talk_id;
    
    //add the new page to the window.history
    //if the new page was triggered by a 'popstate' event, don't add it
    window.history.pushState({
        path: url
    }, "", url);
        

}

/* Browser Back Button*/

$(window).bind('popstate', function(event){
    var popped = ('state' in window.history && window.history.state !== null), initialURL = location.href;
    // Ignore inital popstate that some browsers fire on page load
    var initialPop = !popped && location.href == initialURL;
    popped = true;
    if (initialPop) return;
    console.log('Popstate');
    // By the time popstate has fired, location.pathname has been changed
    //location.reload();
    //var page_url = get_url_hash();
    //page_section_link(page_url, 200);
});



function page_section_link(page, delay){
    console.log(page);
    var link = "";
    var title = "";
    var section = "";
    var a = page.split("?");
    var page_url = a[0];
    $.smoothScroll({
    	scrollTarget: '#'+page_url
  	});
    if(page_url == "talks"){
        if(a[1]){

        	var article_id = a[1];
			if(article_id){
				article_id = "#" + article_id;
	    		var article_parent = $(article_id).parent().parent().parent();
	    		var article_opened = $("#talks .panel-collapse.collapse.in");
	    		if(article_opened.length > 0){
	    			article_opened.collapse("toggle");
	    		}
	    		var article_parent_id = article_parent.attr("id");
	    		$('.nav.nav-tabs a[href="#'+article_parent_id+'"]').tab('show');
	    		setTimeout(function(){
	    			var t = $(article_id).siblings(".panel-btn").offset().top;
	    			$.smoothScroll({
					    
					    scrollTarget: $(article_id).siblings(".panel-btn"),
					    offset: -100
					});
	    			$(article_id).collapse("toggle");
	    		},300);
	    		
			}
            
        }
        
    }
    
    
}