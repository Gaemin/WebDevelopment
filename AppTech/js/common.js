

(function($) {
	"use strict";

	$(window).load(function(){App.loader();});

	var App={
    init:function(){
      App.typing();
      App.menuAnimation();
      App.navigate();
      App.imagepopup();    	
      },
    loader:function(){$("div.preloader").fadeOut("slow");},
    typing:function(){
     $(".main-element").each(function(){
      var $this = $(this);
      $this.typed({
        strings: $this.attr('data-elements').split(','),
        typeSpeed: 100, // typing speed
        backDelay: 3000 // pause before backspacing
        });
      });
    },
    menuAnimation:function(){
       $(window).scroll(function(){
         var top_v=$(window).scrollTop();
         var themecolor="#f8198d";
        if(top_v>=30){
          $(".main-menu").css({height:"80px",padding:"15px",background:"#fff",boxShadow:"2px 2px 3px 3px rgba(0,0,0,0.3"});
          $(".main-menu.navbar-default .navbar-nav > li > a,a.navbar-brand").css("color","#000");
          $(".main-menu.navbar-default .navbar-nav > li > a").hover(function(){$(this).css("color",themecolor)},function(){$(this).css("color","#000")})
        }else{
          $(".main-menu").css({height:"0px",padding:"15px",background:"#000",boxShadow:"2px 2px 3px 3px rgba(0,0,0,0.3"});
          $("a.navbar-brand").css("color","#fff");          
          $(".main-menu.navbar-default .navbar-nav > li > a").css("color","#fafafa");
          $(".main-menu.navbar-default .navbar-nav > li > a:hover").css("color",themecolor);
          $(".main-menu.navbar-default .navbar-nav > li > a").hover(function(){$(this).css("color",themecolor)},function(){$(this).css("color","#fafafa")})
        }
       })},
    navigate:function(){
        $('a.page-scroll').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({scrollTop: target.offset().top-50}, 900);
            return false;
          }
        }
      });},
    imagepopup:function(){
        $('.show-image').magnificPopup({type: 'image'});},		
  };
        App.init();

})(jQuery);


