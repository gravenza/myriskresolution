$(document).ready(function(){
  var windowWidth = window.innerWidth;
  var windowHeight = window.innerHeight;

  console.log('Width:'+ windowWidth);
  console.log('Height:'+ windowHeight);

  $('.gallery-slider').bxSlider({
    auto:true,
    pagerCustom:'.bx-pager'
  });

  $('.testimony-slider').bxSlider({
    auto:true,
    controls:false
  });

  $('.menu').slicknav({
    label:'',
    prependTo:'.m-menu'
  });

  // COUNTING NUMBER
  $('section.projects').each(function(){
    var a = 0;
    $(window).scroll(function() {

      var oTop = $('#counter').offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter-value').each(function() {
          var $this = $(this),
            countTo = $this.attr('data-count');
          $({
            countNum: $this.text()
          }).animate({
              countNum: countTo
            },

            {

              duration: 2000,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
                //alert('finished');
              }

            });
        });
        a = 1;
      }

    });
  })

  if($(window).width() > 768){

    $(window).scroll(function(){
      if($(window).scrollTop() > 200){
        $('#header').addClass('header-freeze animated fadeInDown');
        $('#header .clearer').addClass('reduce-margin');
      }else{
        $('#header').removeClass('header-freeze animated fadeInDown');
        $('#header .clearer').removeClass('reduce-margin');
      }
    });

    $('#mainSlider .carousel-inner').css({'height': windowHeight });

    $('section.about-home').each(function(){

      var $section = $(this);

      $(window).on('scroll', aboutOnScroll);

      function aboutOnScroll(){

        var scrolled = $(window).scrollTop();

        $(".aboutOnScroll:not(.animated)").each(function(){

          var $this 		= $(this);

          if (scrolled > ($section.offset().top - 300)) {
            if($this.data('timeout')){
              window.setTimeout(function(){
              $this.addClass('animated ' + $this.data('animation'));
              $this.css('visibility','visible');
              }, parseInt($this.data('timeout'),10));

            }else{
              $this.addClass('animated ' + $this.data('animation'));
              $this.css('visibility','visible');
            };
          };

        });

        $(".aboutOnScroll.animated").each(function(index) {
          var $this   = $(this),
          offsetTop 	= $this.offset().top;

          if (scrolled < ($section.offset().top - 500)) {
            $this.removeClass('animated bounceInLeft bounceInDown bounceInRight');
            $this.css('visibility','hidden');
          }
        });

      };

      aboutOnScroll();

    });

    $('section.services').each(function(){

      var $section = $(this);

      $(window).on('scroll', serviceOnScroll);

      function serviceOnScroll(){

        var scrolled = $(window).scrollTop();

        $(".serviceOnScroll:not(.animated)").each(function(){

          var $this 		= $(this);

          if (scrolled > ($section.offset().top - 300)) {
            if($this.data('timeout')){
              window.setTimeout(function(){
              $this.addClass('animated ' + $this.data('animation'));
              $this.css('visibility','visible');
              }, parseInt($this.data('timeout'),10));

            }else{
              $this.addClass('animated ' + $this.data('animation'));
              $this.css('visibility','visible');
            };
          };

        });

        $(".serviceOnScroll.animated").each(function(index) {
          var $this   = $(this),
          offsetTop 	= $this.offset().top;

          if (scrolled < ($section.offset().top - 500)) {
            $this.removeClass('animated bounceInUp bounceInLeft bounceInDown bounceInRight');
            $this.css('visibility','hidden');
          }
        });

      };

      serviceOnScroll();

    });

    $('section.projects').each(function(){

      var $section = $(this);

      $(window).on('scroll', projectOnScroll);

      function projectOnScroll(){

        var scrolled = $(window).scrollTop();

        $(".projectOnScroll:not(.animated)").each(function(){

          var $this 		= $(this);

          if (scrolled > ($section.offset().top - 300)) {
            if($this.data('timeout')){
              window.setTimeout(function(){
              $this.addClass('animated ' + $this.data('animation'));
              $this.css('visibility','visible');
              }, parseInt($this.data('timeout'),10));

            }else{
              $this.addClass('animated ' + $this.data('animation'));
              $this.css('visibility','visible');
            };
          };

        });

        $(".projectOnScroll.animated").each(function(index) {
          var $this   = $(this),
          offsetTop 	= $this.offset().top;

          if (scrolled < ($section.offset().top - 500)) {
            $this.removeClass('animated bounceInUp bounceInLeft bounceInDown bounceInRight');
            $this.css('visibility','hidden');
          }
        });

      };

      projectOnScroll();

    });

    $('section[data-type="background"]').each(function(){
      var $bgobj = $(this);

      $(window).scroll(function(){

        // Scroll the background at var speed
  			// the yPos is a negative value because we're scrolling it UP!
  			if($bgobj.data('order')==0){
    			if($(window).scrollTop() > 0){
    				var yPos = -(($(window).scrollTop() - $('section.services').offset().top) / $bgobj.data('speed'));
    			}
  			}

        if($(window).scrollTop() == 0){
  			  var coords = 'center';
        }else{
          var coords = '50% '+ yPos + 'px';
        }

        // Move the background
  			$bgobj.css({ backgroundPosition: coords });

      })

    })

  }//END IF

})
