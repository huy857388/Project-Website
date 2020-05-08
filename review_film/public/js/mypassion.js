/*
 * Copyright (c) 24/04/2013 MyPassion
 * Author: MyPassion 
 * This file is made for NEWS
*/

	

// ----------------------------------------------------  CONTACT FORM
function submitForm(){
	"use strict";
	var msg;
	$.post('plugin/sendmail.html',$('#contactForm').serialize(), function(msg) {
		$(".alertMessage").html(msg);
	});
	// Hide previous response text
	$(msg).remove();
	// Show response message
	contactform.prepend(msg);
}
jQuery(function(){
	// -----------------------------------------------------  FLEXSLIDER
	jQuery('.flexslider').flexslider({
		animation: 'fade',
		controlNav: false,
		slideshowSpeed: 4000,
		animationDuration: 300
	});	
	
})

jQuery(function() {

	jQuery('#carousel').carouFredSel({
		width: '100%',
		direction   : "bottom",
		scroll : 400,
		items: {
			visible: '+3'
		},
		auto: {
			items: 1,
			timeoutDuration : 4000
		},
		prev: {
			button: '#prev1',
			items: 1
		},    
		next: {
			button: '#next1',
			items: 1
		}
	});
	
	jQuery('#carousel2').carouFredSel({
		width: '100%',
		direction   : "left",
		scroll : {
	        duration : 800
	    },
		items: {
			visible: 1
		},
		auto: {
			items: 1,
			timeoutDuration : 4000
		},
		prev: {
			button: '#prev2',
			items: 1
		},    
		next: {
			button: '#next2',
			items: 1
		}
	});

	

});

jQuery(document).ready(function(){
		
	"use strict";

// -----------------------------------------------------  UI ELEMENTS
	jQuery( "#accordion" ).accordion({
		heightStyle: "content"
	});
	
	jQuery( "#tabs" ).tabs();
	
	jQuery( "#tooltip" ).tooltip({
		position:{
			my: "center bottom-5",
			at: "center top"	
		}	
	});
	
	
// -----------------------------------------------------  UI ELEMENTS	
	jQuery('#nav ul.sf-menu').mobileMenu({
		defaultText: 'Go to ...',
		className: 'device-menu',
		subMenuDash: '&ndash;'
	});
	
	
// -----------------------------------------------------  NOTIFICATIONS CLOSER
	jQuery('span.closer').click(function(e){
		e.preventDefault();
		jQuery(this).parent('.notifications').stop().slideToggle(500);
	});

// -----------------------------------------------------  NAV SUB MENU(SUPERFISH)
	jQuery('#nav ul.sf-menu').superfish({
		delay: 250,
		animation: {opacity:'show', height:'show'},
		speed: 'slow',
		autoArrows: true,
		dropShadows: false
	});

// -----------------------------------------------------  TWITTER FEED
	jQuery('#tweets').jtwt({
		username: 'envato',
		count: 2,
		image_size: 50
	});

// -----------------------------------------------------  FLICKR FEED
	jQuery('#basicuse').jflickrfeed({
		limit: 8,
		qstrings: {
			id: '52617155@N08'
		},
		itemTemplate: 
		'<li>' +
			'<a href="{{link}}" target="_blank"><img src="{{image_s}}" alt="{{title}}"  /></a>' +
		'</li>'
	});	
	
// -----------------------------------------------------  GOOGLE MAP
	var myLatlng = new google.maps.LatLng(-34.397, 150.644);
	var myOptions = {
	  center:myLatlng,
	  zoom:8,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map"),  myOptions);
	var marker = new google.maps.Marker({
	  position: myLatlng,
	  map: map,
	  title:"Click Me for more info!"
	});
	
	var infowindow = new google.maps.InfoWindow({});
	
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.setContent("Write here some description"); //sets the content of your global infowindow to string "Tests: "
		infowindow.open(map,marker); //then opens the infowindow at the marker
	});
	marker.setMap(map);

});
