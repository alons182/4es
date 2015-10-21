;(function($){

  var $btnMenu = $('#btn-menu'),
      $menu = $('.header-menu');

  $btnMenu.on('click', function (e) {
    
      $menu.toggle();

  });

  $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('.header').addClass("header--fixed");
          } else {
              $('.header').removeClass("header--fixed");
          }
      });


var $banner = $(".banner .frame"),
    $latestNews = $('.latestNews-slider');
$banner.sly({
        horizontal: 1,
        itemNav: "forceCentered",
        itemSelector: ".banner .slidee li",
        smart: 1,
        activateMiddle: 1,
        activateOn: "click",
        cycleBy: "items",
        cycleInterval: 3500,
        prev: ".banner .prev",
        next: ".banner .next",
        pauseOnHover: 1,
        mouseDragging: 1,
        touchDragging: 1,
        releaseSwing: 1,
        startAt: 0,
        speed: 1200,
        elasticBounds: 1,
        easing: "easeOutExpo",
        keyboardNavBy: "items"
    });


  $latestNews.sly({
      horizontal: 1,
      itemNav: 'basic',
      smart: 1,
      activateOn: 'click',
      mouseDragging: 1,
      touchDragging: 1,
      releaseSwing: 1,
      startAt: 0,
      scrollBar: '#scrollbar',
      scrollBy: false,
      speed: 300,
      elasticBounds: 1,
      easing: 'easeOutExpo',
      dragHandle: 1,
      dynamicHandle: 1,
      keyboardNavBy: 'items',
      clickBar: 1
    });

     
   
 

 
$(window).load(function() {
      $banner.fadeTo(1000, 1);
      $('.loader').hide();
      resize();
});


$(window).resize(resize);

function resize () {
   $(".banner .slidee li").width($(window).width());

   $banner.sly('reload');
   $latestNews.sly('reload');
}
 //var posts = $('.page-blog-content article');


    /*posts.waypoint(function(direction) {
        if (direction === 'down') {
            $(this).stop(true, true).fadeOut(700);
        }
    }, {
        context: '.page-blog-content',
        offset: -50
    }).waypoint(function(direction) {
        if (direction === 'up') {
            $(this).stop(true, true).fadeIn(700);
        }
    }, {
        context: '.page-blog-content',
        offset: -50
    });*/
/*console.log(posts)
    posts.waypoint(function(direction) {
          if (direction === 'down') {
             // $(this).fadeOut(700);
             $($(this)[0].element).fadeOut(700);
              console.log('down')
          }
         
      }, {
        context: '.page-blog-content',
        offset: -50
        
      });
  posts.waypoint(function(direction) {
          if (direction === 'up') {
            //$(this).stop(true, true).fadeIn(700);
              $($(this)[0].element).fadeIn(700);
            console.log('up')
          }
      }, {
        context: '.page-blog-content',
        offset: -50
        
      });  */

    
})(jQuery);


