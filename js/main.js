jQuery(document).ready(function( $ ) {

			// Menu settings
			var control = new Control();
			var hint_ready = true;
			window.onscroll = function(){
				control.control_rightMenu_visibility();
				setTimeout(show_hint, 500);
			};
			//open menu
			$('#menuToggle, .menu-close').mouseover(function(){
				if(!control.menu_Opened)
				{
					control.menu_open_close()
					control.menu_Opened = true;
				}
			});

			//close menu
		    $('body').on('click', function(e){
		   		if(control.menu_Opened)
		   		{
		   			control.menu_open_close();
		   		    control.menu_Opened = false;
				    control.control_rightMenu_visibility();
		   		}
			});


			// Smooth scroll for the menu and links with .scrollto classes

			    $('.smoothscroll').on('click', function(e) {
			    	e.preventDefault();
			    	if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			      		var target = $(this.hash);
			      		if (target.length) {

			        $('html, body').animate({
			          scrollTop: target.offset().top
			        }, 1500, 'easeInOutExpo');
			      }
			    }
			    control.control_rightMenu_visibility();
			  });


			    $('.links-to-countries').on('click', function(e){

			    	$('html, body').animate({
			    	  scrollTop: 800
			    	}, 1500, 'easeInOutExpo');

			    });

			    var supp_button_close;
			    var supp_button_closed = true;
			    $('.material-button-toggle').on("click", function () {
			    	if(supp_button_closed){
			    		support_control();
			    		supp_button_close = setTimeout(support_control, 5000);
			    	}
			    	else
			    	{
			    		support_control();
			    		clearTimeout(supp_button_close);
			    	}
			    });

			    function support_control()
			    {
			    	supp_button_closed = !supp_button_closed;
			    	control.support_open_close();
			    }

			    function call_toggles()
			    {
			    	control.call_toggles();
			    }
			    function show_hint()
			    {
			    	if(window.pageYOffset > 300)
			    	{
			    		hint_ready = false;
			    	}
			    	else if(hint_ready && !control.menu_Opened){
			    		control.call_toggles();
			    		hint_ready = false;
			    		setTimeout(call_toggles, 3000);
			    	}
			    	else if(window.pageYOffset < 50)
			    	{
			    		hint_ready = true;
			    	}
			    }

			    //$('.tooltip').mouseover(function(e){
			    	//$(this).toggleClass('special');
			    //})

	    // Init Fancybox
	    jQuery(".fancybox").fancybox();

	    // Init Stellar
	    $.stellar({
	      horizontalScrolling: false,
	      verticalOffset: 40
	    });


});
