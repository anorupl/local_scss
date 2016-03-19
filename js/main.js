 /**
 * Theme functions file
 */

(function ($) {

    var $window = $(window);

    /**
    * Window load (jQuery)
    */
	$window.load(function() {
	  setTimeout(function(){ $("body").removeClass("preload"); }, 30);
	});


    /**
    * Document ready (jQuery)
    */
    $(function () {


		/**
		* Dropdown toggle vertical-dropdown menu.
		*/
		    var screenReaderText = {"expand":"<span class=\"screen-reader-text\">rozwi\u0144 menu potomne<\/span>","collapse":"<span class=\"screen-reader-text\">zwi\u0144 menu potomne<\/span>"};

			$( '.vertical.dropdown .menu .page_item_has_children > a, .vertical.dropdown .menu-item-has-children > a' ).after( '<button class="dropdown-toggle" aria-expanded="false">' + screenReaderText.expand + '</button>' );

			$( '.dropdown-toggle' ).click( function( e ) {
				var _this = $( this );
				e.preventDefault();
				_this.toggleClass( 'toggle-on' );
				_this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );
				_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
				_this.html( _this.html() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand );
			});


		/**
		* Activate main slider.
		*/
			$('#slider').sllider('',false, true);
			$('#footer-slider1').sllider('auto',true, true);
            $('#footer-slider2').sllider('auto',true, true);
            $('#footer-slider3').sllider('auto',true, true);
            $('#footer-slider4').sllider('auto',true, true);
            $('#footer-slider-thumbnails').sllider('auto','thumbnails', true);
            $('#footer-carousel').sllider('auto',true, true, 'slide',false,350,5 );



			$('#client-reviews').sllider('auto',true, false);




		/**
		* Activate rwd table.
		*/
	    	$("table").table();


		/*
         *  Funkcja menu
         */
		$('button.icon-button-small-menu').on('click', function(e){

			var item = $(this).next();
			var classes = $(item).data("class");

			$( item ).toggleClass( classes + " small-menu" );
			$( '#site-header' ).toggleClass( "menu-active" );

			e.preventDefault();
		});

		/*
         *  Funkcja menu focus
         */
		$( function() {	$( '.horizontal' ).find( 'a' ).on( 'focus blur', function() {
				$( this ).parents().toggleClass( 'focus' );
			});
		});

		/*
         *  Funkcja menu zmiana rozmiaru okna
         */
         $('nav').nav();

         $('#frans').franc();

/**
// Animacja ikon na głownej
	var $litem = jQuery('.item');
		$litem.hover(function(){
			var b = $(this).data("size");
			$(this).parent().addClass(b);
			$(this).parent().data("sec",b);

			$('#frans').franc();
		}, function(){
			$(this).parent().removeClass();
			$(this).parent().addClass('base');
			$(this).parent().data("sec",'base');
			$('#frans').franc();
	});
*/




    });

	/**
	* Function slider (Flexslider).
	*/
    $.fn.sllider = function(size, cnav, dnav, animation, loop, iwidth, imargin) {
        return this.each(function () {
        	var $this = $(this);


            $this.flexslider({
                animation: animation || "fade",
                controlNav: cnav || false,
                directionNav: dnav || false,
                animationLoop: loop || true,
                useCSS: true,
                smoothHeight: false,
                touch: true,
                pauseOnAction: true,
                itemWidth: iwidth || 0,
                itemMargin: imargin || 0
            });


			if ( size != 'auto') {
            $(window).on('resize focus', function () {
            	var windowheight = $(window).height();
            	var windowWidth = $(window).width();

            	if ($this.hasClass('fullscreen')) {
	            	if (windowWidth > 768) {
	            		if ( windowheight <= 675) {
						 var windowheight = 675;
						}
	            	}
            	}

            	$this.find('.slides, .slides > li').height(windowheight);


            }).resize();
			}

        });
    };


	/**
	* Function rwd table.
	*/
    $.fn.table = function() {
        return this.each(function () {
        	var headertext = [];

			var $this = $(this);

			$this.find('thead td, th').each(function(){
         		headertext.push($(this).html());
			});

			$this.find('tbody tr').each(function(){
    				$(this).find('td').each(function(index){
        					$(this).attr('data-th', headertext[index]);
					});
			});
		});
	};




   $.fn.nav = function(nav) {
        return this.each(function () {

           var $this = $(this);

           	$window.on('resize orientationchange', function () {

           	var window_height = $window.height();
           	var window_width = $window.width();

           		if (window_width > 768) {

					$classes = $this.data("class");

					// Usuwanie classy z menu
					if ($this.hasClass( "small-menu" )) {
						$( '#site-header' ).removeClass("menu-active");
						$this.removeClass();
						$this.addClass( $classes );
					 }
				}
			});
		});
  };




  $.fn.franc = function() {

  	var $this = $(this);
 	var tablica = {
        base: {
    	item_1: { y:0, x: 318},
    	item_2: { y:0, x: 154},
    	item_3: { y:102, x: 164},
    	item_4: { y:164, x: 472},
    	item_5: { y:318, x: 154},
    	item_6: { y:318, x: 62},
    	item_7: { y:318, x: 379}

	 },
        base1: {
    	item_1: { y:0,   x: 472},
    	item_2: { y:102, x: 154},
    	item_3: { y:102, x: 62},
    	item_4: { y:318, x: 370},
    	item_5: { y:318, x: 154},
    	item_6: { y:318, x: 10},
    	item_7: { y:318, x: 174}

	 },
        base2: {
    	item_1: { y:0, x: 318},
    	item_2: { y:0, x: 154},
    	item_3: { y:102, x: 164},
    	item_4: { y:164, x: 370},
    	item_5: { y:318, x: 154},
    	item_6: { y:318, x: 62},
    	item_7: { y:318, x: 226}
	 },
        base3: {
    	item_1: { y:102, x: 268},
    	item_2: { y:102, x: 52},
    	item_3: { y:0,   x: 164},
    	item_4: { y:318, x: 165},
    	item_5: { y:318, x: 1},
    	item_6: { y:318, x: 215},
    	item_7: { y:318, x: 379}
	 },
        base4: {
    	item_1: { y:0, x: 318},
    	item_2: { y:102, x: 154},
    	item_3: { y:154, x: 62},
    	item_4: { y:164, x: 472},
    	item_5: { y:318, x: 154},
    	item_6: { y:318, x: 10},
    	item_7: { y:318, x: 174}

	 },
        base5: {
        item_1: { y:0, x: 318},
        item_2: { y: 102,    x: 154},
        item_3: { y: 102,    x: 62},
        item_4: { y: 164,    x: 370},
        item_5: { y: 318,    x: 154},
        item_6: { y: 318,    x: 164},
        item_7: { y: 318,    x: 328},

	 },
        base6: {
        item_1: { y:0, x: 318},
        item_2: { y:102, x: 154},
        item_3: { y:102,   x: 62},
        item_4: { y:164,   x: 370},
        item_5: { y:318,   x: 154},
        item_6: { y:318,   x: 62},
        item_7: { y:318,   x: 379}

	 },
        base7: {
        item_1: { y:0, x: 318},
        item_2: { y: 102, x: 154},
        item_3: { y: 102, x: 62},
        item_4: { y: 164, x: 370},
        item_5: { y: 318, x: 154},
        item_6: { y: 318, x: 10 },
        item_7: { y: 318, x: 174}

     }
					};

   	return this.each(function () {

   		var item = $this.find('.item');

			item.mouseover(function() {
  				var b = $(this).data("size");
				var item_parent = $(this).parent();
				item_parent.addClass(b);
				item_parent.data("sec",b);

			   //funkcjamatematyczna
			   $().mat(item,tablica);

  		});




			item.mouseout(function() {


						var item_parent = $(this).parent();

						item_parent.removeClass();
						item_parent.addClass('base');
						item_parent.data("sec",'base');

						//funkcja matematyczna
						$().mat(item,tablica);

		  		});










   		$window.on('resize', function () {
 			$().mat(item,tablica);
   		}).resize();

   	});

  };

   $.fn.mat = function(item, tablica) {

 		var window_height = $window.height();
        var window_width = $window.width();
 		var scale = 1;
 		var size = 308;

		if(window_height < (size*2) && window_width > (size*3)) {
			scale=((window_height)/2.1)/size;
		}
		else {
			scale=((window_width)/4.1)/size;
		}



 		scale > 1 ? scale=1 : '';



   		var i = 1;

   				item.each(function(index, value){

					var tab = $(this).parent().data("sec");
   					var x = tablica[tab]['item_'+ i]['x'];
   					var y = tablica[tab]['item_'+ i]['y'];
					var x2 = x-((x*(scale*100))/100);
					var y2 = y-((y*(scale*100))/100);

						if (i == 3 || i == 6 || i == 7) {
							 $(this).css( 'transform', 'matrix('+ scale +',0,0,'+ scale +',-'+ x2 +', -'+ y2 +')');
						}
   						else {
   							 $(this).css( 'transform', 'matrix('+ scale +',0,0,'+ scale +','+ x2 +', -'+ y2 +')');
   						}

   					i++;

   				});
   };



})( jQuery );



