
  var swiper = new Swiper('.swiper1', {
      direction: 'vertical',
      slidesPerView: 3,
      spaceBetween: 30,
      centeredSlides: true,
      // loop: true,
      loopAdditionalSlides : 3,
      pagination: {
          clickable: true,
      },
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      on:{
          touchStart: function(swiper,event){

          },
          slideChangeTransitionEnd: function(){
              $a=this.activeIndex;
              $(".ino").removeClass("active");
              $(".ino").each(function(){
                  if($(this).attr("data-type")==$a){
                      $(this).addClass("active");
                  }
              })
          },
      },
  });
  $("#btn_exit").click(function(){
      $("#nav_").css("opacity","0");
      $("#nav_").css("pointer-events","none");
      $("#menu").css("opacity","1");
      $("html").removeClass("noscroll");
  });
  $("#menu").click(function(){
      $("#nav_").css("pointer-events","auto");
      $("#nav_").css("opacity","1");
      $("#menu").css("opacity","0");
      $("html").addClass("noscroll");

  });


